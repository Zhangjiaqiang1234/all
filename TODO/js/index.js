window.onload = function(){
	// 屏幕移动1px 触发动画
	setTimeout(function(){
		$('html,body').scrollTop($(document).scrollTop() + 1);
	},10)
}


$(document).ready(function(){

	// 收集 scroll 类名的元素，取数值，进行监听
	var scrollArr = [];
	$('.scroll').each(function(index,ev){
		scrollArr.push($(this).offset().top)
	})

	var wh = document.documentElement.clientHeight, // 屏幕高度
		winPos;// 滚动条高度

	$(document).scroll(function(e){ // 监听页面滚动事件
		winPos = $(document).scrollTop();
		for(var i=0; i<scrollArr.length;i++){ // 判断是不是区间
			if(winPos+wh > scrollArr[i] && scrollArr[i] > winPos){
				$('.scroll').eq(i).addClass('active');
			}
		}
    });

    // 地球特效
	var select = function(s) {
	    return document.querySelector(s);
  	},
  	selectAll = function(s) {
	    return document.querySelectorAll(s);
  	}, 
  	animationWindow = select('#animationWindow'),    
	    animData = {
			wrapper: animationWindow,
			animType: 'svg',
			loop: true,
			prerender: true,
			autoplay: true,
			path: 'js/test.json' 
		}, anim;

	anim = bodymovin.loadAnimation(animData);
 	//anim.addEventListener('DOMLoaded', onDOMLoaded);
 	anim.setSpeed(.8);


	if(window.pc === true){ // PC端事件

		// banner 鼠标移动动画
		var obj = {
			imgData: { // 要移动的对象
			    mountain1:{
					top: 120,
					left: -200,
					scale:-0.01,
					el: document.querySelector('#mountain1')
			    },
			    mountain2:{
			      	top: 150,
			      	left: -177,
			      	scale:0.02,
			      	el: document.querySelector('#mountain2')
			    },
			    mountain3: {
			      	top: 620,
			      	left: 900,
			      	scale: -0.02,
			      	el: document.querySelector('#mountain3')
			    },
			    bannerLogo: {
			      	top: 138,
			      	left: 300,
			      	scale: -0.0,
			      	el: document.querySelector('#banner-logo')
			    },
			    bannerText: {
			      	top: 205,
			      	left: 300,
			      	scale: -0.0,
			      	el: document.querySelector('#banner-text')
			    },
			    bigBall: {
			      	top: 140,
			      	left: 840,
			      	scale: -0.02,
			      	el: document.querySelector('#big-ball')
			    },
			    smBall: {
			      	top: 200,
			      	left: 188,
			      	scale: 0.02,
			      	el: document.querySelector('#sm-ball')
			    },
		  	},
		  	rate_w: 0,
		    rate_h: 0,//偏移的比例
		    field_width: 1366,
		    field_height: 760,//背景高度和宽度
		    init: function() {//初始化加载方法
			    this.setRateWH();
			    this.placeImg();
			    this.attachMouseEvent();
			},
			setRateWH: function() {//计算偏移比的方法
		        var window_width = document.body.clientWidth;
		        var window_height = document.body.clientHeight;
		        this.rate_w = this.field_width/window_width;
		        this.rate_h = this.field_height/window_height;
		    },
		    placeImg: function() {//初始化位置信息
			    for(i in this.imgData){//遍历imageData 对象
			      var left = this.imgData[i].left;
			      var top = this.imgData[i].top;    
			      this.imgData[i].el.style.left = left + 'px';
			      this.imgData[i].el.style.top = top + 'px';
			    }
		    },
		    attachMouseEvent: function() {
		        var that = this;
		        document.body.onmousemove = function(e){
		          that.picMove(e.pageX,e.pageY);
		        }
		    },
		    picMove: function(pageX,pageY) {//鼠标移动时重新画图的方法
		        for(i in this.imgData) {
		            var offer_w = this.rate_w * pageX * this.imgData[i].scale;
		          	var offer_h = this.rate_h * pageY * this.imgData[i].scale * 0;
		            //定义 left和top,下面画图时给参数定位
		            var left = this.field_width/100 - offer_w + this.imgData[i].left; 
		            var top = this.field_height/100 - offer_h + this.imgData[i].top;
		            this.imgData[i].el.style.left = left + 'px';
		            this.imgData[i].el.style.top = top + 'px';
		        }
		    }
	    }

	    obj.init();


	    // PC端获取新闻资讯
	    window.baseJs._ajax(window.baseJs.baseUrl+'/api/v1/article/getArticleList?page=1&limit=6',function(data){
	    	if(data && data.code==1){
	    		var list = data.data.list;
	    		var str = '';
	    		for(var i = 0 ; i < list.length ; i++){
	    			var data = list[i];
	    			if(i%3==0){
	    				str += '<div class="el-row">';
	    			}
	    			str += '<li>'
	    			+'<a href="newsShow.php?id='+data.id+'">'
	    			+'<div class="img-box">'
	    			+'<img src="'+window.baseJs.imageUrl+data.image+'">'
	    			+'</div>'
	    			+'<h2>'+(window.lan==="cn"?data.title:data.e_title)+'</h2>'
	    			+'<p class="text slh1" title="'+(window.lan==="cn"?data.describe:data.e_describe)+'">'+(window.lan==="cn"?data.describe:data.e_describe)+'</p>'
	    			+'</a>'
	    			+'</li>';
	    			if((i+1)%3==0){
	    				str += '</div>';
	    			}
	    		}
	    		$('.news-list.pc').append(str);
	    	}
	    });

	}else{ // 移动端事件
		
		// 移动端获取新闻资讯
	    window.baseJs._ajax(window.baseJs.baseUrl+'/api/v1/article/getArticleList?page=1&limit=6',function(data){
	    	if(data && data.code==1){
	    		var list = data.data.list;
	    		var str = '';
	    		for(var i = 0 ; i < list.length ; i++){
	    			var data = list[i];
	    			if(i%2==0){
	    				str += '<div class="el-row">';
	    			}
	    			str += '<li>'
	    			+'<a href="newsShow.php?id='+data.id+'">'
	    			+'<div class="img-box">'
	    			+'<img src="'+window.baseJs.imageUrl+data.image+'">'
	    			+'</div>'
	    			+'<h2>'+(window.lan==="cn"?data.title:data.e_title)+'</h2>'
	    			+'<p class="text slh1" title="'+(window.lan==="cn"?data.describe:data.e_describe)+'">'+(window.lan==="cn"?data.describe:data.e_describe)+'</p>'
	    			+'</a>'
	    			+'</li>';
	    			if((i+1)%2==0){
	    				str += '</div>';
	    			}
	    		}
	    		$('.news-list.phone').append(str);
	    	}
	    });

	}


})
window.baseJs = {
	_getQueryString: function(e) {  //得到查询字符串
        var t = new RegExp("(^|&)" + e + "=([^&]*)(&|$)", "i"),
        n = window.location.search.substr(1).match(t);
        return null != n ? unescape(n[2]) : null
    },
    _ajax: function(url,callback,data,type,datatype,async) {
        return $.ajax({
            url: url,
            data: data || {},
            type: datatype || "post",
            dataType:datatype || 'JSON',
            async: async || !0,
            success: function(data){
            	callback(data);
            },
            error: function(data) {
                console.log("ajax请求失败  url = "+url);
                callback();
            }
        })
    },
    updateUserInfo:function(key,val){
        var userObj = baseJs.getCookie('userinfo');
        if(userObj == 0){
            console.log('error:not userinfo');
            return;
        }
        userObj = JSON.parse(userObj);
        userObj[key] = val;
        baseJs.setCookie('userinfo',JSON.stringify(userObj));
    },
    setCookie : function(name,value,Min){	//设置cookie
        var Min = Min || 20;
        var exp = new Date();
        exp.setTime(exp.getTime() + Min*60*1000);
        document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString()+";path=/";
    },
    getCookie : function(name){				//获取cookie
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr=document.cookie.match(reg)){
            return unescape(arr[2]);
        }else{
            baseJs.setCookie(name,0);
            return 0;
        }
    },
    getUserInfo:function(name){
        var obj = JSON.parse(baseJs.getCookie('userinfo'));
        return obj[name];
    },
    delCookie: function(e) {    //删除 cookie
        var t = this,
        n = new Date;
        n.setTime(n.getTime() - 1);
        var o = t.getCookie(e);
        null != o && (document.cookie = e + "=" + o + ";expires=" + n.toGMTString())+";path=/";
    },
    getDateDiff:function(dateTimeStamp){    //获取中文的时间间隔
        var minute = 1000 * 60;
        var hour = minute * 60;
        var day = hour * 24;
        var halfamonth = day * 15;
        var month = day * 30;
        var now = new Date().getTime();
        var diffValue = now - dateTimeStamp;
        if(diffValue < 0){return;}
        var monthC =diffValue/month;
        var weekC =diffValue/(7*day);
        var dayC =diffValue/day;
        var hourC =diffValue/hour;
        var minC =diffValue/minute;
        if(monthC>=1){
            result="" + parseInt(monthC) + "月前";
        }
        else if(weekC>=1){
            result="" + parseInt(weekC) + "周前";
        }
        else if(dayC>=1){
            result=""+ parseInt(dayC) +"天前";
        }
        else if(hourC>=1){
            result=""+ parseInt(hourC) +"小时前";
        }
        else if(minC>=1){
            result=""+ parseInt(minC) +"分钟前";
        }else
        result="刚刚";
        return result;
    },
    getNowFormatDate:function(time,type) {
        var type = type || 'yyyy-MM-dd';
        var date = new Date(time);
        var seperator1 = "-";
        var seperator2 = ":";
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate;


        type.indexOf('hh') > -1 ? currentdate += " "+date.getHours() : '';
        type.indexOf('mm') > -1 ? currentdate += seperator2+date.getMinutes() : '';
        type.indexOf('ss') > -1 ? currentdate += seperator2+date.getSeconds() : '';

        return currentdate;
    },
    lxMsg:function(text, callback){   //模态窗 弹出信息
        if ($(".lx-msg")) {
            $(".lx-msg").remove();
        }
        $("body").append("<div class='lx-msg'>" + text + "</div>");

        var msg = $(".lx-msg");
        var w = msg[0].offsetWidth;
        var h = msg[0].offsetHeight;

        msg.css({"opacity": "1", "marginTop": -h / 2, "marginLeft": -w / 2});

        setTimeout(function () {
            msg.css("opacity", "0");

            setTimeout(function () {
                msg.remove();
                if (callback != undefined) {
                    callback();
                }
            }, 500)

        }, 2000);
    },
    check:function(obj){    //验证码
        var loginSlider = $('.login-slider'),       //总体容器
            loginSliderBg = $('.login-slider-bg'),  //绿色容器
            loginText = $('.login-text'),           //文字内容
            loginBox = $('.login-box');             //拖拽按钮
        var downEvent = 'mousedown',
            moveEvent = 'mousemove',
            upEvent = 'mouseup';

        if(!window.pc){
            downEvent = 'touchstart';
            moveEvent = 'touchmove';
            upEvent = 'touchend';
        }

        var allW = loginSlider.width(),
            btnW = loginBox.outerWidth(true),
            finish = false;

        var startFn = function(e){  //鼠标按下
            //获取当前点击点距离屏幕左侧距离
            var e = e || e.event,ev = e;

            if(!window.pc) ev = e.touches[0];
            
            var startX = ev.clientX;
            var moveFn = function(e){
                var e = e || e.event,ev = e;
                e.preventDefault();
                if(!window.pc) ev = e.touches[0];

                //获取移动的距离
                var moveX = ev.clientX - startX;
                //移动按钮
                if(moveX<0){
                    moveX = 0;
                }else if(moveX >= (allW - btnW)){
                    moveX = allW - btnW;
                    document.body.removeEventListener(moveEvent,moveFn,false);
                    loginBox.addClass('succ');
                    finish = true;
                    loginBox[0].removeEventListener(downEvent,startFn,false);
                    loginText.text('验证成功').addClass('succ');
                    obj && obj.hasOwnProperty('check') && (obj.check = true) && obj.hasOwnProperty('call') && obj.call();
                    loginSliderBg.css('width',(allW - btnW));
                    loginBox.css('left',(allW - btnW));
                    return false;
                }
                loginSliderBg.css('width',moveX);
                loginBox.css('left',moveX);

            }
            document.body.addEventListener(moveEvent,moveFn,false);
            document.body.addEventListener(upEvent,function(){
                //鼠标松开的时候，如果还没滑到尾，那么动画滑回去

                if(!finish){
                    loginSliderBg.stop().animate({'width':0});
                    loginBox.stop().animate({'left':0});
                }
                document.body.removeEventListener(moveEvent,moveFn,false);
            },false);


        }
        loginBox[0].addEventListener(downEvent,startFn,false);
    },
    checkLogin:function(){  //检查是否是登录状态
        if(1*baseJs.getCookie('islogin') == 0){
            baseJs.loginBoxToggle();
            return false;
        }else if(1*baseJs.getCookie('islogin') == 1){
            return true;
        }
    },
    loginBoxToggle:function(type,url){
        var type = type || 'show';
        if(type == 'show'){
            var str = '<div class="login-mask">'
            +'<div class="login-wrap">'
            +'<div class="close-login-box"></div>'
            +'<div class="login-wrap-head"></div>'
            +'<h1>帐号登录</h1>'
            +'<div class="login-ipt-box">'
            +'<input class="login-username" type="text" name="" placeholder="手机号/用户名">'
            +'<i class="clear-input"></i>'
            +'<span>用户名不得为空！</span>'
            +'</div>'
            +'<div class="login-ipt-box">'
            +'<input class="login-password" type="password" name="" placeholder="请输入密码">'
            +'<i class="clear-input"></i>'
            +'<span>密码不得为空！</span>'
            +'</div>'
            +'<div class="login-type clearfix">'
            +'<a class="lf" href="register.php">帐号注册</a>'
            +'<a class="rt" href="reset.php">忘记密码</a>'
            +'</div>'
            +'<button class="login-btn">登录</button>'
            +'</div>'
            +'</div>';
            $('body').append(str);
            //绑定事件
            $('.login-btn').unbind('click');
            $(document).unbind('keydown');
            var uname = $('.login-username');
            var pwd = $('.login-password');
            uname.on('input',function(){
                uname.val() && uname.parent().removeClass('show');
            })
            pwd.on('input',function(){
                pwd.val() && pwd.parent().removeClass('show');
            })
            $(document).on('click','.clear-input',function(){
                $(this).prev().val('').focus();
            })
            $(document.body).css({  //禁止页面滑动
                "overflow-y": "hidden"  
            });  
            //用户名获得焦点
            $('.login-username').focus();
            var toLogin = function(){
                if(uname.val() == ''){
                    uname.parent().addClass('show');
                }else if(pwd.val() == ''){
                    pwd.parent().addClass('show');
                }else{
                    baseJs._ajax(baseJs.baseUrl+'/api/user/login',function(data){
                        if(data && data.code == 1){ //登录成功
                            baseJs.lxMsg(data.msg);
                            var obj = data.data.userinfo;
                            baseJs.setCookie('userinfo',JSON.stringify(obj))
                            baseJs.setCookie('islogin',1);
                            setTimeout(function(){
                                if(url){
                                    top.location.href = url;
                                }else{
                                    history.go(0);
                                }
                            },500);
                            //改变登录状态
                        }else if(data){
                            baseJs.lxMsg(data.msg);
                        }
                    },{account:uname.val(), password:pwd.val() }) 
                }
            }
            $('.login-btn').click(toLogin);
            $(document).keydown(function(e){
                if(e.keyCode == 13){
                    toLogin();
                }
            })
        }else if(type == 'hide'){
            $('.login-mask').remove();
            $(document.body).css({  
                "overflow-y": "auto"  
            });  
        }
    },
    baseUrl : 'http://47.96.189.186',
    imageUrl:'http://47.96.189.186'
};

window.listModel = {
    projectListModel:function(obj){    //项目列表模板
        var str = '';
        str += '<div class="pro-eval-box">';
        str += '<a class="pro-mask-a" href="show_project.php?id='+obj.id+'"></a>';

        if(obj.flag == 1){
            str += '<div class="tips tip-hot">热门</div>';
        }else if(obj.flag == 2){
            str += '<div class="tips tip-select">精选</div>';
        }


        str += '<div class="pro-eval-img" style="background-image: url('+baseJs.imageUrl+obj.image+')"></div>';
        str += '<div class="pro-start">';
        str += '<h2>'+obj.project_name+'</h2>';
        str += '<div class="star-evaluate">';

        var ge = Math.floor(1*obj.level),
            dian = 1*obj.level.substr(obj.level.indexOf('.')+1,1),
            temp = ge*10,
            tempFlag = true;

        for(var i = 0 ; i < 5 ; i++){   //星级评定生成
            if(temp >= 10){
                str += '<div class="star star-'+(i+1)+' star-full-10"></div>';
                temp -= 10;
            }else if(tempFlag){
                tempFlag = false;
                str += '<div class="star star-'+(i+1)+' star-full-'+(1*dian)+'"></div>';
            }else{
                str += '<div class="star star-'+(i+1)+' star-full-0"></div>';

            }
            
        }
        
        str += '</div>';
        str += '<div class="pro-score">'+ge+'<span>.'+dian+'</span></div>';
        str += '<p class="slh4" title="'+obj.description+'">'+obj.description+'</p>';
        str += '<a class="jump-project" href="show_project.php?id='+obj.id+'">项目主页</a>';
        str += '</div>';

        return str;
    },
    artListModel:function(obj){         //首页文章列表模板
        var str = '';
        str += '<dd>';
        str += '<a class="mod-logo" href="show_info.php?id='+obj.id+'" target="_blank" ><img  src="'+(obj.image!=""?baseJs.imageUrl+obj.image:'')+'"></a>';
        str += '<div class="mod-mes">';
        str += '<a class="mod-title slh2" href="show_info.php?id='+obj.id+'" target="_blank">'+obj.title+'</a>';
        str += '<p class="slh5 mod-p">'+obj.describe+'</p>';
        str += '<ul class="mod-bottom-mes">';
        str += '<li class="mod-newleft"><a href="show_info.php?id='+obj.id+'">'+obj.author+' </a> </li>';
        str += '<li class="mod-date"><span>'+window.baseJs.getDateDiff(obj.updatetime*1000)+'</span></li>';
        str += '<li class="changtag"><i></i>';
        for(var n = 0 ; n < obj.keywords.length ; n++){
            str += '<a href="show_info.php?id='+obj.id+'">'+obj.keywords[n]+'</a>';
        }
        str += '</li>';
        str += '<li class="right-fire"> <i></i> <span>'+obj.view+'</span> </li>';
        str += '</ul>';
        str += '</div>';
        str += '</dd>';
        return str;
    },
    productListModel:function(obj){     //产品列表模板
        var str = '';
        str += '<li class="product-li">';
        str += '<a href="'+obj.link+'">';
        str += '<img class="product-logo img-load" src="'+baseJs.imageUrl+obj.image+'">';
        str += '<div class="product-mes">';
        str += '<h2>'+obj.title+'</h2>';
        
        str += '<div class="product-start">';

        var star = Math.floor(1*obj.level);
        for(var i = 0 ; i < 5 ; i ++){
            if(star > 0){
                star--;
                str += '<i class="start-full"></i>';
            }else{
                str += '<i class="start-hollow"></i>';
            }
        }
        str += '</div>';


        str += '<p class="slh6" title="'+obj.description+'">'+obj.description+'</p>';
        str += '</div>';
        str += '</a>';
        str += '</li>';

        return str;
    },
    getHotArticleModl:function(){
        baseJs._ajax(baseJs.baseUrl+'/api/v1/article/getarticlelist?page=1&limit=8&order=view&sort=desc',function(data){
            if(data && data.code == 1){
                var str = '';
                for(var i = 0 ; i < data.data.list.length ; i++){
                    var obj = data.data.list[i];
                    str += '<li class="'+(i==0?"hot-first-art":"")+'">'
                    +'<a href="show_info.php?id='+obj.id+'">'
                    +'<span class="hot-num">'+(i+1)+'</span>'
                    +'<img class="hot-art-logo" src="'+(obj.image?baseJs.imageUrl+obj.image:"")+'" alt="">'
                    +'<p class="slh'+(i==0?1:2)+'">'+obj.describe+'</p>'
                    +'</a>'
                    +'</li>'
                }
                $('.hot-article ul').html(str);
            }
        })
    }
};

document.body.activityShow = function () {
    for (var i = 0; i < arguments.length; i++) {
        $(arguments[i]).addClass("show");
    }
    $("body , html").css({"height": "100%", "overflow-y": "hidden"});
}
document.body.activityHide = function () {
    for (var i = 0; i < arguments.length; i++) {
        $(arguments[i]).removeClass("show");
    }
    $("body , html").css({"height": "auto", "overflow-y": "visible"});
}
document.body.openNewWindow = function (url) {
    window.open(url, '_blank').location;
}


$(document).ready(function(){

    //添加登录事件
    $(document).on('click','.show-login-box',function(){
        baseJs.loginBoxToggle('show');
    })
    //点击关闭按钮登录框
    $(document).on('click','.close-login-box',function(){
        baseJs.loginBoxToggle('hide');
    })
    //确认登录状态
    if(1*baseJs.getCookie('islogin') == 1){ //已登录
        $('.login-mes').addClass('active');
        $('.user-logo').attr('src',baseJs.getUserInfo('avatar')?(baseJs.imageUrl+baseJs.getUserInfo('avatar')):'img/avatar.jpg');
        $('.logined>span').html(baseJs.getUserInfo('nickname'));
        //添加退出登录事件
        $(document).on('click','.to-quit',function(){
            baseJs._ajax(baseJs.baseUrl+'/api/user/logout',function(data){
                if(data && data.code == 1){
                    baseJs.lxMsg('用户退出成功！');
                    //清除 cookie
                    baseJs.setCookie('islogin',0);
                    baseJs.setCookie('userinfo','');
                    setTimeout(function(){
                        window.location.href = 'index.php';
                    },500);
                }
            },{
                token:baseJs.getUserInfo('token')
            })
        })
    }
    //点击写文章
    $(document).on('click','.write-article',function(){
        if(1*baseJs.getCookie('islogin') == 1){ //如果用户已登录，则跳转页面
            top.location.href = 'writing.php';
        }else{  //如果用户未登录，则显示登录框
            baseJs.loginBoxToggle('show','writing.php');
        }
    })


	//头部JS交互效果
	var body = $('body'),
		wapNavBtn = $(".wap-nav-btn"),	//汉堡包
		mask = $('.mask'),				//遮罩
		nav = $('.nav'),				//导航
		loginMes = $(".login-mes");		//用户登录信息


	if(window.pc == true){	//PC端交互事件
		//搜索框交互效果
		var search = $(".search"),			
			searchTrigger = $(".search .search-trigger"),	//触发搜索的按钮
			searchBox = $(".search-box");			//搜索框容器

		searchTrigger.click(function(){
			if(search.hasClass('active')){
				searchBox.fadeOut(300);
			}else{
				searchBox.fadeIn(300);
			}
			search.toggleClass('active');
		})

		$('body').click(function(e){
			var that = $(e.target);
			if(!that.is('.search-not-trigger')){
				search.removeClass('active');
				searchBox.fadeOut(300);
			}
		})


	}else if(window.pc == false){	//移动端交互事件

		mask.on('touchmove',function(e){
			e.preventDefault();
		})
		nav.on('touchmove',function(e){
			e.preventDefault();
		})
		loginMes.on('touchmove',function(e){
			e.preventDefault();
		})

		wapNavBtn.click(function(){
			var active = wapNavBtn.hasClass('active');
			wapNavBtn.toggleClass('active');

			if(!active){	//此时应该展开移动端侧导航
				mask.show();
				body.animate({'left':'-2.84rem'});
				nav.animate({'right':0});
				loginMes.animate({'right':'0rem'});

			}else{			//此时应该收起移动端侧导航
				body.animate({'left':'0'});
				loginMes.animate({'right':'-2.84rem'});
				nav.animate({'right':'-2.84rem'},function(){
					mask.hide();
				});

			}
		})


        //给访问电脑版赋值路径
        var url=location.search;
        var appendStr = (url.indexOf("?")!=-1)?'&':'?';
  
        $('.to-pc').attr('href',location.href+appendStr+'source=pc')
	}	
})




function log(){
    for(var i = 0 ; i < arguments.length ; i++){
        console.log(arguments[i]);
    }
}
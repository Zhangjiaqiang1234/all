var isTop = true;
// window.onload = function(){ // 刷新让页面回到最顶端
// 	setTimeout(function(){
// 		$(window).scrollTop(0);
// 		isTop = true;
// 	},10);
// }



$(document).ready(function(){

	// 收集 scroll 类名的元素，取数值，进行监听
	var scrollArr = [];
	$('.scroll').each(function(index,ev){
		scrollArr.push($(this).offset().top)
	})

	var wh = document.documentElement.clientHeight, // 屏幕高度
		winPos;// 滚动条高度

	$(document).scroll(function(e){ // 监听页面滚动事件
		if(isTop){
			winPos = $(document).scrollTop();
			for(var i=0; i<scrollArr.length;i++){
				if(winPos+wh > scrollArr[i]){
					$('.scroll').eq(i).addClass('active');
				}
			}
		}
    });


	if(window.pc === true){ // PC端事件

	}else{ // 移动端事件
		// 顶部汉堡事件
		var navList = $('.phone-nav-list');
		$('.hanbao').click(function(){
			var that = $(this);
			var show = that.hasClass('active');
			if(show){ // 如果当前是展示状态，那么收起
				that.removeClass('active');
				navList.stop().slideUp();
			}else{
				that.addClass('active');
				navList.stop().slideDown();
			}
		})
		$(document).click(function(e){
			if($('.hanbao').hasClass('active') && !$(e.target).hasClass('hanbao')){
				$('.hanbao').removeClass('active');
				navList.stop().slideUp();
			}
		})


	}


})
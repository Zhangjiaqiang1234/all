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



	if(window.pc === true){ // PC端事件

	


	}else{ // 移动端事件
		
		
	}


})
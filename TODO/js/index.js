var isTop = true;
// window.onload = function(){ // 刷新让页面回到最顶端
// 	setTimeout(function(){
// 		$(window).scrollTop(0);
// 		isTop = true;
// 	},10);
// }



$(document).ready(function(){


	jQuery.rnd = function(m,n) {
      	m = parseInt(m);
      	n = parseInt(n);
      	return Math.floor( Math.random() * (n - m + 1) ) + m;
	}
	function bubbles() {
	   $.each($(".particletext.bubbles"), function(){
	      	var bubblecount = ($(this).width()/50)*10;
	      	for(var i = 0; i <= bubblecount; i++) {
         		var size = ($.rnd(40,80)/10);
         		$(this).append('<span class="particle" style="top:' + $.rnd(20,80) + '%; left:' + $.rnd(0,95) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,30)/10) + 's;"></span>');
      		}
	   });
	}
	
	bubbles();


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



})
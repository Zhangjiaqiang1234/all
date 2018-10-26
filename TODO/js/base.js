$(document).ready(function(){

    if(window.pc === true){ // PC端
        // logo 粒子动效
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
    }

    // 点击导航锚点自动跳转
    var jump,navList;
    if(window.pc === true){
        jump = $('.pc .pc-nav-list .jump');
    }else{
        jump = $('.phone .phone-nav-list .jump');
    }
    // 获取目的位置数组
    var jumpArr = [];
    $('.jump-pos').each(function(index,el){
        jumpArr.push($(this).offset().top);
    })

    jump.click(function(){ // 导航点击事件
        jump.removeClass('active');
        $(this).addClass('active');
        var pos = jumpArr[$(this).index()]-120;
        $('html,body').animate({
            scrollTop: pos
        })
    })

})
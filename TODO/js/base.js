$(document).ready(function(){

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



    if(window.pc !== true){
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

});

window.baseJs = { // 封装部分方法
    _getQueryString: function(e) {  //得到查询字符串
        var t = new RegExp("(^|&)" + e + "=([^&]*)(&|$)", "i"),
        n = window.location.search.substr(1).match(t);
        return null != n ? unescape(n[2]) : null
    },
    _ajax: function(url,callback,data,type,datatype,async) { // ajax请求
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
    baseUrl : 'http://todoblock.io',
    imageUrl:'http://todoblock.io'
};
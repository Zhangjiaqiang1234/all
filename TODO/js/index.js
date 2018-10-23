

$(document).ready(function(){

    var act = baseJs._getQueryString('act');
    if(act == 'login'){
        if(1*baseJs.getCookie('islogin') == 0){
            baseJs.loginBoxToggle();
        }
    }

    var mainLeftTabHead = $(".main-tab-head .swiper-slide"),    //选项卡头
        mainLeftTabCon = $(".main-left-con>li"),                //选项卡体
        mainLeftTabIndex = 0 ,                                  //记录当前选项卡显示的下标
        listLimit = 10;                                          //左侧 一页显示多少数据

    var loadMore = $(".load-more"),     //浏览更多按钮
        canLoad = true;                 //是否可以继续加载


    //通用部分JS
    
    //加载项目(Skycoin)
    baseJs._ajax(baseJs.baseUrl+'/api/v1/project/getProjectList?page=1&limit=9&is_banner=1',function(data){
        var project = $('.project-eval .swiper-wrapper .swiper-slide');
        if(data && data.code == 1){
            str = '';
            for(var i = 0 ; i < data.data.list.length && i < 9 ; i++){
                str = window.listModel.projectListModel(data.data.list[i]);
                project.eq(i).html(str);
            }
        }
    })


    //先获取文章分类（main部分）
    baseJs._ajax(baseJs.baseUrl+'/api/v1/article_category/getcategory?order=weigh&sort=desc',function(data){
    
        if(data && data.code == 1){
            //按权重排序
            
            data.data.sort(function(x,y){
                return y.weigh - x.weigh;
            })
        

            mainLeftTabHead.eq(0).html('<span>最新<div class="line"></div></span>');
            mainLeftTabHead.eq(1).html('<span>我的关注<div class="line"></div></span>');
            for(var i = 0 ; i < data.data.length && i < 8 ; i++){
         
                mainLeftTabHead.eq(i+2).html('<span>'+data.data[i].name+'<div class="line"></div></span>');
            }
            //设置导航头

            data.data.unshift({'id':-1},{'id':-2});

            //循环获取循环体
            for(var i = 0 ; i < data.data.length && i < 8 ; i++){
                var that_data = data;
                ;(function(i){
                    var url = baseJs.baseUrl+'/api/v1/article/getarticlelist?page=1&limit='+listLimit+'&category_id='+data.data[i].id+'&flag=1&type=1';
                    if(i == 0){
                        url = baseJs.baseUrl+'/api/v1/article/getarticlelist?page=1&limit='+listLimit+'&order=updatetime&sort=desc&type=1';
                    }else if(i == 1 &&baseJs.getCookie('islogin') == 1){
                        url = baseJs.baseUrl+'/api/user/myfollow?page=1&limit='+listLimit+'&user_id='+baseJs.getUserInfo('id')+'&token='+baseJs.getUserInfo('token')+'&type=1';
                    }
                    
                    var c = data.data[i].id;
                    baseJs._ajax(url,function(data){
                        if(data && data.code == 1){
                            var str = '';
                            for(j = 0 ; j < data.data.list.length ; j++){
                                var obj = data.data.list[j];

                                str += window.listModel.artListModel(obj);
                                
                            }
                            var that = mainLeftTabCon.eq(i);
                            that.attr('data-current-page',data.data.page.current_page); //当前页数
                            that.attr('data-total-page',data.data.page.total_page);     //总页数
                            that.attr('data-category-id',that_data.data[i].id);         //文章分类ID
                            that.find('>dl').html(str);
                            if(i == 0){
                                checkCanLoad();
                            }
                        }

                    });
                })(i);
            }
        }
    })


    //主体左侧选项卡点击效果
                                   
    $('body').on('click','.main-tab-head .swiper-slide',function(){
        var index = $(this).index();
        if(index != mainLeftTabIndex){
            //选项卡头变化
            mainLeftTabHead.eq(mainLeftTabIndex).removeClass('active')
            .end().eq(index).addClass('active');

            //选项卡体变化
            mainLeftTabCon.eq(mainLeftTabIndex).removeClass('active')
            .end().eq(index).addClass('active');

            mainLeftTabIndex = index;

            checkCanLoad();
        }
    })


    function checkCanLoad(){   //检测可加载的状态，index为选项卡体的下标
        if(1*mainLeftTabCon.eq(mainLeftTabIndex).attr('data-current-page') < 1*mainLeftTabCon.eq(mainLeftTabIndex).attr('data-total-page')){
            //当还有可以继续加载的页面
            loadMore.removeClass('no-more');
            loadMore.html('加载更多');
        }else{
            loadMore.addClass('no-more');
            loadMore.html('没有更多了');
        }
    }


    //左侧浏览更多，翻页效果
    $('body').on('click',".load-more",function(){
        if(!$(this).hasClass('no-more') && canLoad){
            //开始加载下一页
            var that = mainLeftTabCon.eq(mainLeftTabIndex);
            canLoad = false;
            var page = 1+1*that.attr('data-current-page');
            var cate_id = 1*that.attr('data-category-id');

            var url = baseJs.baseUrl+'/api/v1/article/getarticlelist?page='+page+'&limit='+listLimit+'&category_id='+cate_id+'&flag=1&type=1';
            if(cate_id == -1){
                url = baseJs.baseUrl+'/api/v1/article/getarticlelist?page='+page+'&limit='+listLimit+'&order=updatetime&sort=desc&type=1';
            }else if(cate_id == -2 && 1*baseJs.getCookie('islogin')==1){
                url = baseJs.baseUrl+'/api/user/myfollow?page='+page+'&limit='+listLimit+'&user_id='+baseJs.getUserInfo('id')+'&token='+baseJs.getUserInfo('token')+'&type=1';

            }


            baseJs._ajax(url,function(data){
                if(data && data.code == 1){
                    //取到下一页数据了,加进 dom 结构中
                    canLoad = true;
                    var str = '';
                    for(var i = 0 ; i < data.data.list.length ; i++){
                        str += window.listModel.artListModel(data.data.list[i]);
                    }
                    that.find('>dl').html(that.find('>dl').html()+str);
                    that.attr('data-current-page',data.data.page.current_page);
                    checkCanLoad();
                }
            })  

        }
    })


if(window.pc == true){  //PC端的JS交互效果
    //顶部导航的效果，随着页面滚动而动态变化
    var topMenuH = $('.header-top-menu').height(),
        header = $('.header');

    var topScroll = function(){
        if($(this).scrollTop() >= topMenuH){
            header.css('top',0);
        }else{
            header.css('top',topMenuH-$(this).scrollTop());
        }
    }
    topScroll($(document));
    $(document).scroll(topScroll)

    //PC端加载banner图数据，并加载dom结构
    baseJs._ajax(baseJs.baseUrl+'/api/v1/article/getarticlelist?page=1&limit=7&is_banner=1',function(data){
        if(data && data.code == 1){
            var banner = $(".pc-banner .pc-banner-row");
            for(var i = 0 ; i < data.data.list.length ; i++){
                var obj = data.data.list[i],
                    str = '';
                str += '<div class="pc-ban-img" href="show_info.php?id='+obj.id+'" style="background-image: url('+baseJs.imageUrl+obj.image+');"></div>';
                obj.keywords[0] && (str += '<span class="pc-ban-mes">'+(obj.keywords[0])+'</span>');
                if(i==0 || i==6){
                    str += '<p class="font30 lineh42">'+obj.title+'</p>';
                }else{
                    str += '<p class="font16 lineh26">'+obj.title+'</p>';
                }
                str += '<a href=show_info.php?id='+obj.id+'></a>';
                banner.eq(i).html(str);
            }
        }
    })

    //顶部板块JS效果
    var headTopArr = $('.header-top-ul li .arr'),   //顶部板块箭头按钮
        currencyMenuBox = $(".currencyMenuBox");    //隐藏容器

    $('body').on('click','.header-top-ul li .arr',function(){
        currencyMenuBox.hide();
        $(this).next().show();
    })
    $('body').click(function(e){
        if(!$(e.target).is('.arr-wrap .arr')){
            currencyMenuBox.hide();
        }
    })


    //获取首页广告位置数据
    baseJs._ajax(baseJs.baseUrl+'/api/v1/ads/getadslist?page=1&limit=7&menu_id=2',function(data){
        if(data && data.code == 1){
            var str = '';
            for(var i in data.data){
                if(i <= 6){     //首页广告位最多7个
                    var obj  = data.data[i];
                    str += '<li><a href="'+obj.image_link+'"><img src="'+(baseJs.imageUrl+obj.image)+'" alt=""></a></li>';
                }
            }
            $('.ad1>ul').html(str);
        }
    })


    new Swiper('.project-eval-swiper', { //PC端项目评测效果
        grabCursor : true,   //手型设置
        loop:false,          //是否循环滑动
        slidesPerView:'auto' //设置slider容器能够同时显示的slides数量(carousel模式)。
    });


    //右侧栏的快讯选项卡效果
    // var newsFlashTabHead = $(".news-flash-tab-head li"),    //选项卡头
    //     newsFlashTabCon = $(".news-flash-tab-con>li");      //选项卡体

    // newsFlashTabHead.click(function(){
    //     var index = $(this).index();
    //     if(!$(this).hasClass('active')){
    //         newsFlashTabHead.removeClass('active').eq(index).addClass('active');
    //         newsFlashTabCon.removeClass('active').eq(index).addClass('active');
    //     }
    // })

    //加载快讯数据
    baseJs._ajax(baseJs.baseUrl+'/api/v1/reptile/getlist?page=1&limit=20',function(data){
        if(data.code == 1){
            var list = data.data.list;
            var str = newsflashModel(list);
            $('.newsflash dl').html(str);
        }

    })

    function newsflashModel(list){
        var str = '';
        for(var i = 0 ; i < list.length ; i++){
            str = str +''
            +'<dd class="clearfix">'
            +'<div class="nf-info">'
            +'<a href="javascript:;">'+list[i].content+'</a>'
            +'</div>'
            +'</dd>';
        }
        return str;
    }



    //左侧行情的选项卡效果
    var leftMarketTabHead = $(".quotation-left-list"),  //左侧选项卡头
        leftMarketTabCon = $(".quotation-index-data"),  //左侧选项卡体
        leftNavArr = $(".jiantou").eq(0),               //左箭头
        rightNavArr = $(".jiantou").eq(1),              //右箭头
        leftNav = $('#quotation-name-one'),             //左侧行情顶部导航条
        firstNav = leftNav.find('>li:first'),
        lastNav = leftNav.find('>li:last');

    $('body').on('click','.quotation-left-list',function(){
        var index = $(this).index();
        if(!$(this).hasClass('checked')){
            leftMarketTabHead.removeClass('checked').eq(index).addClass('checked');
            leftMarketTabCon.removeClass('show').eq(index).addClass('show');
        }
    })
    var marginLeft = 0;
    var midW = lastNav.offset().left - leftNav.width();

    midW = midW - midW%100 - 100;



    leftNavArr.click(function(){
        marginLeft += 100;
        marginLeft>=0?marginLeft=0:'';
        firstNav.css('margin-left',marginLeft);
    })
    rightNavArr.click(function(){
        marginLeft -= 100;
        marginLeft<=-midW? marginLeft = -midW:'';
        firstNav.css('margin-left',marginLeft);
    })


    //加载右侧热门文章模块
    listModel.getHotArticleModl();

    //先获取权重最高的3个产品分类
    baseJs._ajax(baseJs.baseUrl+'/api/v1/product_category/getcategory?page=1&limit=3',function(data){
        if(data && data.code == 1){
            var productItem = $(".product-item");
            for(var i = 0 ; i < data.data.list.length ; i++){
                var temp = data.data.list[i];
                productItem.eq(i).find('.product-title').html(temp.name);
                //获取该分类下的，前3条推荐产品
                ;(function(i){
                    baseJs._ajax(baseJs.baseUrl+'/api/v1/product/getproductlist?category_id='+temp.id+'&page=1&limit=3',function(data){
                        if(data.code == 1){
                            var str = '';
                            for(j in data.data.list){
                                str += window.listModel.productListModel(data.data.list[j]);
                            }
                            //加载 dom 结构
                            productItem.eq(i).find('>ul').html(str);
                        }
                    })
                })(i);
            }
        }
    })
    



}else if(window.pc == false){   //移动端的JS交互效果

    //移动端加载banner图数据，并加载dom结构
    baseJs._ajax(baseJs.baseUrl+'/api/v1/article/getarticlelist?page=1&limit=7&is_banner=1',function(data){
        if(data && data.code == 1){
            var banner = $(".wap-banner .swiper-wrapper .swiper-slide");
            for(var i = 0 ; i < data.data.list.length && i < 7; i++){
                var obj = data.data.list[i],
                    str = '';
                str += '<a href="show_info.php?id='+obj.id+'" data-id='+i+'>';
                str += '<img src="'+(baseJs.imageUrl+obj.image)+'" alt="">';
                str += '<div class="text-mask">';
                str += '<p>'+obj.title+'</p>';
                str += '</div>';
                str += '</a>';
                banner.eq(i).html(str);
            }

            new Swiper('.wap-banner', { //移动端banner效果
                slidesPerView: 1,   //一屏幕显示几个banner
                speed:300,          //切换速度
                autoplay:{          //自动切换以及延迟速度
                    delay:30000
                },
                grabCursor : true,  //手型设置
                pagination: {
                    el: '.wap-banner-swiper-pagination',
                },
                loop:true          //是否循环滑动
            });
        }
    })

  
    new Swiper('.project-eval-swiper', { //移动端项目评测效果
        grabCursor : true,   //手型设置
        loop:false,          //是否循环滑动
        slidesPerView:2.48 
    });

    new Swiper('.author-list-swiper', { //移动端作者专栏效果
        grabCursor : true,   //手型设置
        loop:false,          //是否循环滑动
        slidesPerView:4.5 
    });

    new Swiper('.main-tab-head', { //移动端主要内容左侧模块导航
        grabCursor : true,   //手型设置
        loop:false,          //是否循环滑动
        slidesPerView: 5,
        pagination:{        //进度条
            el:'.main-tab-head-pagination',
            type: 'progressbar',
            renderProgressbar: function (progressbarFillClass) {
                return '<span class="' + progressbarFillClass + '"></span>';
            }
        }
    });


    //页面下滑，左侧模块导航适当位置变固定效果
    var mainLeftTab = $(".main-tab-head"),
        mainLeftTabTop = mainLeftTab.offset().top,
        doc = $(document);


    doc.scroll(function(){
        if(doc.scrollTop() >=  mainLeftTabTop){
            mainLeftTab.addClass('tofixed');
        }else{
            mainLeftTab.removeClass('tofixed');
        }
    })

}




})
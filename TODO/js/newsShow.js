$(document).ready(function(){


	var id = window.baseJs._getQueryString('id');
	if(!id){
		window.location.href = 'news.php';
	}

	// 获取内容
	window.baseJs._ajax(window.baseJs.baseUrl+'/api/v1/article/getArticle?id='+id,function(data){
    	if(data && data.code==1 && data.data.article[0]){
    		var data = data.data.article[0];
    		$('.show-news-title').html(window.lan==="cn"?data.title:data.e_title);
            $('.phone-show-page-title h2').html(window.lan==="cn"?data.title:data.e_title);

    		$('.page-title-mes .name').html(data.author);
    		$('.page-title-mes .date').html(window.baseJs.getNowFormatDate(data.updatetime*1000,'yyyy-MM-dd hh:mm:ss')+'<div class="line"></div>');
    		$('.phone-show-page-title .date .text').html(window.baseJs.getNowFormatDate(data.updatetime*1000)+'<div class="line"></div>');

            $('.news-show-content').html(window.lan==="cn"?data.content:data.e_content);
    	}
    });


});
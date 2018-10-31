$(document).ready(function(){

	// 获取新闻资讯列表

	window.baseJs._ajax(window.baseJs.baseUrl+'/api/v1/article/getArticleList?page=1&limit=100',function(data){
    	if(data && data.code==1){
    		var list = data.data.list;
    		var str = '';
    		for(var i = 0 ; i < list.length ; i++){
    			var data = list[i];
    			str += '<li>'
    			+'<a href="newsShow.php?id='+data.id+'">'
    			+'<div class="img-box">'
    			+'<img src="'+window.baseJs.imageUrl+data.image+'">'
    			+'</div>'
    			+'<h2>'+(window.lan==="cn"?data.title:data.e_title)+'</h2>'
    			+'<div class="time"><i></i><span>'+window.baseJs.getNowFormatDate(data.updatetime*1000)+'</span><i></i></div>'
    			+'<p class="text slh1" title="'+data.describe+'">'+data.describe+'</p>'
    			+'</a>'
    			+'</li>';
    		}
    		$('.news-list').append(str);
    	}
    });


});
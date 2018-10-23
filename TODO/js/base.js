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
    delCookie: function(e) {    //删除 cookie
        var t = this,
        n = new Date;
        n.setTime(n.getTime() - 1);
        var o = t.getCookie(e);
        null != o && (document.cookie = e + "=" + o + ";expires=" + n.toGMTString())+";path=/";
    },
    baseUrl : '',
    imageUrl:''
};


function log(){
    for(var i = 0 ; i < arguments.length ; i++){
        console.log(arguments[i]);
    }
}
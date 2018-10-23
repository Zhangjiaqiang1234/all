var designWidth = 750;	//设计稿的宽度

//初始化 v3
function resize(callback){
	if(!callback) return false;
	window.addEventListener("resize",callback)
}

var clacRem = function(){
	var html = document.getElementsByTagName('html')[0],
		clientWidth = document.documentElement.clientWidth,
		fontSize = clientWidth / designWidth * 100,
		oldFlag;
		console.log(clientWidth,designWidth,fontSize);
		if(window.pc === true || window.pc === false){
			oldFlag = window.pc;
		}
	if(fontSize > 100){
		fontSize = 100;
		window.pc = true;
		html.setAttribute('class','pc');
	}else{
		window.pc = false;
		html.setAttribute('class','phone');
	}
	

	// if(getQueryString('source') == 'pc'){
	// 	window.pc = true;
	// 	html.setAttribute('class','pc');
	// 	fontSize = 100;
	// }

	document.documentElement.style.fontSize = fontSize+"px";

	if(oldFlag != 'undefined' && oldFlag == !window.pc){
		//如果从 pc -> wap 或 wap -> pc 重新刷新下页面
		// location.reload();         
	}
}
clacRem();
resize(clacRem);

function getQueryString(e) {  //得到查询字符串
    var t = new RegExp("(^|&)" + e + "=([^&]*)(&|$)", "i"),
    n = window.location.search.substr(1).match(t);
    return null != n ? unescape(n[2]) : null
}
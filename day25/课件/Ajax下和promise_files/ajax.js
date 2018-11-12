//AJAX的get请求方式
function ajaxGet(url){
	var mypromise = new Promise(function(success){
		if(window.XMLHttpRequest){
			var ajax = new XMLHttpRequest();
		}else{
			var ajax = new ActiveXObject("Microsoft.XMLHTTP");
		}
		ajax.open("GET",url,true);
		ajax.send();
		ajax.onreadystatechange = function(){
			if(ajax.status == 200 && ajax.readyState == 4){
				success(ajax.responseText);
			}
		}
	})
	return mypromise;
}

//AJAX的post请求方式
function ajaxPost(url,data=null){
	var mypro = new Promise(function(success){
		if(window.XMLHttpRequest){
			var ajax = new XMLHttpRequest();
		}else{
			var ajax = new ActiveXObject("Microsoft.XMLHTTP");
		}
		ajax.open("POST",url,true);
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send(data);
		ajax.onreadystatechange = function(){
			if(ajax.status == 200 && ajax.readyState == 4){
				success(ajax.responseText);
			}
		}
	})
	return mypro;
}

//跨域请求方式
function jsonp(url,callback){
	window.cb = function(res){
		callback(res);
	}
	var script = document.createElement("script");
	script.src = url;
	document.body.appendChild(script);
}
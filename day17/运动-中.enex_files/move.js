// JavaScript Document



function move(ele,attr,target,callback){
	clearInterval(ele.timer);
	ele.timer = setInterval(function(){
		if(attr == "opacity"){
			var iNow = getStyle(ele,attr)*100;
		}else{
			var iNow = parseInt(getStyle(ele,attr));
		}
		
		var speed = (target - iNow)/10;
		speed = speed<0 ? Math.floor(speed) : Math.ceil(speed);
		if(target == iNow){
			clearInterval(ele.timer);
			if(callback) callback();
		}else{
			if(attr == "opacity"){
				ele.style.opacity = (iNow + speed)/100;
				ele.style.filter = "alpha(opacity=" + iNow+speed + ")"
			}else{
				ele.style[attr] = iNow + speed + "px";
			}
		}
	},30)
}

function getStyle(ele,attr){
	if(ele.currentStyle){
		return ele.currentStyle[attr];
	}else{
		return getComputedStyle(ele,false)[attr];
	}
}
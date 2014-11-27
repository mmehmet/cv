// first some cookies...

function setCookie() {
	// [n]ame, [v]alue, [d]ays
	if (arguments.length < 2) {
		return;
	}
	var n = arguments[0];
	var v = arguments[1];
	var d = 0;
	if (arguments.length > 2) {
		d = parseInt(arguments[2]);
	}
	var exp = '';
	if (d > 0) {
		var now = new Date();
		then = now.getTime() + (d * 24 * 60 * 60 * 1000);
		now.setTime(then);
		exp = '; expires=' + now.toGMTString();
	}
	document.cookie = n + "=" + escape(String(v)) + '; path=/' + exp;
}

function readCookie(n) {
	var cookiecontent = new String();
	if (document.cookie.length > 0) {
		var cookiename = n+ '=';
		var cookiebegin = document.cookie.indexOf(cookiename);
		var cookieend = 0;
		if (cookiebegin > -1) {
			cookiebegin += cookiename.length;
			cookieend = document.cookie.indexOf(";",cookiebegin);
			if (cookieend < cookiebegin) {
				cookieend = document.cookie.length;
			}
			cookiecontent = document.cookie.substring(cookiebegin,cookieend);
		}
	}
	return unescape(cookiecontent);
}

function eraseCookie(name) {
	setCookie(name,"",-1);
}

function clearCookies(name) {
	var cooks = document.cookie.split(";");
	for (var i = 0; i < cookies.length; i++) {
		if (cooks[i].split("=")[0] == name) {
			eraseCookie(name);
		}
	}
}

function checkCookie() {
	var exists = (document.cookie.indexOf('autolog=') > -1) ? true : false;
	return exists;
}

function widthCookie() {
	var oldw = readCookie('width');
	var neow = getWidth();
	if (oldw != neow) {
		var cookDate = new Date();
		cookDate.setTime(+ cookDate + 86400000);
		document.cookie = 'width=' + neow + '; expires=' + cookDate.toGMTString() + '; path=/';
		window.location.href='.';
	}
}

function getWidth() {
	var w=0;  
	w = document.getElementsByTagName('html')[0].clientWidth;
	if (w == 0) {w = window.innerWidth}
	if (w == 0) {w = window.outerWidth}
	if (w == 0) {w = document.body.clientWidth}
	return w;
}

function setWidth() {
	var neow = getWidth();
	var cookDate = new Date();
	cookDate.setTime(+ cookDate + 86400000);
	document.cookie = 'width=' + neow + '; expires=' + cookDate.toGMTString() + '; path=/';
}



// toggle visibility of a display element
function togviz(divid) {
	if (document.getElementById(divid)) {
		var el = document.getElementById(divid);
		el.style.display = (el.style.display && el.style.display == 'none') ? 'block' : 'none';
	}
}

// toggle visibility of display elements
// also toggle what the button says
function togbut(but, divid) {
	if (document.getElementById(divid)) {
		togviz(divid);
		document.getElementById(divid).style.paddingTop = '0px';
		if (but.innerHTML == '+' || but.innerHTML == '-') {
			but.innerHTML = (but.innerHTML == '-') ? '+' : '-';
		} else {
			but.innerHTML = (but.innerHTML == 'less') ? 'more' : 'less';
		}
	}
}

function openme(section) {
	switch (section) {
		case "education":
			document.getElementsByName(section)[0].innerHTML = '-';
			document.getElementById(section).style.display = 'block';
			document.getElementById(section).style.paddingTop = '50px';
			document.getElementById('skills').style.paddingTop = '0px';
			document.getElementById('experience').style.paddingTop = '0px';
		break;case "skills":
			document.getElementsByName(section)[0].innerHTML = '-';
			document.getElementById(section).style.display = 'block';
			document.getElementById(section).style.paddingTop = '50px';
			document.getElementById('education').style.paddingTop = '0px';
			document.getElementById('experience').style.paddingTop = '0px';
		break;case "experience":
			document.getElementsByName(section)[0].innerHTML = '-';
			document.getElementById(section).style.display = 'block';
			document.getElementById(section).style.paddingTop = '50px';
			document.getElementById('education').style.paddingTop = '0px';
			document.getElementById('skills').style.paddingTop = '0px';
		break;
	}
}


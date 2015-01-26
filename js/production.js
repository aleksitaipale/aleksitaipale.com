function isIE(userAgent) {
  userAgent = userAgent || navigator.userAgent;
  return userAgent.indexOf("MSIE ") > -1 || userAgent.indexOf("Trident/") > -1;
}


$(document).ready(function(){
	var IE = (!! window.ActiveXObject && +(/msie\s(\d+)/i.exec(navigator.userAgent)[1])) || NaN;
	if (isIE(navigator.userAgent)) {
		$('html').addClass("old-ie");
	}

	$(".hisrc img").hisrc();
	$("h1").fitText();
});
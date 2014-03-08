// Disable WOW on small screens.
if($(window).width() > 768) {
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100
    }
  );
  wow.init();
});

var userAgent = navigator.platform;
//alert(userAgent);
if(userAgent.substring(0,3) == "Mac") {
	document.getElementsByTagName('body')[0].className+=' mac'
} else if (userAgent.substring(0,3) == "Win") {
	document.getElementsByTagName('body')[0].className+=' win'
} else if (userAgent.substring(0,3) == "Lin") {
	document.getElementsByTagName('body')[0].className+=' lin'
} else {
	document.getElementsByTagName('body')[0].className+=' nope'
}

/*var obj = document.getElementById("header");
var topVal = parseInt(obj.style.top, 10);
obj.style.top = (topVal + 300) + "px";*/

var heroHeight = document.getElementById('header').offsetHeight;
//alert(heroHeight);

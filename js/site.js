var userAgent = navigator.platform;

if(userAgent.substring(0,3) == "Mac") {
	document.getElementsByTagName('body')[0].className+=' mac';
} else if (userAgent.substring(0,3) == "Win") {
	document.getElementsByTagName('body')[0].className+=' win';
} else if (userAgent.substring(0,3) == "Lin") {
	document.getElementsByTagName('body')[0].className+=' lin';
} else {
	document.getElementsByTagName('body')[0].className+=' nope';
}

var heroHeight = document.getElementById('header').offsetHeight;

// Disable WOW on small screens.
try {
  if(window.innerWidth > 768) {
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  };
} catch(err) {  }
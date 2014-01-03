$(document).ready(function() {
  
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');
 
  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 300, function() {
            location.hash = target;
          });
        });
      }
    }
  });
 
  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
 
 $(window).scroll(function() {
		var inview = '#' + $('section:in-viewport:first').attr('id');
		 $link = $('nav a[href="' + inview + '"]');
		 
		 console.log(inview)
		 
		if ( $link.length || ($link == "#contact")) {
			$('nav a').removeClass('current');
			$link.addClass('current');
		} 
			
	});
 
 $(function() {
    $(".rslides").responsiveSlides({
	      auto: true,             // Boolean: Animate automatically, true or false
		  speed: 700,            // Integer: Speed of the transition, in milliseconds
		  timeout: 5500,          // Integer: Time between slide transitions, in milliseconds
		  pager: true,           // Boolean: Show pager, true or false
    });
  });

  $(function() {
    $(".rslideswork").responsiveSlides({
        auto: false,             // Boolean: Animate automatically, true or false
      speed: 700,            // Integer: Speed of the transition, in milliseconds
      timeout: 6000,          // Integer: Time between slide transitions, in milliseconds
      pager: true,           // Boolean: Show pager, true or false
    });
  
  });

});



$(document).ready(function() {
    // Highlight active navbar link based on scroll position
    $(window).on('scroll', function() {
      var scrollPos = $(window).scrollTop();
      $('#navigation-bar').find('a').each(function() {
        var target = $($(this).attr('href'));
        if (target.length) {
          if ($(this).attr('href') !== '#home') { // Check if the link is not the 'Home' link
            var top = target.offset().top - 50,
                bottom = top + target.outerHeight();
            if (scrollPos >= top && scrollPos <= bottom) {
              $('#navigation-bar').find('.active').removeClass('active'); // Remove active class from previously active link
              $(this).addClass('active'); // Add active class to current link
            }
          }
        }
      });
    });
  });
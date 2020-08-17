/**
* Template Name: iPortfolio - v1.3.0
* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/


// $(document).ready(function(){
  $(".multilanguage").children().children().first().children().children().attr("src","/css/img/flag_en.png");
  $(".multilanguage").children().children().first().next().children().children().attr("src","/css/img/flag_ru.jpg");
  $(".multilanguage").children().children().first().next().next().children().children().attr("src","/css/img/flag_uz.jpg");
// });


var a = 0;
function myFunction() {

  a += 1;
  document.getElementById("blogs").innerHTML = a;
}
$(function() {
  const rowsPerPage = 3;
  const rows = $('#my-table ul li');
  const rowsCount = rows.length;
  const pageCount = Math.ceil(rowsCount / rowsPerPage); // avoid decimals
  const numbers = $('#numbers');

  // Generate the pagination.
  for (var i = 0; i < pageCount; i++) {
    numbers.append('<li><a href="#">' + (i+1) + '</a></li>');
  }

  // Mark the first page link as active.
  $('#numbers li:first-child a').addClass('active');

  // Display the first set of rows.
  displayRows(1);

  // On pagination click.
  $('#numbers li a').click(function(e) {
    var $this = $(this);

    e.preventDefault();

    // Remove the active class from the links.
    $('#numbers li a').removeClass('active');

    // Add the active class to the current link.
    $this.addClass('active');

    // Show the rows corresponding to the clicked page ID.
    displayRows($this.text());
  });

  // Function that displays rows for a specific page.
  function displayRows(index) {
    var start = (index - 1) * rowsPerPage;
    var end = start + rowsPerPage;

    // Hide all rows.
    rows.hide();

    // Show the proper rows for this page.
    rows.slice(start, end).show();
  }
});

window.ChatraSetup = {
  colors: {
    buttonText: '#f0f0f0', /* chat button text color */
    buttonBg: '#565656'    /* chat button background color */
  }
};
window.ChatraSetup = {
  buttonPosition: window.innerWidth < 1024? // width threshold
      'bl': // chat button position on small screens
      'br'  // chat button position on big screens
};
window.ChatraSetup = {
  disabledOnMobile: true
};
window.ChatraSetup = {
  locale: {
    chat: {
      input: {
        placeholder: 'Scrivi un messaggio...'
      }
    },
    name: 'Javohir1',
    yourName: 'Javohir',
    messageTypes: {
      joinedFirst: 'entrato in chat',
      joined: '{{#username}} entrato in chat2',
      agentsOffline: 'Operatore Offline3'
    }
  }
};
Chatra('setLocale', {
  chat: {
    input: {
      placeholder: 'Scrivi un messaggio...'
    }
  }
});
window.ChatraIntegration = {
  /* main properties */
  name: 'Cowardly Lion',
  email: 'cowardly_lion@gmail.com',
  phone: '+41-22-765-5749',
  notes: 'Looking for courage...',

  /* any number of custom properties */
  'What does he do': 'Goes to Oz with his friends'
};
Chatra('updateIntegrationData', {
  email: 'cowardly_lion@yahoo.com', /* e-mail changed */
  phone: null /* phone number removed */
});

!(function($) {
  "use strict";

  // Hero typed
  if ($('.typed').length) {
    var typed_strings = $(".typed").data('typed-items');
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  // Smooth scroll for the navigation menu and links with .scrollto classes
  $(document).on('click', '.nav-menu a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top;

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  $(document).on('click', '.mobile-nav-toggle', function(e) {
    $('body').toggleClass('mobile-nav-active');
    $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
  });

  $(document).click(function(e) {
    var container = $(".mobile-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Skills section
  $('.skills-content').waypoint(function() {
    $('.progress .progress-bar').each(function() {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, {
    offset: '80%'
  });

  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
      aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function() {
      $('.venobox').venobox();
    });
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out-back",
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);
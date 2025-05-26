$(document).ready(function () {
  var w = window.innerWidth;

  if (w > 767) {
    $("#menu-jk").scrollToFixed();
  } else {
    $("#menu-jk").scrollToFixed();
  }

  // Ensure header elements are aligned properly
  adjustHeaderAlignment();

  // Adjust header on window resize
  $(window).resize(function () {
    adjustHeaderAlignment();
  });
  // Function to ensure header elements are aligned properly
  function adjustHeaderAlignment() {
    // Set the height of all row elements to match
    var headerHeight = 60; // Set fixed height
    $(".header-nav .row > div").css("height", headerHeight + "px");

    // Center the navigation menu items
    if ($(window).width() > 768) {
      $(".nav-item ul").css("height", headerHeight + "px");
      $(".nav-item ul li").css("height", headerHeight + "px");
    }
  }
});

// Counter Animation
$(document).ready(function () {
  // Check if element is in viewport
  function isElementInViewport(elem) {
    var $elem = $(elem);

    // Get element's position
    var scrollElem =
      navigator.userAgent.toLowerCase().indexOf("webkit") != -1
        ? "body"
        : "html";
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Get element's position
    var elemTop = Math.round($elem.offset().top);
    var elemBottom = elemTop + $elem.height();

    // Determine if element is in viewport
    return elemTop < viewportBottom && elemBottom > viewportTop;
  }

  // Check if it's time to start the counter
  function checkCounter() {
    $(".counter").each(function () {
      var $this = $(this);

      if (isElementInViewport($this) && !$this.hasClass("counted")) {
        $this.addClass("counted");

        $this.prop("Counter", 0).animate(
          {
            Counter: $this.attr("data-count"),
          },
          {
            duration: 2000,
            easing: "swing",
            step: function (now) {
              $this.text(Math.ceil(now));
            },
          }
        );
      }
    });
  }

  // Run on page load
  checkCounter();

  // Run on scroll
  $(window).scroll(function () {
    checkCounter();
  });

  // Make sure counters are visible on mobile devices
  $(window).resize(function () {
    checkCounter();
  });
});

$(document).ready(function () {
  $(".filter-button").click(function () {
    var value = $(this).attr("data-filter");

    if (value == "all") {
      //$('.filter').removeClass('hidden');
      $(".filter").show("1000");
    } else {
      //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
      //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
      $(".filter")
        .not("." + value)
        .hide("3000");
      $(".filter")
        .filter("." + value)
        .show("3000");
    }
  });

  if ($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
  }
  $(this).addClass("active");
});

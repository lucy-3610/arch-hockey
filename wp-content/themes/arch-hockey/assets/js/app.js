

$(document).ready(function () {
  options = {
    autohide: false,
  };
  console.log('Hello from app.js');
  console.log($);
  console.log($('.toast'))
  // console.log($('.toast').toast('show'))
  $('.toast').css('border', '3px solid red');
  // $('.toast').toast('show'); 
  // $('.toast').on('hidden.bs.toast', function () {
  //   // do something…
  //   console.log('Toast is hidden')
  // })
  // $('.toast').toast(options);

  jQuery(function ($) {
    var path = window.location.href;
    // because the 'href' property of the DOM element is the absolute path
    $('.main-menu-item a').each(function () {
      if (this.href === path) {
        $(this).addClass('active');
      }
    });
  });

  $(function () {
    $(document).scroll(function () {
      var $nav = $("#masthead");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });

  // Mobile Navigation Dropdowns
  var dropdown = $("#mobile-navigation .mobile-dropdown ul")
  dropdown.hide();
  var control = $("#mobile-navigation .mobile-dropdown .dropdown-caret")

  control.click(function () {
    // $(this).next(dropdown).toggle("fast");
    $(this).next(dropdown).toggle("fast");
  });

  // YouTube Modal
  var $videoSrc;
  $('.video-btn').click(function () {
    $videoSrc = $(this).data("src");
  });

  // when the modal is opened autoplay it  
  $('#videoModal').on('shown.bs.modal', function (e) {
    // set the video src to autoplay and not to show related video.
    $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
  })

  // stop playing the youtube video when I close the modal
  $('#videoModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src', $videoSrc);
  })

  $('.hero-carsousel-slider').slick({
    infinite: true,
    slidesToShow: 1,
    dots: true,
    fade: true,
    speed: 500,
    cssEase: 'ease-in-out',
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
  });

  $('.img-carsousel').slick({
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    speed: 500,
    autoplay: true,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: 'unslick',
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  /* Vanilla JS */

  var rightJS = {
    init: function () {
      rightJS.Tags = document.querySelectorAll('.rightJS');
      for (var i = 0; i < rightJS.Tags.length; i++) {
        rightJS.Tags[i].style.overflow = 'hidden';
      }
      rightJS.Tags = document.querySelectorAll('.rightJS div');
      for (var i = 0; i < rightJS.Tags.length; i++) {
        rightJS.Tags[i].style.position = 'relative';
        rightJS.Tags[i].style.right = '-' + rightJS.Tags[i].parentElement.offsetWidth + 'px';
      }
      rightJS.loop();
    },
    loop: function () {
      for (var i = 0; i < rightJS.Tags.length; i++) {
        var x = parseFloat(rightJS.Tags[i].style.right);
        x++;
        var W = rightJS.Tags[i].parentElement.offsetWidth;
        var w = rightJS.Tags[i].offsetWidth;
        if ((x / 100) * W > w) x = -W;
        if (rightJS.Tags[i].parentElement.parentElement.querySelector(':hover') !== rightJS.Tags[i].parentElement) rightJS.Tags[i].style.right = x + 'px';
      }
      requestAnimationFrame(this.loop.bind(this));
    }
  };
  window.addEventListener('load', rightJS.init);

  /* JQUERY */

  $(function () {
    var rightJQ = {
      init: function () {
        $('.rightJQ').css({
          overflow: 'hidden'
        });
        $('.rightJQ').on('mouseover', function () {
          $('div', this).stop();
        });
        $('.rightJQ').on('mouseout', function () {
          $('div', this).animate({
            right: '100%'
          }, 16000, 'linear');
        });
        rightJQ.loop();
      },
      loop: function () {
        $('.rightJQ div').css({
          position: 'relative',
          right: '-100%'
        }).animate({
          right: '100%'
        }, 16000, 'linear', rightJQ.loop);
      }
    };
    rightJQ.init();
  });
});
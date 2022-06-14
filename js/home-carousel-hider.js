(function($) {
  $(document).ready(function() {
    $('#carousel-fade').on('slid.bs.carousel', function() {
      var carouselData = $(this).data('bs.carousel');
      var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
      var total = carouselData.$items.length;
      var slide = (currentIndex + 1);
      if (slide === 1) {
        if ($('.news-media-carousel').hasClass('display-none')) {
          $('.news-media-carousel').removeClass('display-none');
          $('#news').find('.text-slider').flexslider({
            slideToStart: 0
          });
        }

        if (!$('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').addClass('display-none');
        }

        if (!$('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').addClass('display-none');
        }

        if (!$('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').addClass('display-none');
        }

        if (!$('.prod-media-carousel').hasClass('display-none')) {
          $('.prod-media-carousel').addClass('display-none');
        }

      }
      else if (slide === 2) {
        if ($('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').removeClass('display-none');
          $('#esg').find('.text-slider').flexslider({
            slideToStart: 0
          });
        }

        if (!$('.news-media-carousel').hasClass('display-none')) {
          $('.news-media-carousel').addClass('display-none');
        }

        if (!$('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').addClass('display-none');
        }

        if (!$('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').addClass('display-none');
        }

        if (!$('.prod-media-carousel').hasClass('display-none')) {
          $('.prod-media-carousel').addClass('display-none');
        }

      } else if (slide === 3) {
        if ($('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').removeClass('display-none');
          $('#tech').find('.text-slider').flexslider({
            slideToStart: 0
          });
        }

        if (!$('.news-media-carousel').hasClass('display-none')) {
          $('.news-media-carousel').addClass('display-none');
        }

        if (!$('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').addClass('display-none');
        }

        if (!$('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').addClass('display-none');
        }

        if (!$('.prod-media-carousel').hasClass('display-none')) {
          $('.prod-media-carousel').addClass('display-none');
        }

      } else if (slide === 4) {
        if ($('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').removeClass('display-none');
          $('#cust-service').find('.text-slider').flexslider({
            slideToStart: 0
          });
        }

        if (!$('.news-media-carousel').hasClass('display-none')) {
          $('.news-media-carousel').addClass('display-none');
        }

        if (!$('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').addClass('display-none');
        }

        if (!$('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').addClass('display-none');
        }

        if (!$('.prod-media-carousel').hasClass('display-none')) {
          $('.prod-media-carousel').addClass('display-none');
        }

      } else if (slide === 5) {
        if ($('.prod-media-carousel').hasClass('display-none')) {
          $('.prod-media-carousel').removeClass('display-none');
          $('#prod').find('.text-slider').flexslider({
            slideToStart: 0
          });
        }

        if (!$('.news-media-carousel').hasClass('display-none')) {
          $('.news-media-carousel').addClass('display-none');
        }

        if (!$('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').addClass('display-none');
        }

        if (!$('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').addClass('display-none');
        }

        if (!$('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').addClass('display-none');
        }

      }
    });
  });
})(jQuery);

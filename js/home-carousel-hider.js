(function($) {
  $(document).ready(function() {
    $('#carousel-fade').on('slid.bs.carousel', function() {
      var carouselData = $(this).data('bs.carousel');
      var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
      var total = carouselData.$items.length;
      var slide = (currentIndex + 1);
      if (slide === 4) {
        if ($('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').removeClass('display-none');
          if ($(window).width() < 767) {
            $('.sus-media-carousel').find('#sus-main').addClass('active');
            $('.sus-media-carousel').find('.shadow-drop-menu li:first').addClass('active');
            $('.sus-media-carousel').find('.inner').addClass('carousel-inner');
            $('.sus-media-carousel').find('.media-tab.active .mob-slide:first').addClass('item active');
            $('.sus-media-carousel').find('.media-tab.active .mob-slide').addClass('item');
          }
          if($('.mob-slide').hasClass('item'||'item active')){
            $(this).removeClass('item');
            $(this).removeClass('active');
          }
        }
        if (!$('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.tech-media-carousel').find('.media-tab').removeClass('active');
            $('.tech-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.tech-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.tech-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
        if (!$('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.cust-media-carousel').find('.media-tab').removeClass('active');
            $('.cust-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.cust-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.cust-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
        if (!$('.why-media-carousel').hasClass('display-none')) {
          $('.why-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.why-media-carousel').find('.media-tab').removeClass('active');
            $('.why-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.why-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.why-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
      } else if (slide === 1) {
        if ($('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').removeClass('display-none');
          if ($(window).width() < 767) {
            $('.tech-media-carousel').find('#tech-main').addClass('active');
            $('.tech-media-carousel').find('.shadow-drop-menu li:first').addClass('active');
            $('.tech-media-carousel').find('.inner').addClass('carousel-inner');
            $('.tech-media-carousel').find('.media-tab.active .mob-slide:first').addClass('item active');
            $('.tech-media-carousel').find('.media-tab.active .mob-slide').addClass('item');
          }
          if($('.mob-slide').hasClass('item'||'item active')){
            $(this).removeClass('item');
            $(this).removeClass('active');
          }
        }
        if (!$('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.sus-media-carousel').find('.media-tab').removeClass('active');
            $('.sus-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.sus-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.sus-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
        if (!$('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.cust-media-carousel').find('.media-tab').removeClass('active');
            $('.cust-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.cust-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.cust-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
        if (!$('.why-media-carousel').hasClass('display-none')) {
          $('.why-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.why-media-carousel').find('.media-tab').removeClass('active');
            $('.why-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.why-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.why-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
      } else if (slide === 2) {
        if ($('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').removeClass('display-none');
          if ($(window).width() < 767) {
            $('.cust-media-carousel').find('#cust-main').addClass('active');
            $('.cust-media-carousel').find('.shadow-drop-menu li:first').addClass('active');
            $('.cust-media-carousel').find('.inner').addClass('carousel-inner');
            $('.cust-media-carousel').find('.media-tab.active .mob-slide:first').addClass('item active');
            $('.cust-media-carousel').find('.media-tab.active .mob-slide').addClass('item');
          }
          if($('.mob-slide').hasClass('item'||'item active')){
            $(this).removeClass('item');
            $(this).removeClass('active');
          }
        }
        if (!$('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.sus-media-carousel').find('.media-tab').removeClass('active');
            $('.sus-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.sus-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.sus-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
        if (!$('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.tech-media-carousel').find('.media-tab').removeClass('active');
            $('.tech-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.tech-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.tech-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
        if (!$('.why-media-carousel').hasClass('display-none')) {
          $('.why-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.why-media-carousel').find('.media-tab').removeClass('active');
            $('.why-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.why-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.why-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
      } else if (slide === 3) {
        if ($('.why-media-carousel').hasClass('display-none')) {
          $('.why-media-carousel').removeClass('display-none');
          if ($(window).width() < 767) {
            $('.why-media-carousel').find('#why-main').addClass('active');
            $('.why-media-carousel').find('.shadow-drop-menu li:first').addClass('active');
            $('.why-media-carousel').find('.inner').addClass('carousel-inner');
            $('.why-media-carousel').find('.media-tab.active .mob-slide:first').addClass('item active');
            $('.why-media-carousel').find('.media-tab.active .mob-slide').addClass('item');
          }
          if($('.mob-slide').hasClass('item'||'item active')){
            $(this).removeClass('item');
            $(this).removeClass('active');
          }
        }
        if (!$('.sus-media-carousel').hasClass('display-none')) {
          $('.sus-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.sus-media-carousel').find('.media-tab').removeClass('active');
            $('.sus-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.sus-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.sus-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
        if (!$('.tech-media-carousel').hasClass('display-none')) {
          $('.tech-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.tech-media-carousel').find('.media-tab').removeClass('active');
            $('.tech-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.tech-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.tech-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
        if (!$('.cust-media-carousel').hasClass('display-none')) {
          $('.cust-media-carousel').addClass('display-none');
          if ($(window).width() < 767) {
            $('.cust-media-carousel').find('.media-tab').removeClass('active');
            $('.cust-media-carousel').find('.shadow-drop-menu li').removeClass('active');
            $('.cust-media-carousel').find('.inner').removeClass('carousel-inner');
            $('.cust-media-carousel').find('.mob-slide').removeClass('item active');
          }
        }
      }
    });
  });
})(jQuery);

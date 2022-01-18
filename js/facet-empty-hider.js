(function($) {
  $(document).ready(function() {
    $('.block-facetapi').each(function() {
      if($(this).children('.facetapi-facetapi-links').length == 0) {
        $(this).hide();
      }
    });
  });
})(jQuery);

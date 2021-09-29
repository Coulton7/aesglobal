(function($) {
  $(".dropdown-menu.shadow-drop-menu li a").click(function(){
    $(".dropdown-menu.shadow-drop-menu:first-child").text($(this).text());
    $(".dropdown-menu.shadow-drop-menu:first-child").val($(this).text());
 });

})(jQuery);

/* jQuery(document).ready( $ => {
    $('.site-header .menu-principal .menu').slicknav({
        label: '',
        appendTo: '.site-header'
    });
}) */

jQuery(document).ready(function($) {
    $(".search_icon").click(function() {
        $(".spicewpsearchform").slideToggle();
    });
  
    $(document).keydown(function(e) {
        if (e.keyCode == 27) {
            //$(modal_or_menu_element).closeElement();
            $(".spicewpsearchform").hide();
        }
    });
});
"use strict";

// jQuery('.search_input').hide();
// jQuery( "#search_img" ).click(function() {
//   // jQuery('#search_input').slideToggle();
//   jQuery('.search_input').show();
//   jQuery('#search_img').hide();
//
// });
// jQuery('.burger').click(function(){
//     jQuery('.mobile_menu').css('display', 'block');
//     jQuery('.mobile_menu').css('position', 'absolute');
// });
//
// jQuery('.mobile_menu_burger').click(function(){
//     jQuery('.mobile_menu').css('display', 'none');
// });
jQuery('.burger').click(function () {
  jQuery('.mobile_menu').toggleClass('mobile_menu_is_visible');
});
"use strict";

jQuery('.search_icon').click(openSearchOverlay);
var searchOverlay = jQuery('.search_form_overlay_container');

function openSearchOverlay() {
  searchOverlay.addClass('search_form_overlay_container_show');
}

jQuery('.search_form_vissible_close_icon').click(closeSearchOverlay);

function closeSearchOverlay() {
  searchOverlay.removeClass('search_form_overlay_container_show');
}
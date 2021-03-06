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

jQuery(document).ready(function () {
  jQuery(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    dots: true,
    autoplay: true
  });
});
"use strict";

var searchOverlay = jQuery('.search_form_overlay_container');
var searchIcon = jQuery('.search_icon');
var searchformVissibleCloseIcon = jQuery('.search_form_vissible_close_icon');
var domDocument = jQuery(document);
var searchInput = jQuery('#search_input');
var typingTimer;
var resultDiv = jQuery('.search_form_overlay__results');
var isOverlayOpen = false;
var isSipnnerVissible = false;
var previousValue;
searchIcon.on('click', openSearchOverlay);

function openSearchOverlay() {
  searchOverlay.addClass('search_form_overlay_container_show');
  isOverlayOpen = true;
}

searchformVissibleCloseIcon.on('click', closeSearchOverlay);

function closeSearchOverlay() {
  searchOverlay.removeClass('search_form_overlay_container_show');
  isOverlayOpen = false;
}

domDocument.on('keyup', keyPressDispatcher);

function keyPressDispatcher(event) {
  // console.log(event.keyCode);
  if (event.keyCode == 13 && !isOverlayOpen && !JQuery("input, textarea").is(':focus')) {
    openSearchOverlay();
  }

  if (event.keyCode == 27 && isOverlayOpen) {
    closeSearchOverlay();
  }
}

searchInput.on('keyup', typingLogic);

function typingLogic() {
  if (searchInput.val() != previousValue) {
    clearTimeout(typingTimer);

    if (searchInput.val()) {
      if (!isSipnnerVissible) {
        resultDiv.html('<div class="spinner-loader"><img src="//localhost:3000/wp-content/themes/stb/assets/img/25.gif"></div>');
        isSipnnerVissible = true;
      }

      typingTimer = setTimeout(getResults, 2000);
    } else {
      resultDiv.html('');
      isSipnnerVissible = false;
    }
  }

  previousValue = searchInput.val();
}

function getResults() {
  resultDiv.html('result');
  isSipnnerVissible = false;
}
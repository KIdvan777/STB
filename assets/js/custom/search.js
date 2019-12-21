jQuery('.search_icon').click(openSearchOverlay);

var searchOverlay = jQuery('.search_form_overlay_container');
function openSearchOverlay(){
    searchOverlay.addClass('search_form_overlay_container_show');
}

jQuery('.search_form_vissible_close_icon').click(closeSearchOverlay);

function closeSearchOverlay(){
    searchOverlay.removeClass('search_form_overlay_container_show');
}

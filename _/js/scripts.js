//PWA Service worker
if ('serviceWorker' in navigator) {
  // register service worker
  navigator.serviceWorker.register('/service-worker.js');
}



//This function is used for resizing content to be the same height.
var resizeID;
function matchBoxHeights(elementToResize, elementToMatch) {
	//if If window is less than 870 width, boxes stack instead.
	if(jQuery(window).width() < 870) {
		elementToResize.height('auto');
		return;
	}
	var box1height = elementToMatch.height();
	elementToResize.height(box1height);
}

jQuery(document).ready(function(){
	jQuery(".custom-slider ul").slick({
		arrrows: true,
		prevArrow: jQuery("#prev-slide"),
		nextArrow: jQuery("#next-slide")
	});

	jQuery(window).resize(function() {
		//Only trigger matchBoxHeights() if user has stopped resizing for half a second.
		clearTimeout(resizeID);
	    resizeID = setTimeout(function() {
	    	matchBoxHeights(jQuery('.right'), jQuery('.left'));
			matchBoxHeights(jQuery('#roselind-bio .director-intro'), jQuery('#roselind-bio .director-photo'));
			matchBoxHeights(jQuery('#geraldine-bio .director-intro'), jQuery('#geraldine-bio .director-photo'));	
			matchBoxHeights(jQuery('#address'), jQuery('#map-container'));
			matchBoxHeights(jQuery('#architecture-intro .service-intro'), jQuery('#architecture-intro .service-photo'));
			matchBoxHeights(jQuery('#design-intro .service-intro'), jQuery('#design-intro .service-photo'));
	    }, 500);
	});

	//navigation
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 100){  
			jQuery('body').addClass("sticky-pad");
			jQuery('#header-wrapper').addClass("sticky-desktop");
			jQuery('#header-wrapper').removeClass("desktop");
		}
		else{
			jQuery('body').removeClass("sticky-pad");
			jQuery('#header-wrapper').removeClass("sticky-desktop");
			jQuery('#header-wrapper').addClass("desktop");
		}
	});

	//Open side nav
    jQuery("#show-mobile-menu").click(function(e){
	    jQuery("#mobile-nav").css("width", "100%");
	    e.preventDefault();
    });

    //Close side nav
    jQuery("#close-button").click(function(e){
		jQuery("#mobile-nav").css("width", "0");
	    e.preventDefault();
    });

    /* Hide/show */

    jQuery("#read-ros-bio, #hide-ros-bio").click(function(e){
    	e.preventDefault();
    	jQuery("#roselind-bio").toggleClass("hidden-content");
    	var spanText = jQuery("#read-ros-bio span").html();
    	if (spanText==="Read Ros's Bio") {
    		jQuery("#read-ros-bio span").html("Hide Ros's Bio");
    	} else {
    		jQuery("#read-ros-bio span").html("Read Ros's Bio");
    	}
    });

    jQuery("#read-geraldine-bio, #hide-geraldine-bio").click(function(e){
    	e.preventDefault();
    	jQuery("#geraldine-bio").toggleClass("hidden-content");
    	var spanText = jQuery("#read-geraldine-bio span").html();
    	if (spanText==="Read Geraldine's Bio") {
    		jQuery("#read-geraldine-bio span").html("Hide Geraldine's Bio");
    	} else {
    		jQuery("#read-geraldine-bio span").html("Read Geraldine's Bio");
    	}
    });

    jQuery("#read-more-design, #hide-design").click(function(e){
    	e.preventDefault();
    	jQuery("#design-intro").toggleClass("hidden-content");
    	var spanText = jQuery("#read-more-design span").html();
    	if (spanText==="Read more") {
    		jQuery("#read-more-design span").html("Read less");
    	} else {
    		jQuery("#read-more-design span").html("Read more");
    	}
    });

    jQuery("#read-more-architecture, #hide-architecture").click(function(e){
    	e.preventDefault();
    	jQuery("#architecture-intro").toggleClass("hidden-content");
    	var spanText = jQuery("#read-more-architecture span").html();
    	if (spanText==="Read more") {
    		jQuery("#read-more-architecture span").html("Read less");
    	} else {
    		jQuery("#read-more-architecture span").html("Read more");
    	}
    });

    //Masonry Grid for blog
	var $grid = jQuery('#blog-list').masonry({
	  itemSelector: '.blog-article-box',
	  columnWidth: '.blog-article-box',
	  transitionDuration: 0
	});

	$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
	});

	//Cookies banner
	jQuery("#cookies-accept").click(function(){
		document.cookie = "cookies=accept; max-age=31536000; path =/;"; 
        jQuery("#cookies-banner").hide();
	});

	var areCookiesAccepted = getCookie("cookies");
    if (areCookiesAccepted !== "accept") {
        jQuery("#cookies-banner").show();
    } 

});



function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}



jQuery(window).load(function(){
	matchBoxHeights(jQuery('.right'), jQuery('.left'));
	matchBoxHeights(jQuery('#roselind-bio .director-intro'), jQuery('#roselind-bio .director-photo'));
	matchBoxHeights(jQuery('#geraldine-bio .director-intro'), jQuery('#geraldine-bio .director-photo'));
	matchBoxHeights(jQuery('#architecture-intro .service-intro'), jQuery('#architecture-intro .service-photo'));
	matchBoxHeights(jQuery('#design-intro .service-intro'), jQuery('#design-intro .service-photo'));
	matchBoxHeights(jQuery('#address'), jQuery('#map-container'));
});
(function ($) {
    "use strict";

    $(window).on('load', function () {
        $('body').addClass('loaded');
    });

    /* *** Header *** */
    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#nbr-overlay').toggleClass('open');
        $('.nbr-header-section').toggleClass('nbr-menu-active');
    });

     // Menu  on click runction
    $(document).ready(function(){
        $(".nbr-hamburger-menu a").click(function(){
            $(".nbr-overlay").fadeToggle(200);
           $(this).toggleClass('nbr-overlay.open').toggleClass('nbr-overlay.close');
        });
    });
    $('.overlay').on('click', function(){
        $(".nbr-overlay").fadeToggle(200);
        $(".nbr-hamburger-menu a").toggleClass('nbr-overlay.open').toggleClass('nbr-overlay.close');
        open = false;
    });

    /* *** Isotope Active *** */
    $('.nbr-portfolio-items').imagesLoaded(function () {

        // Add isotope on click function
        $('.nbr-portfolio-filter li').on('click', function () {
            $(".nbr-portfolio-filter li").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr('data-filter');
            $(".nbr-portfolio-items").isotope({
                filter: selector
                , animationOptions: {
                    duration: 750
                    , easing: 'linear'
                    , queue: false
                , }
            });
            return false;
        });
        $(".nbr-portfolio-items").isotope({
            itemSelector: '.single-item'
            , layoutMode: 'masonry'
        , });
    });

    /* *** Testimonial Carousel *** */
    $('#testimonial-carousel').owlCarousel({
        loop: true
        , autoplay: true
        , smartSpeed: 500
        , items: 1
        , nav: false
    });

     /* *** Button *** */
    var buttons = document.querySelectorAll(".nbr-btn .nbr-btn2 .nbr-logo");
    for(var i = 0; i < buttons.length; i++) {
      var button = buttons[i];
      button.addEventListener("click", function() {
        if(!button.classList.contains("active"))
          button.classList.add("active");
        else
          button.classList.remove("active");
      });
    }

})(jQuery);

// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var wrapper = document.getElementById('nbr-contactMap');

    if (!wrapper) return;

    var coords = document.querySelector('#coords').textContent.split(' ');

    var mapOptions = {
        zoom: 13,
        center: new google.maps.LatLng(coords[0], coords[1]),
        styles: [
            {
                "featureType": "all"
                , "elementType": "geometry.fill"
                , "stylers": [
                    {
                        "visibility": "on"
					}
                    , {
                        "saturation": "11"
					}
				]
			}
            , {
                "featureType": "administrative"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "color": "#000000"
					}
				]
			}
            , {
                "featureType": "administrative.country"
                , "elementType": "labels.text.fill"
                , "stylers": [
                    {
                        "lightness": "-30"
					}
				]
			}
            , {
                "featureType": "administrative.neighborhood"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "saturation": "-43"
					}
                    , {
                        "lightness": "-19"
					}
                    , {
                        "gamma": "1.87"
					}
				]
			}
            , {
                "featureType": "administrative.neighborhood"
                , "elementType": "labels.text"
                , "stylers": [
                    {
                        "weight": "3.96"
					}
                    , {
                        "gamma": "1.88"
					}
                    , {
                        "lightness": "-12"
					}
                    , {
                        "saturation": "-100"
					}
				]
			}
            , {
                "featureType": "landscape"
                , "elementType": "all"
                , "stylers": [
                    {
                        "color": "#f6f6f6"
					}
				]
			}
            , {
                "featureType": "poi"
                , "elementType": "all"
                , "stylers": [
                    {
                        "visibility": "off"
					}
				]
			}
            , {
                "featureType": "road"
                , "elementType": "all"
                , "stylers": [
                    {
                        "saturation": -100
					}
                    , {
                        "lightness": 45
					}
				]
			}
            , {
                "featureType": "road.highway"
                , "elementType": "all"
                , "stylers": [
                    {
                        "visibility": "simplified"
					}
				]
			}
            , {
                "featureType": "road.arterial"
                , "elementType": "labels.icon"
                , "stylers": [
                    {
                        "visibility": "off"
					}
				]
			}
            , {
                "featureType": "transit"
                , "elementType": "all"
                , "stylers": [
                    {
                        "visibility": "off"
					}
				]
			}
            , {
                "featureType": "water"
                , "elementType": "all"
                , "stylers": [
                    {
                        "color": "#000000"
					}
                    , {
                        "visibility": "on"
					}
				]
			}
            , {
                "featureType": "water"
                , "elementType": "geometry"
                , "stylers": [
                    {
                        "saturation": "9"
					}
                    , {
                        "color": "#f3f3f3"
					}
				]
			}
		]
    };

    var mapElement = document.getElementById('nbr-contactMap');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(coords[0], coords[1])
        , map: map
    });
}
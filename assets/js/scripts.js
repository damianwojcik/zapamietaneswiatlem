jQuery(document).ready(function() {
    headerLinksHandler();
    menuClickHandler();
    handleOverlay();
    initIsotope();
    initTestimonialCarousel();
    initGoogleMap();
    // initBarba();

    function headerLinksHandler() {
        jQuery("#toggle").click(function() {
            jQuery(this).toggleClass("active");
            jQuery("#nbr-overlay").toggleClass("open");
            jQuery(".nbr-header-section").toggleClass("nbr-menu-active");
        });
    }

    function menuClickHandler() {
        jQuery(".nbr-hamburger-menu a").click(function() {
            jQuery(".nbr-overlay").fadeToggle(200);
            jQuery(this)
                .toggleClass("nbr-overlay.open")
                .toggleClass("nbr-overlay.close");
        });
    }

    function handleOverlay() {
        jQuery(".overlay").on("click", function() {
            jQuery(".nbr-overlay").fadeToggle(200);
            jQuery(".nbr-hamburger-menu a")
                .toggleClass("nbr-overlay.open")
                .toggleClass("nbr-overlay.close");
            open = false;
        });
    }

    function initIsotope() {
        jQuery(".nbr-portfolio-items").imagesLoaded(function() {
            jQuery(".nbr-portfolio-filter li").on("click", function() {
                jQuery(".nbr-portfolio-filter li").removeClass("active");
                jQuery(this).addClass("active");
                var selector = jQuery(this).attr("data-filter");
                jQuery(".nbr-portfolio-items").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: "linear",
                        queue: false
                    }
                });
                return false;
            });
            jQuery(".nbr-portfolio-items").isotope({
                itemSelector: ".single-item",
                layoutMode: "masonry"
            });
        });
    }

    function initTestimonialCarousel() {
        jQuery("#testimonial-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            smartSpeed: 500,
            items: 1,
            nav: false
        });
    }

    function initGoogleMap() {
        var wrapper = document.getElementById("nbr-contactMap");

        if (!wrapper) return;

        var coords = document.querySelector("#coords").textContent.split(" ");

        var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(coords[0], coords[1]),
            styles: [
                {
                    featureType: "all",
                    elementType: "geometry.fill",
                    stylers: [
                        {
                            visibility: "on"
                        },
                        {
                            saturation: "11"
                        }
                    ]
                },
                {
                    featureType: "administrative",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            color: "#000000"
                        }
                    ]
                },
                {
                    featureType: "administrative.country",
                    elementType: "labels.text.fill",
                    stylers: [
                        {
                            lightness: "-30"
                        }
                    ]
                },
                {
                    featureType: "administrative.neighborhood",
                    elementType: "geometry",
                    stylers: [
                        {
                            saturation: "-43"
                        },
                        {
                            lightness: "-19"
                        },
                        {
                            gamma: "1.87"
                        }
                    ]
                },
                {
                    featureType: "administrative.neighborhood",
                    elementType: "labels.text",
                    stylers: [
                        {
                            weight: "3.96"
                        },
                        {
                            gamma: "1.88"
                        },
                        {
                            lightness: "-12"
                        },
                        {
                            saturation: "-100"
                        }
                    ]
                },
                {
                    featureType: "landscape",
                    elementType: "all",
                    stylers: [
                        {
                            color: "#f6f6f6"
                        }
                    ]
                },
                {
                    featureType: "poi",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "off"
                        }
                    ]
                },
                {
                    featureType: "road",
                    elementType: "all",
                    stylers: [
                        {
                            saturation: -100
                        },
                        {
                            lightness: 45
                        }
                    ]
                },
                {
                    featureType: "road.highway",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "simplified"
                        }
                    ]
                },
                {
                    featureType: "road.arterial",
                    elementType: "labels.icon",
                    stylers: [
                        {
                            visibility: "off"
                        }
                    ]
                },
                {
                    featureType: "transit",
                    elementType: "all",
                    stylers: [
                        {
                            visibility: "off"
                        }
                    ]
                },
                {
                    featureType: "water",
                    elementType: "all",
                    stylers: [
                        {
                            color: "#000000"
                        },
                        {
                            visibility: "on"
                        }
                    ]
                },
                {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [
                        {
                            saturation: "9"
                        },
                        {
                            color: "#f3f3f3"
                        }
                    ]
                }
            ]
        };

        var mapElement = document.getElementById("nbr-contactMap");
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(coords[0], coords[1]),
            map: map
        });
    }

    function initBarba() {
        Barba.Pjax.start();
    }
});

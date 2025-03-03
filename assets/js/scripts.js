
jQuery(document).ready(function() {
    headerLinksHandler();
    handleOverlay();
    initIsotope();
    initTestimonialCarousel();
    initGoogleMap();
    initBarba();

    function headerLinksHandler() {
        jQuery("#toggle").click(function() {
            jQuery(this).toggleClass("active");
            jQuery("#nbr-overlay").toggleClass("open");
            jQuery(".nbr-header-section").toggleClass("nbr-menu-active");
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
        var wrapper = document.querySelector(".nbr-homepage-portfolio-section");

        if (!wrapper) return;

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
        var wrapper = document.querySelector("#testimonial-carousel");

        if (!wrapper) return;

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

    function initLightbox () {
        lightbox.option({
            'resizeDuration': 300,
            'wrapAround': true,
            'showImageNumberLabel': true,
            'albumLabel': 'Zdjęcie %1 z %2',
        });
        var lightboxLinks = document.querySelectorAll('.wp-block-gallery a');
        if (lightboxLinks.length > 0) {
            lightboxLinks.forEach(function(item) {
                item.classList.add('no-barba');
                item.dataset.lightbox = "gallery";
            });
        }
    }

    function initBarba() {
        var FadeTransition = Barba.BaseTransition.extend({
            start: function() {
                Promise.all([this.newContainerLoading, this.fadeOut()]).then(
                    this.fadeIn.bind(this)
                );
            },
            fadeOut: function() {
                return jQuery(this.oldContainer)
                    .animate({ opacity: 0 })
                    .promise();
            },
            fadeIn: function() {
                var _this = this;
                var jQueryel = jQuery(this.newContainer);

                jQuery(this.oldContainer).hide();
                jQuery(window).scrollTop(0);

                jQueryel.css({
                    visibility: "visible",
                    opacity: 0
                });

                jQueryel.animate({ opacity: 1 }, 400, function() {
                    _this.done();
                });
            }
        });
        Barba.Pjax.getTransition = function() {
            return FadeTransition;
        };
        Barba.Dispatcher.on('linkClicked', function() {
            jQuery("#toggle").removeClass("active");
            jQuery("#nbr-overlay").removeClass("open");
            jQuery(".nbr-header-section").removeClass("nbr-menu-active");
        });
        Barba.Dispatcher.on('newPageReady', function(currentStatus, oldStatus, container, rawHTML) {
            initLightbox();
            initGoogleMap();
            initIsotope();
            initTestimonialCarousel();
        });
        Barba.Pjax.start();
    }
});

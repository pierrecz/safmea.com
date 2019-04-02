/**********************

Author:  WHMCSdes
Template: Bro - Corporate & Business Responsive Template
Version: 1.0
Author URI: whmcsdes.com

***************************/

(function ($) {
    'use strict';

    // Server Builder Calculation
    function calc() {
        // Checking That the elements are checked fitst
        var spaceX1 = $("#space-p1").is(":checked"),
            spaceX2 = $("#space-p2").is(":checked"),
            spaceX3 = $("#space-p3").is(":checked"),
            bandX1 = $("#band-p1").is(":checked"),
            bandX2 = $("#band-p2").is(":checked"),
            bandX3 = $("#band-p3").is(":checked");

        /**
         * Configuration
         **/
        var feature1 = 10, // 10GB Space Price
            feature2 = 20, // 20GB Space Price
            feature3 = 30, // 30GB Space Price
            feature4 = 40, // 20GB Bandwidth Price
            feature5 = 50, // 20GB Bandwidth Price
            feature6 = 60; // 20GB Bandwidth Price

        // Print The Price
        var sum = document.getElementById("sum");
        var text = "The Price is ",
            endText = "$";

        // 10 GB Space + 10 GB Bandwidth
        if (spaceX1 == true && bandX1 == true) {
            return sum.innerHTML = text + (feature1 + feature4) + endText;
        }
        // 10 GB Space + 20 GB Bandwidth
        else if (spaceX1 == true && bandX2 == true) {
            return sum.innerHTML = text + (feature1 + feature5) + endText;
        }
        // 10 GB Space + 30 GB Bandwidth
        else if (spaceX1 == true && bandX3 == true) {
            return sum.innerHTML = text + (feature1 + feature6) + endText;
        }
        // 20 GB Space + 10 GB Bandwidth
        else if (spaceX2 == true && bandX1 == true) {
            return sum.innerHTML = text + (feature2 + feature4) + endText;
        }
        // 20 GB Space + 20 GB Bandwidth
        else if (spaceX2 == true && bandX2 == true) {
            return sum.innerHTML = text + (feature2 + feature5) + endText;
        }
        // 20 GB Space + 30 GB Bandwidth
        else if (spaceX2 == true && bandX3 == true) {
            return sum.innerHTML = text + (feature2 + feature6) + endText;
        }
        // 30 GB Space + 10 GB Bandwidth
        else if (spaceX3 == true && bandX1 == true) {
            return sum.innerHTML = text + (feature3 + feature4) + endText;
        }
        // 30 GB Space + 20 GB Bandwidth
        else if (spaceX3 == true && bandX2 == true) {
            return sum.innerHTML = text + (feature3 + feature5) + endText;
        }
        // 30 GB Space + 30 GB Bandwidth
        else if (spaceX3 == true && bandX3 == true) {
            return sum.innerHTML = text + (feature3 + feature6) + endText;
        }
    }

    // CountUp
    $('.counter').each(function () {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({
            countNum: $this.text()
        }).animate({
            countNum: countTo
        }, {
            duration: 8000,
            easing: 'linear',
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
            }
        });
    });

    // Print The Price
    $(window).on('load', function () {

        // Calculation Button
        $("#calc").on("click", function () {
            $("#sum").css("display", "inline-block");
        });

        // Appear Menu Layout after Scrolling

        $(window).scroll(function () {
            var currentScroll = $(window).scrollTop();
            var headerHeight = $(".hosting-header").height();
            if (currentScroll >= headerHeight) {
                $('.bro-dropdown-wrapper').css({
                    position: 'fixed',
                    top: '0',
                    left: '0'
                });
                $(".bro-dropdown-trigger").css({
                    border: '2px solid #333',
                    background: "#333",
                });
                $(".bro-dropdown-trigger").css("border-radius", "0");
            } else {
                $('.bro-dropdown-wrapper').css({
                    position: 'relative',
                    background: 'transparent'
                });
                $(".bro-dropdown-trigger").css({
                    border: '2px solid #fff',
                    background: "transparent"
                });
                $(".bro-dropdown-trigger").css("border-radius", "30");
            }
        });

    });

    // Portfolio item hover
    $(document).ready(function () {
        $(".element-item").hover(function () {
                $(".hvr-effect").css("display", "block");
            },
            function () {
                $(".hvr-effect").css("display", "none");
            }
        );
    });


    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function () {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function () {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };
    // bind filter button click
    $('.filters-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({
            filter: filterValue
        });
    });
    // change is-checked class on buttons
    $('.bro-button-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function () {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });

    // Scrolling Effect
    var sections = $('section'),
        nav = $('.app-nav'),
        nav_height = nav.outerHeight();
    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        sections.each(function () {
            var top = $(this).offset().top - nav_height,
                bottom = top + $(this).outerHeight();
            // Active Link
            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('.menu-list a').removeClass('active');
                sections.removeClass('active');

                $(this).addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
        });
    });
    nav.find('.menu-list a').on('click', function () {
        var $el = $(this),
            id = $el.attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top - nav_height
        }, 500);

        return false;
    });

    // Smooth Scroll for Support Page
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $(".support-shortcuts a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {});
            } // End if
        });
    });

    // Tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Popover
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

})(jQuery);
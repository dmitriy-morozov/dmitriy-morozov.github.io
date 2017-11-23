//preloader
$(window).on('load', function () {
    $("#status").fadeOut();
    $("#preloader").delay(300).fadeOut("slow");
});

$(document).ready(function () {
    $(".navbar-toggle").bind("click", function () {
        $(this).toggleClass('opened');
    });

    //click on navbar link
    $("a[href*=\\#]").bind("click", function (e) {
        var link = $(this).attr("href");
        var offsetTop = $(link).offset().top;
        anchorScroll(offsetTop);
        e.preventDefault();
    });

    //click on svg link
    $('.menu-svg__item').click(function () {
        var link = $(this).attr('name');
        var offsetTop = $('#' + link).offset().top;
        anchorScroll(offsetTop);
    });

    //smooth scroll to anchor
    var anchorScroll = function (offsetTop) {
        var scrollFromTop = $(window).scrollTop();
        var offsetFromTop = offsetTop;
        var heightToScroll = Math.abs((offsetFromTop - scrollFromTop));
        //1000px per 0.5s
        var scrollSpeed = heightToScroll / 1000 * 500;

        setTimeout(function () {
            $("html, body").stop().animate({
                scrollTop: offsetFromTop
            }, scrollSpeed);
        }, 300);
    };

    //hide navbar when click on link
    $(".navbar-collapse a").bind("click", function (e) {
        $('.navbar-toggle').trigger('click');
        e.preventDefault();
    });

    //init animate
    wow = new WOW({
        mobile: !1
    });
    wow.init();

    //scroll up button and sticky header
    $(window).scroll(function () {
        if ($(this).scrollTop() > $(this).outerHeight()) {
            $(".scroll-up").fadeIn();
            $(".header").addClass('fixed');
        }
        else {
            $(".scroll-up").fadeOut();
            $(".header").removeClass('fixed');
        }
    });

    //Home parallax
    $("#home").on("mousemove", function (e) {
        var o = $(window).width(),
            a = $(window).height(),
            n = .9 - e.pageX / o,
            i = .9 - e.pageY / a;
        $(".intro__item").each(function (e, o) {
            var a = parseInt($(o).data("offset")),
                r = "translate3d(" + Math.round(n * a) + "px," + Math.round(i * a) + "px, 0px)";
            $(o).css({
                "-webkit-transform": r,
                transform: r,
                "moz-transform": r
            })
        })
    });
    /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? $("#home").css({
        "background-attachment": "scroll"
    }) : $("#home").parallax("50%", 0);

    //resize home image
    $(".pfblock-image").height($(window).height());
    $(window).resize(function () {
        $(".pfblock-image").height($(window).height())
    });

    // SVG navbar
    var navLi = $(".navbar li");
    var navSVG = $(".menu-svg path");

    // Add strokeDashoffset to all SVG path
    var svgPaths = navSVG;
    for (var x = 0; x < svgPaths.length; x++) {
        var path = svgPaths[x];
        var pathDimensions = path.getTotalLength();
        path.style.strokeDasharray = pathDimensions;
        path.style.strokeDashoffset = pathDimensions;
    }

    //Scroll home section
    if (/Firefox/i.test(navigator.userAgent)) {
        //Firefox
        $(window).bind('DOMMouseScroll', function (e) {
            if (e.originalEvent.detail > 0) {
                if (($('#home').height() - 50) > $(window).scrollTop()) {
                    $('.home.scroll-down').trigger('click');
                }
            }
        });

    }
    else {
        //Another browsers
        $(window).bind('mousewheel', function (event) {
            if (event.originalEvent.wheelDelta <= 0) {
                if (($('#home').height() - 50) > $(window).scrollTop()) {
                    $('.home.scroll-down').trigger('click');
                }
            }
        });
    }

    //Sticky SVG navbar
    $('#home').waypoint(function (dir) {
        if (dir === 'down') {
            $(".menu-svg").css('opacity', '1');
        }
        if (dir === 'up') {
            $(".menu-svg").css('opacity', '0');
        }
    }, {
        offset: '-70%'
    });

    //Synchronize link with block and animate
    $('.pfblock').waypoint(function (dir) {
        if (dir === 'down') {
            var hash = $(this).attr('id');
            $(navLi).removeClass('active');

            $.each(navLi, function () {
                href = $(this).children('a').attr('href').slice(1);
                if (href == hash) {
                    $(this).addClass("active");
                }
            });

            $.each(navSVG, function () {
                lunar.removeClass(this, 'active');

                if (lunar.hasClass(this, hash)) {
                    lunar.addClass(this, 'active');
                }
            });
        }
    }, {
        offset: '40%'
    });
    $('.pfblock').waypoint(function (dir) {
        if (dir === 'up') {
            var hash = $(this).attr('id');
            $(navLi).removeClass('active');

            $.each(navLi, function () {
                href = $(this).children('a').attr('href').slice(1);
                if (href == hash) {
                    $(this).addClass("active");
                }
            });

            $.each(navSVG, function () {
                lunar.removeClass(this, 'active');

                if (lunar.hasClass(this, hash)) {
                    lunar.addClass(this, 'active');
                }
            });
        }
    }, {
        offset: '-50%'
    });

    //SVG timeline with fix for Firefox
    var line = $(".menu-svg__timeline").get(0);
    var len = dist(line.x1.baseVal.value, line.x2.baseVal.value,
        line.y1.baseVal.value, line.y2.baseVal.value);

    function dist(x1, x2, y1, y2) {
        return Math.sqrt((x2 -= x1) * x2 + (y2 -= y1) * y2);
    }

    $('.menu-svg__timeline').css({
        'stroke-dasharray': len,
        'stroke-dashoffset': len
    });

    //draw timeline when scrolling
    $(window).scroll(function () {
        var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
        var draw = len * scrollpercent;

        $('.menu-svg__timeline').css('strokeDashoffset', len - draw);
    });

    //Skills chart
    $("#skills").waypoint(function () {
        $("#skills .chart").each(function () {
            $(this).easyPieChart({
                size: 125,
                animate: 2e3,
                lineCap: "butt",
                scaleColor: !1,
                barColor: "#e91e63",
                trackColor: "transparent",
                lineWidth: 10
            })
        })
    }, {
        offset: "30%"
    });

    //Instruments chart
    $("#instruments").waypoint(function () {
        $("#instruments .chart").each(function () {
            $(this).easyPieChart({
                size: 125,
                animate: 2e3,
                lineCap: "butt",
                scaleColor: !1,
                barColor: "#e91e63",
                trackColor: "transparent",
                lineWidth: 10
            })
        })
    }, {
        offset: "30%"
    });

    //isotope filtering
    var grid = $('.portfolio-grid').isotope({
        // options
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('.portfolio-filters').on('click', 'button', function () {
        /* return if current */
        if ($(this).hasClass('active')) return;

        /* active current */
        $(this).addClass('active').siblings().removeClass('active');
        var filterValue = $(this).attr('data-filter');
        grid.isotope({filter: filterValue});
    });

    // portfolio compacting in mobile version
    if ($(document).width() < 768) {
        $('.portfolio-filters .all').trigger('click');
        $('.portfolio-filters').hide();
        $(".portfolio-item").slice(0, 2).fadeIn();
        grid.isotope();

        $(".portfolio-more").click(function () {
            $(".portfolio-item:hidden").slice(0, 2).fadeIn();

            if ($(".portfolio-item:hidden").length == 0) {
                $(".portfolio-more").fadeOut();
            }

            setTimeout(function(){
                grid.isotope();
            }, 500);
        });
    }

    $(window).resize(function () {
        if ($(document).width() < 768) {
            $('.portfolio-filters .all').trigger('click');
            $('.portfolio-filters').hide();
            $(".portfolio-item").slice(0, 2).show();
            grid.isotope();
        }
        else {
            $('.portfolio-filters').show();
        }
    });
});

//preloader
$(window).on('load', function () {
    $("#status").fadeOut();
    $("#preloader").delay(300).fadeOut("slow");
});

$(document).ready(function () {
    //smooth scroll to anchor
    $("a[href*=\\#]").bind("click", function (e) {
        var link = $(this);
        $("html, body").stop().animate({
            scrollTop: $(link.attr("href")).offset().top
        }, 300);
        e.preventDefault();
    });

    //init animate
    wow = new WOW({
        mobile: !1
    });
    wow.init();

    //scroll up button
    $(window).scroll(function () {
        $(this).scrollTop() > 100 ? $(".scroll-up").fadeIn() : $(".scroll-up").fadeOut()
    });

    //sticky header
    $(".navbar-sticky").sticky({
        topSpacing: 0
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
    var navLi = $(".navbar-sticky li");
    var navSVG = $(".menu-svg path, .menu-svg line");

    // Add strokeDashoffset to all SVG path
    var svgPaths = navSVG;
    for (var x = 0; x < svgPaths.length; x++) {
        var path = svgPaths[x];
        var pathDimensions = path.getTotalLength();
        path.style.strokeDasharray = pathDimensions;
        path.style.strokeDashoffset = pathDimensions;
    }

    //Sticky SVG navbar
    $('#home').waypoint(function (dir) {
        if (dir === 'down') {
            $(".menu-svg").css('opacity','1');
        }
        if (dir === 'up') {
            $(".menu-svg").css('opacity','0');
        }
    }, {
        offset: '-70%'
    });

    //Synchronize link with block and animate
    $('.pfblock').waypoint(function () {
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

    }, {
        offset: '50%'
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

    //click on svg link
    $('.menu-svg__item').click(function () {
        var name = $(this).attr('name');
        $(location).attr('href', '#' + name);
    });

    //SVG timeline
    var svgPaths = $('.menu-svg__timeline');
    for (var x = 0; x < svgPaths.length; x++) {
        var path = svgPaths[x];
        var pathDimensions = path.getTotalLength();
        path.style.strokeDasharray = pathDimensions;
        path.style.strokeDashoffset = pathDimensions;
    }

    //draw timeline when scrolling
    $(window).scroll(function () {
        var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
        var draw = pathDimensions * scrollpercent;

        $('.menu-svg__timeline').css('strokeDashoffset', pathDimensions - draw);
    });

    //Skills chart
    $("#skills").waypoint(function () {
        $("#skills .chart").each(function () {
            $(this).easyPieChart({
                size: 140,
                animate: 2e3,
                lineCap: "butt",
                scaleColor: !1,
                barColor: "#FF5252",
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
                size: 140,
                animate: 2e3,
                lineCap: "butt",
                scaleColor: !1,
                barColor: "#FF5252",
                trackColor: "transparent",
                lineWidth: 10
            })
        })
    }, {
        offset: "30%"
    });
});
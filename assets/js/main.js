$(function() {

    // Cache the Window object
    var $window = $(window);

    // Parallax Backgrounds
    // Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

    $('section[data-type="background"]').each(function() {
        var $bgobj = $(this); // assigning the object

        $(window).scroll(function() {

            // Scroll the background at var speed
            // the yPos is a negative value because we're scrolling it UP!								
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            // Put together our final background position
            var coords = '50% ' + yPos + 'px';

            // Move the background
            $bgobj.css({ backgroundPosition: coords });

        }); // end window scroll
    });

});


/* hero */
$(function() {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        showDropdowns: true,
        minDate: moment(),
        maxDate: moment().add(1, 'years'),
        showCustomRangeLabel: false,
        autoApply: true,
        locale: {
            format: 'MMM D, YYYY'
        }
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });

    // default range is today + 30 days
    var defaultRange = "" + moment().format('MMM D, YYYY') + " - " + moment().add(30, "days").format('MMM D, YYYY');
    $('input[name="daterange"]').val(defaultRange);
    $('.drp-buttons').css("display", "none");

});

$(document).ready(function() {
    //if has class end-date, .daterangepicker displaY; none;
    if ($(".end-date")[0]) {
        $(".daterangepicker").css("display", "none");
    }


    //video
    let videoSource = new Array();
    let i = 0; // global
    const element = document.getElementById("videoPlayer");

    function videoPlay(videoNum) {
        element.setAttribute("src", videoSource[videoNum]);
        element.autoplay = true;
        element.load();
        element.play();
    }
    videoPlay(0); // play the video


});

$(document).scroll(function() {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});


$(document).ready(function() {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        showDropdowns: true,
        minDate: moment(),
        maxDate: moment().add(1, 'years'),
        showCustomRangeLabel: false,
        autoApply: true,
        locale: {
            format: 'MMM D, YYYY'
        }
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });

    // default range is today + 30 days
    var defaultRange = "" + moment().format('MMM D, YYYY') + " - " + moment().add(30, "days").format('MMM D, YYYY');
    $('input[name="daterange"]').val(defaultRange);
    $('.drp-buttons').css("display", "none");

});

$(document).ready(function() {
    //if has class end-date, .daterangepicker displaY; none;
    if ($(".end-date")[0]) {
        $(".daterangepicker").css("display", "none");
    }
});
//collapsing bar
$(document).ready(function() {
    console.log($(window).scrollTop());
    if ($(window).scrollTop() === 0) {
        $("#myNavbar").css({
            'position': 'relative'
        });

    }


    $(window).scroll(function() {
        var scrollPos = $(this).scrollTop();
        if (scrollPos > 49) {
            $("#myNavbar").css({
                'position': 'fixed'
            });



            $('nav').addClass('fixed-nav');


        } else {
            $("#myNavbar").css({
                'position': 'relative'
            });
            $('nav').removeClass('fixed-nav');
        }

    });
});

//nav bar width for list elements 
$(document).ready(function() {
    var width = $('.justified').width();
    $('.justified').css('margin-left', '-' + (width / 2) + 'px');

    var width = $('.justifiedSearch').width();
    $('.justifiedSearch').css('margin-left', '-' + (width / 2) + 'px');

    var width = $('.justifiedLogo').width();
    $('.justifiedLogo').css('margin-left', '-' + (width / 2) + 'px');

});

///for animated search bar

$(document).ready(function() {
    $('#search-trigger').click(function() {
        $('#search-input').toggleClass('search-input-open');
    });

    $(document).click(function(e) {
        if (!$(e.target).closest('.ngen-search-form').length) {
            $('#search-input').removeClass('search-input-open');
        }
    })
});

///toggle arrow help

$(document).ready(function() {
    // var isOriginal = true;
    $(".caretHelp").hide();
    $(".arrowToggle").mouseover(function() {
        $(".caretHelp").show();
        $(".caretDown").hide();

    });
    $(".arrowToggle").mouseout(function() {
        $(".caretDown").show();
        $(".caretHelp").hide();
    });
});
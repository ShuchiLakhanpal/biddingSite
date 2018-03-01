$(document).ready(function() {
    $(".next").click(function(e) {
        var currentImage = $(".imageShown");
        var nextImage = currentImage.next();
        if (nextImage.length == 0) {
            nextImage = $(".innerCarousel img").first();
        }
        currentImage.removeClass("imageShown").addClass("imageHidden").css("z-index", -10);
        nextImage.addClass("imageShown").removeClass("imageHidden").css("z-index", 20);
        $(".innerCarousel").not([currentImage, nextImage]).css("z-index", 1); //reset the images other than current and next
        e.preventDefault(); //prevent the link from navigating to default action

    });

    $(".prev").click(function(e) {
        var currentImage = $(".imageShown");
        var nextImage = currentImage.prev();
        if (nextImage.length == 0) {
            nextImage = $(".innerCarousel img").last();
        }
        currentImage.removeClass("imageShown").addClass("imageHidden").css("z-index", -10);
        nextImage.addClass("imageShown").removeClass("imageHidden").css("z-index", 20);
        $(".innerCarousel").not([currentImage, nextImage]).css("z-index", 1); //reset the images other than current and next
        e.preventDefault(); //prevent the link from navigating to default action
    });

    $(".next1").click(function(i) {
        var currentImageNew = $(".shownImg");
        var nextImageNew = currentImageNew.next();
        if (nextImageNew.length == 0) {
            nextImageNew = $(".innerCarouselTwo img").first();
        }
        currentImageNew.removeClass("shownImg").addClass("hiddenImg").css("z-index", -11);
        nextImageNew.addClass("shownImg").removeClass("hiddenImg").css("z-index", 21);
        $(".innerCarouselTwo").not([currentImageNew, nextImageNew]).css("z-index", 1); //reset the images other than current and next
        i.preventDefault(); //prevent the link from navigating to default action

    });

    $(".prev1").click(function(i) {
        var currentImageNew = $(".shownImg");
        var nextImageNew = currentImageNew.prev();
        if (nextImageNew.length == 0) {
            nextImageNew = $(".innerCarouselTwo img").last();
        }
        currentImageNew.removeClass("shownImg").addClass("hiddenImg").css("z-index", -11);
        nextImageNew.addClass("shownImg").removeClass("hiddenImg").css("z-index", 21);
        $(".innerCarouselTwo").not([currentImageNew, nextImageNew]).css("z-index", 1); //reset the images other than current and next
        i.preventDefault(); //prevent the link from navigating to default action
    });
});

$(document).ready(function() {

    $(".caretHelp").hide();
    $(".arrowToggle").mouseover(function() {
        $(".caretHelp").show();
        $(".caretDown").hide();
        //  alert("hi");
    });


});

$(document).ready(function() {
    $(".openToggle").hide();
    $(".caretAlignUp").hide();
    $(".toggleHide").click(function() {
        $(".openToggle").toggle("slow");
        $(".caretAlignUp").show();
        $(".caretAlign").hide();

    });


});
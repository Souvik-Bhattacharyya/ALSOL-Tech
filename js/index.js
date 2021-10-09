
// Navbar Shrinks on scroll=====================
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "0";
    }
    prevScrollpos = currentScrollPos;
}

// Navbar Bg on scroll=====================
$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 80) {
            $("#navbar").addClass("nav-bag");
        }

        else {
            $("#navbar").removeClass("nav-bag");
        }
    })
});

// Preloader=====================
$(window).load(function () {
    $(".pageloader").fadeOut("slow");;
});

// Scroll top btn=====================
$(document).ready(function () {

    var scrollTop = $("#myBtn");

    $(window).scroll(function () {

        var topPos = $(this).scrollTop();

        if (topPos > 80) {
            $(scrollTop).css("opacity", "1");

        } else {
            $(scrollTop).css("opacity", "0");
        }

    });

    $(scrollTop).click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1);
        return false;
    });
});


// Footer

// Btn
document.getElementById("footer-btn").addEventListener("click", function () {
    document.getElementById("footer").classList.toggle("hide");
});

// background

$(document).ready(function () {

    $.fn.scrollBottom = function (scroll) {
        if (typeof scroll === 'number') {
            window.scrollTo(0, $(document).height() - $(window).height() - scroll);
            return $(document).height() - $(window).height() - scroll;
        } else {
            return $(document).height() - $(window).height() - $(window).scrollTop();
        }
    }

    $(window).scroll(function () {
        var scroll = $(window).scrollBottom();
        if (scroll > 80) {
            $("#nav-bottom").removeClass("footer-bagr");
        }

        else {
            $("#nav-bottom").addClass("footer-bagr");
        }
    })
});



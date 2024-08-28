document.addEventListener('DOMContentLoaded', function() {
    // Hamburger Menu
    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");
    const links = document.querySelectorAll(".nav-links li");

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle("open");
            links.forEach(link => {
                link.classList.toggle("fade");
            });
            hamburger.classList.toggle("toggle");
        });
    } else {
        console.error("Element with class 'hamburger' not found.");
    }

    // Typed.js Initialization
    if (document.querySelector(".home-content h3 span")) {
        var options = {
            strings: ["Web Developer", "Content Writer"],
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 1000,
            loop: true
        };
        new Typed(".home-content h3 span", options);
    } else {
        console.error("Element with class '.home-content h3 span' not found.");
    }

    // Slider Functionality
    let slideIndex = 1;
    let slideInterval = setInterval(() => plusSlides(1), 3000);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(' active', '');
        }
        slides[slideIndex - 1].style.display = 'block';
        dots[slideIndex - 1].className += ' active';
    }

    // Initialize the slider on page load
    showSlides(slideIndex);
});


    // Hide Header on on scroll down
var did_scroll;
var last_scroll_top = 0;
var damper = 20; // the number of pixels scrolled before header state is changed.
var header = $('nav').outerHeight();

$(window).scroll(function(event){
    did_scroll = true;
});

setInterval(function() {
    if (did_scroll) {
        has_scrolled();
        did_scroll = false;
    }
}, 250);

function has_scrolled() {
    var st = $(this).scrollTop();
    
    // fail first, return false if the user fails to scroll more than the specified damper.  
    if(Math.abs(last_scroll_top - st) <= damper){
        return;
    }

    if (st > last_scroll_top && st > header){
        // Scroll Down
        $('nav').addClass('hide-nav');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('nav').removeClass('hide-nav');
        }
    }
    
    last_scroll_top = st;
}

$(document).ready(function(){
    $('.your-class').slick({
        dots: true,
        infinite: true,
        speed: 600,  // Adjust speed for smoother transition
        slidesToShow: 3,
        adaptiveHeight: true,
        autoplay: false,
        autoplaySpeed: 2000,
        easing: 'ease-in-out',  // Easing function for smooth scroll
        centerMode: true,  // Centers the active slide
        centerPadding: '0px',  // Adjusts padding around the centered slide, can be customized
        arrows:true,
        infinite: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    centerMode: true,  // Ensure centering is applied on this breakpoint as well
                    variableWidth: true,
                }
            },
            
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,  // Ensure centering is applied on this breakpoint as well
                }
            },
            {
                breakpoint: 360,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,  // Ensure centering is applied on this breakpoint as well
                }
            }
        ]
    });
});

function openCity(evt, cityName) {
// Declare all variables
var i, tabcontent, tablinks;

// Get all elements with class="tabcontent" and hide them
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}

// Get all elements with class="tablinks" and remove the class "active"
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].className = tablinks[i].className.replace(" active", "");
}

// Show the current tab, and add an "active" class to the button that opened the tab
document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click(openCity(event, 'London'));


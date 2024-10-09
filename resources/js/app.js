import './bootstrap';

let slideIndex = 1;
showSlides(slideIndex);

window.plusSlides = function (n) {
    showSlides(slideIndex += n);
}

window.currentSlide = function (n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }

    for (i = 0; i < slides.length; i++) {
        slides[i].classList.add('hidden');
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].classList.remove('bg-gray-700');
    }

    slides[slideIndex - 1].classList.remove('hidden');
    dots[slideIndex - 1].classList.add('bg-gray-700');
}

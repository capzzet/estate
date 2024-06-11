const sliderContainer = document.querySelector('.slider-container');
const slides = document.querySelectorAll('.slide');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let slideIndex = 0;

prevButton.addEventListener('click', () => {
    slideIndex = (slideIndex === 0) ? slides.length - 1 : slideIndex - 1;
    updateSlide();
});

nextButton.addEventListener('click', () => {
    slideIndex = (slideIndex === slides.length - 1) ? 0 : slideIndex + 1;
    updateSlide();
});

function updateSlide() {
    const slideWidth = slides[0].clientWidth;
    sliderContainer.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
}

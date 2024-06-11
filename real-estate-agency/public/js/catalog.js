document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.querySelectorAll(".slider");

    sliders.forEach((slider, index) => {
        const slides = slider.querySelectorAll(".slide");
        const indicators = slider.querySelectorAll(".slider-indicator");
        const prevButton = slider.querySelector(".prev");
        const nextButton = slider.querySelector(".next");
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, idx) => {
                slide.style.display = idx === index ? "block" : "none";
            });
            indicators.forEach((indicator, idx) => {
                indicator.classList.toggle("active", idx === index);
            });
        }

        function goToSlide(index) {
            currentIndex = index;
            showSlide(currentIndex);
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        indicators.forEach((indicator, index) => {
            indicator.addEventListener("click", () => {
                goToSlide(index);
            });
        });

        prevButton.addEventListener("click", () => {
            prevSlide();
        });

        nextButton.addEventListener("click", () => {
            nextSlide();
        });

        showSlide(currentIndex);
    });

    const showPhoneBtns = document.querySelectorAll('#show-phone');
    const phoneNumbers = document.querySelectorAll('#phone-number');

    showPhoneBtns.forEach((button, index) => {
        button.addEventListener('click', () => {
            button.style.display = 'none';
            phoneNumbers[index].style.display = 'block';
        });
    });

    const advancedSearchButton = document.querySelector(".advanced-search");
    const advancedSearchForm = document.querySelector(".advanced-search-form");
    const applyFiltersButton = document.querySelector("#apply-filters");
    const resetFiltersButton = document.querySelector("#reset-filters");
    const filterCountSpan = document.querySelector(".filter-count");

    advancedSearchButton.addEventListener("click", (event) => {
        advancedSearchForm.style.display = advancedSearchForm.style.display === "block" ? "none" : "block";
        event.stopPropagation();
    });

    document.addEventListener("click", (event) => {
        if (!advancedSearchForm.contains(event.target) && advancedSearchForm.style.display === "block") {
            advancedSearchForm.style.display = "none";
        }
    });

    applyFiltersButton.addEventListener("click", () => {
        let filterCount = 0;
        const inputs = advancedSearchForm.querySelectorAll("input, select");
        inputs.forEach(input => {
            if (input.value && input.value !== "any") {
                filterCount++;
            }
        });
        filterCountSpan.textContent = `(${filterCount})`;
        advancedSearchForm.style.display = "none";
    });

    resetFiltersButton.addEventListener("click", () => {
        const inputs = advancedSearchForm.querySelectorAll("input, select");
        inputs.forEach(input => {
            input.value = input.tagName === "SELECT" ? "any" : "";
        });
        filterCountSpan.textContent = "(0)";
    });
});

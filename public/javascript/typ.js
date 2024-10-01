function createSlider(sliderId, prevBtnId, nextBtnId) {
    const slider = document.getElementById(sliderId);
    const prevBtn = document.getElementById(prevBtnId);
    const nextBtn = document.getElementById(nextBtnId);
    const slides = slider.children;
    let currentIndex = 0;

    function getVisibleSlides() {
        if (window.innerWidth >= 1024) return 4; // lg
        if (window.innerWidth >= 768) return 2; // md
        return 1; // sm
    }

    function updateSlider() {
        const visibleSlides = getVisibleSlides();
        const slideWidth = slider.clientWidth / visibleSlides;
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    function showPrevSlide() {
        const visibleSlides = getVisibleSlides();
        currentIndex = Math.max(currentIndex - visibleSlides, 0);
        updateSlider();
    }

    function showNextSlide() {
        const visibleSlides = getVisibleSlides();
        currentIndex = Math.min(currentIndex + visibleSlides, slides.length - visibleSlides);
        updateSlider();
    }

    prevBtn.addEventListener('click', showPrevSlide);
    nextBtn.addEventListener('click', showNextSlide);

    window.addEventListener('resize', updateSlider);
    updateSlider();
}

// Initialize sliders
createSlider('flightSlider', 'flightPrevBtn', 'flightNextBtn');
createSlider('villaSlider', 'villaPrevBtn', 'villaNextBtn');
createSlider('newsSlider', 'newsPrevBtn', 'newsNextBtn');
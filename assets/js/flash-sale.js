// Flash Sale Carousel Logic
const flashTrack = document.getElementById('flashCarouselTrack');
const flashNextBtn = document.getElementById('flashNextBtn');
const flashPrevBtn = document.getElementById('flashPrevBtn');

if (flashNextBtn && flashPrevBtn && flashTrack) {
    const getFlashScrollStep = () => {
        const card = flashTrack.querySelector('.fs-product-card');
        return card ? card.offsetWidth + 20 : 0;
    };

    flashNextBtn.addEventListener('click', () => {
        flashTrack.scrollBy({ left: getFlashScrollStep(), behavior: 'smooth' });
    });

    flashPrevBtn.addEventListener('click', () => {
        flashTrack.scrollBy({ left: -getFlashScrollStep(), behavior: 'smooth' });
    });

    // Auto-Scroll Logic
    const startFlashAutoScroll = () => {
        return setInterval(() => {
            const maxScrollLeft = flashTrack.scrollWidth - flashTrack.clientWidth;
            if (flashTrack.scrollLeft >= maxScrollLeft - 5) {
                flashTrack.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                flashTrack.scrollBy({ left: getFlashScrollStep(), behavior: 'smooth' });
            }
        }, 2000);
    };

    let flashAutoScroll = startFlashAutoScroll();

    // Pause on Hover
    flashTrack.addEventListener('mouseenter', () => clearInterval(flashAutoScroll));
    flashTrack.addEventListener('mouseleave', () => {
        flashAutoScroll = startFlashAutoScroll();
    });
}
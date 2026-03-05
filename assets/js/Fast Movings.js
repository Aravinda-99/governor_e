// Fast Movings Carousel Logic
const fastTrack = document.getElementById('fastCarouselTrack');
const fastNextBtn = document.getElementById('fastNextBtn');
const fastPrevBtn = document.getElementById('fastPrevBtn');

if (fastNextBtn && fastPrevBtn && fastTrack) {
    const getScrollStep = () => {
        const card = fastTrack.querySelector('.fm-product-card');
        return card ? card.offsetWidth + 20 : 0;
    };

    fastNextBtn.addEventListener('click', () => {
        fastTrack.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
    });

    fastPrevBtn.addEventListener('click', () => {
        fastTrack.scrollBy({ left: -getScrollStep(), behavior: 'smooth' });
    });

    // Auto-Scroll Logic
    const startAutoScroll = () => {
        return setInterval(() => {
            const maxScrollLeft = fastTrack.scrollWidth - fastTrack.clientWidth;
            if (fastTrack.scrollLeft >= maxScrollLeft - 5) {
                fastTrack.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                fastTrack.scrollBy({ left: getScrollStep(), behavior: 'smooth' });
            }
        }, 2000);
    };

    let fastAutoScroll = startAutoScroll();

    // Pause on Hover
    fastTrack.addEventListener('mouseenter', () => clearInterval(fastAutoScroll));
    fastTrack.addEventListener('mouseleave', () => {
        fastAutoScroll = startAutoScroll();
    });
}


// Carousel Left/Right Scrolling Logic
const track = document.getElementById('carouselTrack');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');

const scrollStep = () => {
    const card = track.querySelector('.product-card');
    if (!card) return 0;
    return card.offsetWidth + 20;
};

nextBtn.addEventListener('click', () => {
    track.scrollBy({ left: scrollStep(), behavior: 'smooth' });
});

prevBtn.addEventListener('click', () => {
    track.scrollBy({ left: -scrollStep(), behavior: 'smooth' });
});

// Auto-Scroll Logic
let autoScrollInterval = setInterval(() => {
    const maxScrollLeft = track.scrollWidth - track.clientWidth;

    if (track.scrollLeft >= maxScrollLeft - 5) {
        track.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
        track.scrollBy({ left: scrollStep(), behavior: 'smooth' });
    }
}, 2000);

// Pause on Hover
track.addEventListener('mouseenter', () => clearInterval(autoScrollInterval));
track.addEventListener('mouseleave', () => {
    autoScrollInterval = setInterval(() => {
        const maxScrollLeft = track.scrollWidth - track.clientWidth;
        if (track.scrollLeft >= maxScrollLeft - 5) {
            track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            track.scrollBy({ left: scrollStep(), behavior: 'smooth' });
        }
    }, 2000);
});
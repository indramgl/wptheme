/**
 * UX Interactions: Booking Bar & Predictive Search
 */

document.addEventListener('DOMContentLoaded', () => {
    // Booking Bar Scroll Logic
    const bookingBar = document.querySelector('.saphir-booking-bar');
    if (bookingBar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                bookingBar.classList.add('is-visible');
            } else {
                bookingBar.classList.remove('is-visible');
            }
        });
    }
});

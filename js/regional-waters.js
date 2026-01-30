AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});
document.addEventListener('DOMContentLoaded', function() {
    // Get the modal element
    const modal = document.querySelector('.guide-modal');

    // Add listener for when modal is about to be shown
    if (modal) {
        modal.addEventListener('show.bs.modal', function(event) {
            // Get the element that triggered the modal
            const trigger = event.relatedTarget;

            // Get the slide index from the trigger element
            const slideIndex = trigger.getAttribute('data-bs-slide-to');

            // After modal is fully shown, move carousel to the correct slide
            modal.addEventListener('shown.bs.modal', function() {
                // Get the carousel instance
                const carousel = document.getElementById('guide-carousel');
                if (carousel) {
                    const carouselInstance = bootstrap.Carousel.getOrCreateInstance(carousel);
                    // Go to the specific slide
                    carouselInstance.to(parseInt(slideIndex));
                }
            }, { once: true }); // Only listen once to avoid memory leaks
        });
    }
});
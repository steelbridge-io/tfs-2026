AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

document.addEventListener('DOMContentLoaded', function() {
    /**
     * Represents a DOM element with the ID 'imageModal'.
     * This element is typically used as a modal dialog for displaying carousel images.
     * It may include content such as an image, title, or navigation controls,
     * and is often dynamically shown or hidden in response to user interactions.
     */
    const imageModal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalLink = document.getElementById('modalLink');
    const modalLinkAnchor = document.getElementById('modalLinkAnchor');

    // Handle gallery image clicks
        document.querySelectorAll('.gallery-image').forEach(function(img) {
            img.addEventListener('click', function() {
            const imageSrc = this.getAttribute('data-image');
            const imageLink = this.getAttribute('data-link');

            modalImage.src = imageSrc;

            if (imageLink && imageLink.trim() !== '') {
            modalLinkAnchor.href = imageLink;
            modalLink.style.display = 'block';
            } else {
            modalLink.style.display = 'none';
            }
        });
    });
});


/**
 * Logo and title h1 positioning
 */
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

   	const handleScrollStages = () => {
		const scrollY = window.scrollY;

		// Remove all stage classes first
		navbar.classList.remove('scroll-stage-1', 'scroll-stage-2', 'scroll-stage-3', 'scrolled');

		// Disable scroll effects on mobile (screens < 992px)
		if (window.innerWidth < 992) { if (scrollY > 50) { navbar.classList.add("scrolled"); }  
			return;
		}

		if (scrollY > 10 && scrollY <= 25) {
            navbar.classList.add('scroll-stage-1');
        } else if (scrollY > 25 && scrollY <= 40) {
            navbar.classList.add('scroll-stage-2');
        } else if (scrollY > 40 && scrollY <= 50) {
            navbar.classList.add('scroll-stage-3');
        } else if (scrollY > 50) {
            navbar.classList.add('scrolled');
        }
    };

    // Use requestAnimationFrame for smooth animation
    let isScrolling = false;
    window.addEventListener("scroll", function() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                handleScrollStages();
                isScrolling = false;
            });
            isScrolling = true;
        }
    });

    // Run on page load
    handleScrollStages();
});
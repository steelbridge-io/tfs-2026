/**
 * Features
 */
AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.item');

    items.forEach(item => {
        item.addEventListener('click', function() {
            const featureGrid = document.getElementById('feature-grid-destination-template');
            const scrollableContent = document.getElementById('scrollable-content');

            // Reset the scroll position of the content area
            scrollableContent.scrollTop = 0;

            // Scroll the feature grid into view
            featureGrid.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
});




// Add this JavaScript to your template or JS file
document.addEventListener('DOMContentLoaded', function() {
    // When displaying the content
    const items = document.querySelectorAll('.item');
    items.forEach(item => {
        item.addEventListener('click', function() {
            let content = this.getAttribute('data-content');
            content = decodeEntities(content);
            document.getElementById('display-content').innerHTML = content;
        });
    });

    function decodeEntities(encodedString) {
        const textarea = document.createElement('textarea');
        textarea.innerHTML = encodedString;
        return textarea.value;
    }
});

/**
 * Carousel JS
 */
document.addEventListener('DOMContentLoaded', function() {
    // Get the modal element
    const travelModal = document.getElementById('travelTableModal');

    // Store the slide number that should be shown
    let slideToShow = 0;

    // Add click listeners to all thumbnail images
    document.querySelectorAll('[data-slide-to]').forEach(function(element) {
        element.addEventListener('click', function() {
            // Store the slide number from the clicked thumbnail
            slideToShow = parseInt(this.getAttribute('data-slide-to'));
        });
    });

    // When the modal is shown, switch to the correct slide
    travelModal.addEventListener('shown.bs.modal', function() {
        const carousel = document.getElementById('travel-carousel');
        const bsCarousel = bootstrap.Carousel.getInstance(carousel);
        // Go to the stored slide number
        bsCarousel.to(slideToShow);
    });
});
 function setScrollableHeight() {
      const col4 = document.getElementById('col4');
      const scrollableContent = document.getElementById('scrollable-content');
      if (col4 && scrollableContent) {
          if (window.innerWidth >= 768) { // Bootstrap's md breakpoint
              const col4Height = col4.offsetHeight;
              scrollableContent.style.height = `${col4Height}px`;
          } else {
              scrollableContent.style.height = 'auto'; // Reset on smaller screens
          }
      }
  }

  // Run on page load and window resize
  window.addEventListener('load', setScrollableHeight);
  window.addEventListener('resize', setScrollableHeight);



  // Select all items and display elements
  const items = document.querySelectorAll('.item');
  const displayImage = document.getElementById('display-image');
  const displayContent = document.getElementById('display-content');

  // Add click event listeners to each item
  items.forEach(item => {
      item.addEventListener('click', () => {
          // Remove active class from all items
          items.forEach(i => i.classList.remove('active'));
          // Add active class to clicked item
          item.classList.add('active');
          // Update left column with data attributes
          displayImage.src = item.getAttribute('data-image');
          //displayContent.textContent = item.getAttribute('data-content');
          displayContent.innerHTML = item.getAttribute('data-content');
      });
  });

  // Set the first item as active by default
  if (items.length > 0) {
      items[0].click();
  }
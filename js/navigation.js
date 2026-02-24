/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );
		button.classList.toggle( 'is-open' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.classList.remove( 'is-open' );
			button.setAttribute( 'aria-expanded', 'false' );

			// Also close Bootstrap 5 collapse menu if it's open
			const menuCollapse = document.getElementById('homepage');
			if (menuCollapse && menuCollapse.classList.contains('show')) {
				const bsCollapse = bootstrap.Collapse.getInstance(menuCollapse) || new bootstrap.Collapse(menuCollapse);
				bsCollapse.hide();
			}
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );

document.addEventListener("DOMContentLoaded", function () {
	const navbar = document.querySelector(".navbar");
	const belowNavLogo = document.getElementById("below-nav-logo");
	const isArchive = document.body.classList.contains('archive');

	const addScrolledClass = () => {
		if (isArchive) {
			// Always show navbar logo on archive pages
			navbar.classList.add('scrolled');
			return;
		}

		// If the page is scrolled down more than 50px, add the "scrolled" class
		if (window.scrollY > 50) {
			navbar.classList.add("scrolled");
		} else {
			navbar.classList.remove("scrolled");
		}
	};

	// Run function on scroll and on page load
	if (!isArchive) {
		window.addEventListener("scroll", addScrolledClass);
	}
	addScrolledClass();
});

/** Enhanced Logo Animation */
document.addEventListener('DOMContentLoaded', function() {
	const nav = document.querySelector('#site-navigation');
	const belowNavLogo = document.querySelector('.below-nav-logo-container');
	const isArchive = document.body.classList.contains('archive');

	// On archive pages, force scrolled state and skip listeners
	if (isArchive) {
		nav.classList.add('scrolled');
		return;
	}

	// Function to handle scroll effects
	function handleScroll() {
		if (isArchive) return;

		if (window.scrollY > 50) {
			nav.classList.add('scrolled');
		} else {
			nav.classList.remove('scrolled');
		}
	}

	// Apply scrolled class on page load if needed
	handleScroll();

	// Add scroll event listener with throttling for better performance
	let isScrolling = false;
	window.addEventListener('scroll', function() {
		if (!isScrolling) {
			window.requestAnimationFrame(function() {
				handleScroll();
				isScrolling = false;
			});
			isScrolling = true;
		}
	});
});


/** Added JS */

document.addEventListener("DOMContentLoaded", function () {
	const navbar = document.querySelector(".navbar");
	const isArchive = document.body.classList.contains('archive');

	if (isArchive) {
		// On archive pages, we keep the navbar in post-scroll state and skip stage classes
		navbar.classList.add('scrolled');
		return;
	}

	const handleScrollStages = () => {
		const scrollY = window.scrollY;

		// Remove all stage classes first
		navbar.classList.remove('scroll-stage-1', 'scroll-stage-2', 'scroll-stage-3', 'scrolled');

		if (isArchive) {
			navbar.classList.add('scrolled');
			return;
		}

		if (window.innerWidth < 992) { if (scrollY > 50) { navbar.classList.add("scrolled"); }  
			if (scrollY > 50) {
				navbar.classList.add('scrolled');
			}
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
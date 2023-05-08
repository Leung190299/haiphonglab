const elements = document.querySelectorAll('.serviceItem_body');

	function fadeInElements() {
	elements.forEach(element => {
		const elementTop = element.getBoundingClientRect().top;
		const elementHeight = element.offsetHeight;
		const windowHeight = window.innerHeight;

		if (elementTop < windowHeight - elementHeight) {
		element.style.opacity = '1';
		}
	});
	}

	window.addEventListener('scroll', fadeInElements);
	window.addEventListener('resize', fadeInElements);


	fadeInElements();
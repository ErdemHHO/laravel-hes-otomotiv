
// Toggle search box with search icon
const search = document.querySelector('.search__box');
document.querySelector('#search-icon').onclick = () => {
	search.classList.toggle('active');
	nav.classList.remove('active');
}

// Add shadow to header on page scroll
const header = document.querySelector('header');
window.addEventListener('scroll', ()=>{
	header.classList.toggle('shadow', window.scrollY > 0);
})

// Toggle nav menu with menu icon
const nav = document.querySelector('.nav__links');
document.querySelector('#menu-icon').onclick = () => {
	nav.classList.toggle('active');
	search.classList.remove('active');
}


// Remove nav links and search box on page scroll
window.onscroll = () => {
	nav.classList.remove('active');
	search.classList.remove('active');
}




/*=========================== SCROLL SECTION ACTIVE LINK ======================= */
const sections = document.querySelectorAll('section[id]');

function scrollActive() {
	const scrollY = window.pageYOffset;

	sections.forEach(current => {
		const sectionHeight = current.offsetHeight;
		const sectionTop = current.offsetTop - 100;
		let sectionId = current.getAttribute('id');

		if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
			document.querySelector(`.nav__links a[href*=${ sectionId }]`).classList.add('active');
		}else {
			document.querySelector(`.nav__links a[href*=${ sectionId }]`).classList.remove('active');
		}
	})
}

window.addEventListener('scroll', scrollActive);

/* product left start */
if($(".product-left").length){
	var productSlider = new Swiper('.product-slider', {
		spaceBetween: 0,
		centeredSlides: false,
		loop:true,
		direction: 'horizontal',
		loopedSlides: 5,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		resizeObserver:true,
	});
	var productThumbs = new Swiper('.product-thumbs', {
		spaceBetween: 0,
		centeredSlides: true,
		loop: true,
		slideToClickedSlide: true,
		direction: 'horizontal',
		slidesPerView: 5,
		loopedSlides: 5,
	});
	productSlider.controller.control = productThumbs;
	productThumbs.controller.control = productSlider;
	



}
/* 	product left end */
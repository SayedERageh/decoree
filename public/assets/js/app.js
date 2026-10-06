/* =========================================================
   TABARAK - GLOBAL INITIALIZATION
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       AOS
       ===================================================== */

    if (typeof AOS !== 'undefined') {

        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 80,
        });

    }


    /* =====================================================
       MOBILE MENU
       ===================================================== */

    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    if (mobileMenuToggle && mobileMenu) {

        mobileMenuToggle.addEventListener('click', function (event) {

            event.stopPropagation();

            mobileMenuToggle.classList.toggle('active');
            mobileMenu.classList.toggle('open');

            const isOpen = mobileMenu.classList.contains('open');

            mobileMenuToggle.setAttribute(
                'aria-expanded',
                isOpen ? 'true' : 'false'
            );

        });


        /* Close menu after clicking a link */

        mobileMenu.querySelectorAll('a').forEach(function (link) {

            link.addEventListener('click', function () {

                mobileMenuToggle.classList.remove('active');
                mobileMenu.classList.remove('open');

                mobileMenuToggle.setAttribute(
                    'aria-expanded',
                    'false'
                );

            });

        });


        /* Close menu when clicking outside */

        document.addEventListener('click', function (event) {

            if (
                !mobileMenu.contains(event.target) &&
                !mobileMenuToggle.contains(event.target)
            ) {

                mobileMenuToggle.classList.remove('active');
                mobileMenu.classList.remove('open');

                mobileMenuToggle.setAttribute(
                    'aria-expanded',
                    'false'
                );

            }

        });

    }
/* =====================================================
   LUXURY HERO SWIPER
   ===================================================== */

const luxHeroSwiper = document.querySelector('.lux-hero-swiper');

if (luxHeroSwiper) {

    if (typeof Swiper === 'undefined') {

        console.error('Swiper JS is not loaded.');

    } else {

        const pagination = luxHeroSwiper.querySelector(
            '.lux-hero-pagination'
        );

        const nextButton = luxHeroSwiper.querySelector(
            '.lux-hero-next'
        );

        const prevButton = luxHeroSwiper.querySelector(
            '.lux-hero-prev'
        );

        new Swiper(luxHeroSwiper, {

            loop: true,

            speed: 1200,

            effect: 'fade',

            fadeEffect: {
                crossFade: true,
            },

            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
            },

            allowTouchMove: true,

            watchSlidesProgress: true,

            pagination: pagination ? {
                el: pagination,
                clickable: true,
            } : false,

            navigation: (nextButton && prevButton) ? {
                nextEl: nextButton,
                prevEl: prevButton,
            } : false,

        });

        console.log('Luxury Hero Swiper initialized successfully.');

    }

}
    /* =====================================================
       IMAGE HOVER
       ===================================================== */

    const imageCards = document.querySelectorAll(
        '.service-card, .project-card, .about-visual'
    );

    if (imageCards.length) {

        imageCards.forEach(function (card) {

            card.addEventListener('mouseenter', function () {

                card.classList.add('is-hovered');

            });

            card.addEventListener('mouseleave', function () {

                card.classList.remove('is-hovered');

            });

        });

    }

});
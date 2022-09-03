var swiper = new Swiper(".slider", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        clickable: true,
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    slidesPerView: 1,
    loop: true,
    speed: 500,
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },
});

var swiper = new Swiper(".live-auc", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
        clickable: true,
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        550: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1300: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

var swiper = new Swiper(".trendy", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    slidesPerView: 1,
    slidesPerColumn: 2,
    slidesPerColumnFill: "row",
    spaceBetween: 30,
    navigation: {
        clickable: true,
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
            slidesPerColumn: 2,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 3,
            slidesPerColumn: 1,
            spaceBetween: 30,
        },
    },
});

var swiper = new Swiper(".hot-coll", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    slidesPerView: 2,
    loop: true,
    spaceBetween: 26,
    navigation: {
        clickable: true,
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        768: {
            slidesPerView: 4,
            spaceBetween: 26,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 26,
        },
    },
});

var swiper = new Swiper(".author-best", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    slidesPerView: 2,
    loop: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 30,
        },
    },
});

var swiper = new Swiper(".live-auc.style-2", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    slidesPerView: 1,
    slidesPerColumn: 2,
    slidesPerColumnFill: "row",
    spaceBetween: 30,
    navigation: {
        clickable: true,
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1024: {
            slidesPerView: 2,
            slidesPerColumn: 2,
            spaceBetween: 30,
        },
    },
});

var swiper = new Swiper(".popular-coll", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    slidesPerView: 1,
    slidesPerColumn: 2,
    slidesPerColumnFill: "row",
    spaceBetween: 30,
    navigation: {
        clickable: true,
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
            slidesPerColumn: 2,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 2,
            slidesPerColumn: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            slidesPerColumn: 2,
            spaceBetween: 30,
        },
    },
});

var swiper = new Swiper(".popular-coll-2", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    slidesPerView: 1,
    slidesPerColumn: 2,
    slidesPerColumnFill: "row",
    spaceBetween: 30,
    navigation: {
        clickable: true,
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
            slidesPerColumn: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            slidesPerColumn: 2,
            spaceBetween: 30,
        },
        1366: {
            slidesPerView: 4,
            slidesPerColumn: 2,
            spaceBetween: 30,
        },
    },
});

var swiper = new Swiper(".latest-coll", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
        clickable: true,
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        550: {
            slidesPerView: "auto",
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: "auto",
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: "auto",
            spaceBetween: 30,
        },
    },
});

const wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// sliders
const gallerySliders = document.querySelectorAll('.js-slider-gallery');
gallerySliders.forEach(el => {
    tns({
        container: el,
        autoWidth: true,
        items: 2,
        gutter: 0,
        mouseDrag: true,
        autoplay: false,
        nav: false,
        controls: false,
        loop: false,
        responsive: {
            1070: {
                disable: true
            }
        }
    });
})

const careersSlider = tns({
    container: '.js-slider-careers',
    items: 1,
    slideBy: 'page',
    autoplay: false,
    nav: false,
    controls: false,
    gutter: 36,
    autoWidth: true,
    mouseDrag: true,
    loop: false,
    responsive: {
        640: {
            gutter: 46,
            items: 3
        },
        1070: {
            disable: true
        }
    }
});

const teamSlider = tns({
    container: '.js-slider-team',
    items: 2,
    slideBy: 'page',
    autoplay: false,
    nav: false,
    controls: false,
    gutter: 24,
    autoWidth: true,
    mouseDrag: true,
    loop: false,
    responsive: {
        1070: {
            gutter: 34,
            items: 3
        },
        1360: {
            gutter: 28,
            items: 4
        }
    }
});

const teamCarouselWrapper = document.querySelector('.team');
if (teamCarouselWrapper) {
    teamCarouselWrapper.addEventListener('mouseenter', () => {
        window.addEventListener(wheelEvent, handleCarouselScroll, { passive: false });
    });
    teamCarouselWrapper.addEventListener('mouseleave', () => {
        window.removeEventListener(wheelEvent, handleCarouselScroll);
    });
}

function handleCarouselScroll(e) {
    const { slideBy, index } = teamSlider.getInfo();

    if (e.deltaY > 0) {
        if (index >= slideBy) {
            return;
        }

        teamSlider.goTo('next');
        e.preventDefault();

    } else {
        if (index === 0) {
            return;
        }
        teamSlider.goTo('prev');
        e.preventDefault();

    }
}

// menu
const menuToggleElement = document.querySelector('.menu-toggle');
menuToggleElement.addEventListener('click', () => document.body.classList.toggle('menu-opened'));


const fadeElement = document.querySelector('.fade');
const fadeMobileElement = document.querySelector('.fade__mobile');

function closeAllOpened() {
    document.querySelectorAll('.opened').forEach(el => el.classList.remove('opened'));
    document.querySelectorAll('.popup-opened').forEach(el => el.classList.remove('popup-opened'));
    document.querySelectorAll('.mobile-menu-opened').forEach(el => el.classList.remove('mobile-menu-opened'));
}

if (fadeElement) {
    fadeElement.addEventListener('click', closeAllOpened);
}
if (fadeMobileElement) {
    fadeMobileElement.addEventListener('click', closeAllOpened);
}

/* Popup */
const popupToggleElements = document.querySelectorAll('.js-popup-toggle');

function disableScroll(e) {
    e.preventDefault();
}

function openPopup(name) {
    const popup = document.querySelector(`.popup[data-popup="${name}"]`);
    if (popup) {
        popup.classList.add('opened');
        document.body.classList.add('popup-opened');
        window.addEventListener(wheelEvent, disableScroll, { passive: false });
    }
}
function closePopup(name) {
    document.querySelector('.popup.opened').classList.remove('opened');
    document.body.classList.remove('popup-opened');
    window.removeEventListener(wheelEvent, disableScroll, { passive: false });

}

popupToggleElements.forEach(el => el.addEventListener('click', (e) => {
    e.preventDefault();
    openPopup(el.dataset.popup);
}));

const popupCloseElements = document.querySelectorAll('.popup_close');
popupCloseElements.forEach(el => el.addEventListener('click', (e) => {
    e.preventDefault();
    closePopup();
}));


/* cookies */
const hasCookies = Cookies.get('CookieNotificationCookie');

const cookiesBanner = document.querySelector('.cookies');
const cookiesAcceptButton = document.querySelector('.cookies_button');

if (cookiesAcceptButton) {
    cookiesAcceptButton.addEventListener('click', function (e) {
        e.preventDefault();
    
        cookiesBanner.style.display = 'none';
        Cookies.set('CookieNotificationCookie', 'true', { expires: 365 });
    });
}

if (cookiesBanner && !hasCookies) {
    cookiesBanner.style.display = 'block';
}


/* appaerance animation */
const animatedElements = document.querySelectorAll('.js-animation');
const thresholdSteps = [...Array(10).keys()].map(i => i / 10);

if (animatedElements.length) {
    const observerCallback = function (e) {
        const { target, intersectionRatio } = e[0];

        if (intersectionRatio > 0.7) {
            target.classList.add('animated');
        }
        if (target.dataset.src) {
            target.src = target.dataset.src;
        }
    };

    animatedElements.forEach(el => {
        const observer = new IntersectionObserver(observerCallback, {
            rootMargin: '0px 0px -25% 0px',
            threshold: thresholdSteps,
            //root: document.body
        });
        observer.observe(el);
    })
}

/* team-members-tooltip */
const teamMemberElements = document.querySelectorAll('.team_member');
teamMemberElements.forEach(el => {
    el.addEventListener('mousemove', moveTooltip);
    el.addEventListener('mouseleave', moveTooltip);
});

function moveTooltip(e) {
    const { clientX, clientY } = e;
    const { top, left } = e.target.getBoundingClientRect();

    const x = Math.round(clientX - left);
    const y = Math.round(clientY - top);
    const tooltipElement = e.target.parentNode.querySelector('.team_member-tooltip');

    tooltipElement.style.left = `${x}px`;
    tooltipElement.style.top = `${y}px`;
}

// more button
const moreButtonElement = document.querySelector('.more-button');
if (moreButtonElement) {
    moreButtonElement.addEventListener('click', (e) => {
        moreButtonElement.parentNode.remove(moreButtonElement);
    }, false)
}

// textarea
const textareaElement = document.querySelector('.js-textarea');
if (textareaElement) {
    textareaElement.addEventListener('input', resizeTextarea)
}

function resizeTextarea (e) {
    this.prevHeight = parseInt(e.target.style.height) || 0;
    const { scrollHeight } = e.target;
    if (scrollHeight > 70) {
        e.target.classList.add('expanded');
        if (scrollHeight > this.prevHeight) {
            e.target.style.height = `${scrollHeight}px`;
        }
    }
}

// upload file
const fileUploadLinkElement = document.querySelector('.js-file-upload-link');
const fileUploadElement = document.querySelector('.js-file-upload');

if (fileUploadLinkElement) {
    fileUploadLinkElement.addEventListener('click', (e) => {
        e.preventDefault();

        fileUploadElement.click();
    })
}
if (fileUploadElement) {
    fileUploadElement.addEventListener('input', (e) => {
        fileUploadLinkElement.innerText = 'here';
        fileUploadLinkElement.classList.add('filled');
    })
}

// mask
const maskHolderElements = document.querySelectorAll('.js-mask-holder');
maskHolderElements.forEach(maskHolderElement => maskHolderElement.addEventListener('mousemove', (e) => {
    const { layerX: x, layerY: y } = e;
    const maskElement = maskHolderElement.querySelector('.js-mask');
    maskElement.style.left = `${x}px`
    maskElement.style.top = `${y}px`
}, false));

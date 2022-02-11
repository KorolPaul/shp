// sliders

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
const popupToggleElements = document.querySelectorAll('.js-popup-toggle')
const popupElement = document.querySelector('.popup');

function togglePopup() {
    popupElement.classList.toggle('opened');
    fadeElement.classList.toggle('opened');
}

popupToggleElements.forEach(el => el.addEventListener('click', (e) => {
    e.preventDefault();
    togglePopup();
}));

/* Tabs */
const tabsButtons = document.querySelectorAll('.tabs_button');
const tabsBlocks = document.querySelectorAll('.tabs_content');

if (tabsButtons.length) {
    function switchTab(e) {
        e.preventDefault();

        const index = e.target.dataset.tabLink;
        tabsButtons.forEach(el => el.classList.remove('active'));
        tabsBlocks.forEach(el => el.classList.remove('active'));

        tabsButtons[index - 1].classList.add('active');
        tabsBlocks[index - 1].classList.add('active');
    }

    tabsButtons.forEach(el => el.addEventListener('click', switchTab));
}

/* load more */
const loadMoreButton = document.querySelector('.more-button');
if (loadMoreButton) {
    loadMoreButton.addEventListener('click', function(e) {
        e.target.classList.add('active');

        setTimeout(() => {
            e.target.classList.remove('active');
        }, 1000);
    });
}

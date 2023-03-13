// document height
function documentHeight() {
    let doc = document.documentElement;
    doc.style.setProperty('--doc-height', `${window.innerHeight}px`);
}
window.addEventListener('resize', documentHeight);
documentHeight();

// add section class
let sections = document.querySelectorAll('section'),
    burger = document.querySelector('.header__burger'),
    obsOptions = {
        root: null,
        threshold: .5
    };

let handler = (entries, opts) => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > opts.thresholds[0]) {
            document.body.classList.remove(...document.body.classList);
            document.body.classList.add(entry.target.id + '-view');

            // change link
            let sibling = (entry.target.nextElementSibling) ? entry.target.nextElementSibling : entry.target.previousElementSibling;
            burger.href = '#' + sibling.id;
        }
    })
}

sections.forEach(el => {
    let observer = new IntersectionObserver(handler, obsOptions);
    observer.observe(el);
});

// full page scroll
(function () {
    "use strict";

    let wrap = document.getElementById('site-main'),
        hold = false,
        activeSection = 0,
        touchStartY = 0;

    // offsets
    let length = sections.length,
        offsets = [];
    for (let i = 0; i < length; i++) {
        let sectionOffset = sections[i].offsetTop;
        offsets.push(sectionOffset);
    }

    // functions
    function moveDown() {
        activeSection = 0;
        scrollToSection(activeSection);
    }

    function moveUp() {
        activeSection = 1;
        scrollToSection(activeSection);
    }

    function scrollToSection(id) {
        if (hold) return false;
        activeSection = id;
        hold = true;
        let topPos = offsets[activeSection];
        window.scrollTo({
            top: topPos,
            behavior: 'smooth'
        })
        setTimeout(() => {
            hold = false;
        }, 400);
    }

    // pk
    function handleMouseWheel(e) {
        if (e.deltaY < 0 && !hold) {
            moveDown()
        }
        if (e.deltaY > 0 && !hold) {
            moveUp()
        }
        e.preventDefault();
        return false;
    }

    // mobile
    function touchStart(e) {
        e.preventDefault();
        touchStartY = e.touches[0].clientY;
    }

    function touchMove(e) {
        if (hold) return false;
        const currentY = e.touches[0].clientY;
        if (touchStartY < currentY) {
            moveDown();
        } else {
            moveUp();
        }
        touchStartY = 0;
        e.preventDefault();
        return false;
    }

    // click
    function burgerClick(e) {
        let burgerAnchor = burger.href.split("#")[1];
        document.getElementById(burgerAnchor).scrollIntoView({
            behavior: 'smooth'
        });
        e.preventDefault();
        return false;
    }

    // listeners
    wrap.addEventListener('wheel', handleMouseWheel);
    wrap.addEventListener('touchstart', touchStart);
    wrap.addEventListener('touchmove', touchMove);
    burger.addEventListener('click', burgerClick);

})();

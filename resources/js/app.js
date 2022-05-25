import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

const underlay = document.getElementById('browser-underlay');
const browser = document.getElementById('browser');
const browserContentBlock = document.getElementById('browser-content-block');
const content = document.getElementById('browser-content');
const bar = document.getElementById('browser-bar');
const maximizeButton = document.getElementById('browser-button-maximize');

const durationInMs = 500;
const transitionPropertiesZoom = 'top, left, height, width';

let clone;

function inPixels(value) {
    return `${value}px`;
}

function inRem(value) {
    const rem = parseFloat(window.getComputedStyle(document.documentElement).getPropertyValue('font-size'));
    return `${value/rem}rem`;
}

function enableTransition(properties){
    browser.style.transition = `none ${durationInMs}ms ease-in-out`;;
    browser.style.transitionProperty = properties;
}

maximizeButton.addEventListener('click', () => {
    if(!browser.classList.contains('browser-max')) {
        maximize();
    }

    if(browser.classList.contains('browser-max')) {
        minimize();
    }
 });

 underlay.addEventListener('click', minimize);

 function maximize(){
    // do nothing below md: breakpoint
    if(window.innerWidth < 768){
        return false;
    }

    // stop scrolling
    document.documentElement.classList.add('h-full', 'overflow-hidden');

    // measure inline browser
    const dimensions = browser.getBoundingClientRect();

    // create clone with equal height in rem, insert before browser
    clone = browser.cloneNode();
    clone.style.height = inRem(dimensions.height);
    browser.before(clone);

    // set browser explicit dimensions and fixed
    browser.style.top = inPixels(dimensions.top);
    browser.style.left = inPixels(dimensions.left);
    browser.style.width = inPixels(dimensions.width);
    browser.style.height = inRem(dimensions.height); // Using rem here for when browser is resized
    browser.style.position = 'fixed';

    // enable transition and zoom
    window.requestAnimationFrame(() => {
        enableTransition(transitionPropertiesZoom);
        browser.classList.add('browser-max');
    });

    // after transition…
    setTimeout(() => {
        // clean up style
        browser.removeAttribute('style');

        // show underlay
        underlay.classList.add('browser-underlay-visible');

    }, durationInMs);
}

 function minimize(){
     // measure clone in case window has been resized. Height still the same as before.
     const dimensions = clone.getBoundingClientRect();

     browser.style.top = inPixels(dimensions.top);
     browser.style.left = inPixels(dimensions.left);
     browser.style.width = inPixels(dimensions.width);
     browser.style.height = inPixels(dimensions.height);
     browser.style.position = 'fixed';

     // enable transition and zoom
     enableTransition(transitionPropertiesZoom);
     browser.classList.remove('browser-max');

     // after transition
     setTimeout(() => {
         // show underlay
         underlay.classList.remove('browser-underlay-visible');

         // remove clone
         clone.remove();

         // inline browser again
         browser.removeAttribute('style');

         // remember height to animate min/max-height from
         browser.style.minHeight = browser.style.maxHeight = inPixels(dimensions.height);

         // animate min/max height, in case browser content has become smaller/larger
         window.requestAnimationFrame(() => {
             enableTransition('minHeight, maxHeight');

             browser.style.minHeight = 0;
             browser.style.maxHeight = inPixels(content.scrollHeight + bar.getBoundingClientRect().height);

             // after transition…
             setTimeout(() => {
                 // clean up style
                 browser.removeAttribute('style');

                 // start scrolling
                 document.documentElement.classList.remove('h-full', 'overflow-hidden');
             }, durationInMs);
         });
     }, durationInMs);
 }

 document.addEventListener("DOMContentLoaded", function() {
    // allow everything to settle
    setTimeout(() => {
        const widget = document.getElementsByClassName('comments')[0];
        const height = widget.getBoundingClientRect().height || 0;
        if(height == 0){
            browserContentBlock.removeAttribute('style');
        }
    }, 1000);
});

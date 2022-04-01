import { gsap, Bounce } from "gsap";

console.log(gsap);

gsap.fromTo('#first-comment', {
    opacity: 0,
    y: '20px',
}, {
    opacity: 1,
    y: 0,
    onComplete: () => {
        typewriter1.type();
    }
})
let timelineSecondComment = gsap.fromTo('#second-comment', {
    opacity: 0,
    y: '20px',
}, {
    opacity: 1,
    y: 0,
    onComplete: () => {
        typewriter2.type();
    }
}).pause()

let timelineFirstReaction = gsap.fromTo('#first_reaction', {
    opacity: 0,
    scale: 0,
}, {
    opacity: 1,
    scale: 1,
    duration: 0.2,
    delay: 0.5,
    onComplete: () => {
        timelineSecondComment.play()
    }
}).pause();

let timelineSecondtReaction = gsap.fromTo('#second_reaction', {
    opacity: 0,
    scale: 0,
}, {
    opacity: 1,
    scale: 1,
    duration: 0.2,
    delay: 0.5,
}).pause();

window.addEventListener('first_typewriter_finished', () => {
    timelineFirstReaction.play();
});
window.addEventListener('second_typewriter_finished', () => {
    timelineSecondtReaction.play();
});

// TYPING

function setupTypewriter(t) {

    let event = new CustomEvent(`${t.id}_finished`);

    let HTML = t.innerHTML.replace(/&gt;/g, ">");

    t.innerHTML = "";

    var cursorPosition = 0,
        tag = "",
        writingTag = false,
        tagOpen = false,
        typeSpeed = 5,
        tempTypeSpeed = 0;

    var type = function () {


        if (writingTag === true) {
            tag += HTML[cursorPosition];
        }

        if (HTML[cursorPosition] === "<") {
            tempTypeSpeed = 0;
            if (tagOpen) {
                tagOpen = false;
                writingTag = true;
            } else {
                tag = "";
                tagOpen = true;
                writingTag = true;
                tag += HTML[cursorPosition];
            }
        }
        if (!writingTag && tagOpen) {
            tag.innerHTML += HTML[cursorPosition];
        }
        if (!writingTag && !tagOpen) {
            if (HTML[cursorPosition] === " ") {
                tempTypeSpeed = 0;
            }
            else {
                tempTypeSpeed = (Math.random() * typeSpeed) + 50;
            }
            t.innerHTML += HTML[cursorPosition];
        }
        if (writingTag === true && HTML[cursorPosition] === ">") {
            tempTypeSpeed = (Math.random() * typeSpeed) + 50;
            writingTag = false;
            if (tagOpen) {
                var newSpan = document.createElement("span");
                t.appendChild(newSpan);
                newSpan.innerHTML = tag;
                tag = newSpan.firstChild;
            }
        }

        cursorPosition += 1;
        if (cursorPosition < HTML.length - 1) {
            setTimeout(type, tempTypeSpeed);
        }
        else {
            // Remove caret
            t.classList.add('hideafter');
            window.dispatchEvent(event)
        }

    };

    return {
        type: type
    };
}

const typer1 = document.getElementById('first_typewriter');
const typer2 = document.getElementById('second_typewriter');

let typewriter1 = setupTypewriter(typer1);
let typewriter2 = setupTypewriter(typer2);

// FLOATING BUTTONS
const floatingButtons = document.querySelectorAll('.button-float');

for (button of floatingButtons){
    button.addEventListener('mousemove', (e) => {
        const bntBounds = e.target.getBoundingClientRect();

        let multiplier = {
            x: e.clientX - bntBounds.left - bntBounds.width/2,
            y: e.clientY - bntBounds.top - bntBounds.height/2,
        }
        


        e.target.style.transform =  `translate(${multiplier.x /6}px, ${multiplier.y /6}px) `

    })

    button.addEventListener('mouseout', (e) => {

        e.target.style.transform =  `translate(0px, 0px)`

    })
}




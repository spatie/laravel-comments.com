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
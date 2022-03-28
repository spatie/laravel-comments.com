import * as THREE from 'three';

import { gsap, Linear } from "gsap";

import { ScrollTrigger } from "gsap/ScrollTrigger";
import { OBJLoader } from 'three/examples/jsm/loaders/OBJLoader.js';
import { MTLLoader } from 'three/examples/jsm/loaders/MTLLoader.js';

const scene = new THREE.Scene();
const canvas = document.querySelector('#canvas3d');
let refWidth = document.querySelector('#header-wrapper').clientWidth + (3 * parseFloat(getComputedStyle(document.documentElement).fontSize));
const cameraYBasePos = 90;
const cameraYBottomPos = -1650;
let cameraScrollanimation;

const frustumSize = 350;
let aspect = window.innerHeight / refWidth;

const camera = new THREE.OrthographicCamera(frustumSize / - 2, frustumSize / 2, frustumSize * aspect / 2, frustumSize * aspect / - 2, 1, 1000);
camera.position.z = frustumSize * aspect / 2;
camera.position.y = (cameraYBasePos) + aspect * frustumSize /-2

const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
renderer.setClearColor('0xFFFFFF', 0);
renderer.setSize(refWidth, window.innerHeight);
renderer.setPixelRatio(window.devicePixelRatio)


window.addEventListener('resize', () => {
    refWidth = document.querySelector('#header-wrapper').clientWidth + (3 * parseFloat(getComputedStyle(document.documentElement).fontSize));
    renderer.setSize(refWidth, window.innerHeight);

    aspect = window.innerHeight / refWidth;
    

    camera.left = frustumSize / - 2;
    camera.right = frustumSize / 2;
    camera.top = frustumSize * aspect / 2;
    camera.bottom = - frustumSize * aspect / 2;
    camera.position.z = frustumSize * aspect / 2;
    
    camera.position.y = ( cameraYBasePos) + aspect * frustumSize /-2
    camera.updateProjectionMatrix();

    cameraScrollanimation.invalidate();


})

const light0 = new THREE.AmbientLight(0xffffff)
light0.position.set(0, 15, 15);
scene.add(light0);






let objectH, objectH2, objectH3, objectW, objectR, objectP, objectP2, objectP3, objectP4;

let promise1 = loadObjectWithMaterial('H').then(obj => { objectH = obj; });
let promise2 = loadObjectWithMaterial('W').then(obj => { objectW = obj; });
let promise3 = loadObjectWithMaterial('R').then(obj => { objectR = obj; });
let promise4 = loadObjectWithMaterial('P').then(obj => { objectP = obj; });
let promise5 = loadObjectWithMaterial('P').then(obj => { objectP2 = obj; });
let promise6 = loadObjectWithMaterial('H').then(obj => { objectH2 = obj; });
let promise7 = loadObjectWithMaterial('P').then(obj => { objectP3 = obj; });
let promise8 = loadObjectWithMaterial('P').then(obj => { objectP4 = obj; });
let promise9 = loadObjectWithMaterial('H').then(obj => { objectH3 = obj; });



const topGroup = new THREE.Group();

const render = function () {
    requestAnimationFrame(render);

    // objectH.rotation.y -= .01;
    // objectW.rotation.y -= .01;
    // objectP.rotation.y -= .01;
    // objectR.rotation.y -= .01;

    renderer.render(scene, camera);

}

Promise.all([promise1, promise2, promise6, promise7, promise5, promise3, promise4, promise8, promise9]).then(() => {


    //do something to the model
    objectW.position.x = 145;
    objectW.position.y = -455;
    objectW.rotation.x = 0.3;
    objectW.rotation.y = 2.1;



    objectH2.position.x = -145;
    objectH2.position.y = -295;
    objectH2.rotation.x = 0.3;
    objectH2.rotation.y = -.2;

    objectP3.position.x = 155;
    objectP3.position.y = -245;
    objectP3.rotation.x = 0.3;
    objectP3.rotation.y = .2;
    objectP3.scale.set(0.8, 0.8, 0.8);

    objectP4.position.x = -155;
    objectP4.position.y = -355;
    objectP4.rotation.x = 0.3;
    objectP4.rotation.y = -3.2;
    objectP4.scale.set(0.6, 0.6, 0.6);

    objectH3.position.x = -155;
    objectH3.position.y = -1355;
    objectH3.rotation.x = 0.3;
    objectH3.rotation.y = -3.2;

    objectH.position.x -= 0.5;
    objectP.position.x -= 35;
    objectP2.position.x += 35;
    //add model to the scene
    scene.add(objectW);
    scene.add(objectP3);
    scene.add(objectP4);
    scene.add(objectH3);
    scene.add(objectH2);

    topGroup.add(objectH);
    topGroup.add(objectP);
    topGroup.add(objectP2);

    topGroup.position.x = -115;
    topGroup.position.y = -90 
    //topGroup.rotation.z = THREE.MathUtils.degToRad(-1);

    scene.add(topGroup);

    //continue the process
    render();

    initGSAP();

    // Hide php hero image
    document.getElementById('php-hero-svg').style.display = "none";
});




function loadObjectWithMaterial(letter, callback) {
    return new Promise(callback => {
        new MTLLoader().load(`./3d-models/${letter}/${letter}.mtl`, materials => {
            materials.preload();
            let objLoader = new OBJLoader();
            objLoader.setMaterials(materials);
            objLoader.load(`./3d-models/${letter}/${letter}.obj`, object => {
                object.traverse(function (node) {
                    if (node.material) {
                        node.material.side = THREE.DoubleSide;
                    }
                });

                callback(object);

            })
        })
    })
}

function initGSAP() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to(objectW.position, {
        y: -460,
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: '#course_contents',
            start: 'top 80%',
            end: 'bottom 50%',
            scrub: true,
        }
    })
    gsap.to(objectW.rotation, {
        y: 2.4,

        scrollTrigger: {
            trigger: '#course_contents',
            start: 'top 80%',
            end: 'bottom 50%',
            scrub: true,

        }
    })



    gsap.to(objectH2.position, {
        y: -205,
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: '#cta',
            start: 'top 100%',
            end: 'bottom 0%',
            scrub: true,
        }
    })
    gsap.to(objectH2.rotation, {
        y: -.4,

        scrollTrigger: {
            trigger: '#cta',
            start: 'top 100%',
            end: 'bottom 0%',
            scrub: true,

        }
    })

    gsap.to(objectP3.position, {
        y: -205,
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: '#cta',
            start: 'top 100%',
            end: 'bottom 0%',
            scrub: true,
        }
    })
    gsap.to(objectP3.rotation, {
        y: -.4,

        scrollTrigger: {
            trigger: '#cta',
            start: 'top 100%',
            end: 'bottom 0%',
            scrub: true,

        }
    })

    gsap.to(objectP4.position, {
        y: -325,
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: '#cta',
            start: 'top 50%',
            end: 'bottom -50%',
            scrub: true,
        }
    })
    gsap.to(objectP4.rotation, {
        y: -2.4,

        scrollTrigger: {
            trigger: '#cta',
            start: 'top 100%',
            end: 'bottom 0%',
            scrub: true,

        }
    })

    gsap.to(objectH3.position, {
        y: -1305,
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: '#authors',
            start: 'top 150%',
            end: 'bottom 0%',
            scrub: true,
        }
    })
    gsap.to(objectH3.rotation, {
        y: -2.4,

        scrollTrigger: {
            trigger: '#authors',
            start: 'top 150%',
            end: 'bottom 0%',
            scrub: true,

        }
    })



    gsap.to(objectH.rotation, {
        y: -.5,

        scrollTrigger: {
            trigger: 'header',
            start: 'top top',
            end: 'bottom 0%',
            scrub: true,

        }
    })
    gsap.to(objectP.rotation, {
        y: 0.2,

        scrollTrigger: {
            trigger: 'header',
            start: 'top top',
            end: 'bottom 0%',
            scrub: true,

        }
    })
    gsap.to(objectP2.rotation, {
        y: .5,

        scrollTrigger: {
            trigger: 'header',
            start: 'top top',
            end: 'bottom 0%',
            scrub: true,

        }
    })


    // gsap.to(objectH.position, {
    //     y: (160 ),
    //     ease: Linear.easeNone,

    //     scrollTrigger: {
    //         trigger: 'header',
    //         start: 'top top',
    //         end: 'bottom 30%',
    //         scrub: true,

    //     }
    // })
    gsap.to(objectP.position, {
        y: 10,
        x: -45,
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: 'header',
            start: 'top top',
            end: 'bottom 40%',
            scrub: true,

        }
    })
    gsap.to(objectP2.position, {
        y: 10,
        x: 50,
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: 'header',
            start: 'top top',
            end: 'bottom 35%',
            scrub: true,

        }
    })

    gsap.to(topGroup.rotation, {
        x: -.5,
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: 'header',
            start: 'top top',
            end: 'bottom 35%',
            scrub: true,

        }
    })

    initCameraScrollAnim()
    
}

function initCameraScrollAnim(){
    cameraScrollanimation = gsap.to(camera.position,{
        y:  getCameraBottomPos(), //1480
        ease: Linear.easeNone,

        scrollTrigger: {
            trigger: 'body',
            start: 'top top',
            end: 'bottom bottom',
            scrub: true,

        }
    });
}



function getCameraBottomPos(){
    return (cameraYBottomPos) + aspect * frustumSize /-2
}




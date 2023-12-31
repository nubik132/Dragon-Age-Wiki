class Wiggle {
    doLowerHead() {
        document.getElementById("lower-head").style.animation =
            "dragon-wiggle-lower-head-anim 2s infinite alternate";
    }
    doUpperHead() {
        document.getElementById("upper-head").style.animation =
            "dragon-wiggle-upper-head-anim 2s infinite alternate";
    }
    doBody() {
        body.style.animation =
            "dragon-wiggle-body-anim 2s infinite alternate";
    }
    doNeck() {
        neck.style.animation =
            "dragon-wiggle-neck-anim 2s infinite alternate";
    }
    doUpperArm() {
        document.getElementById("upper-arm").style.animation =
            "dragon-wiggle-upper-arm-anim 2s infinite alternate .5s";
    }
    doLowerArm() {
        document.getElementById("lower-arm").style.animation =
            "dragon-wiggle-lower-arm-anim 2s infinite alternate";
    }
}

class Fire {
    doLowerHead() {
        document.getElementById("lower-head").style.animation =
            "dragon-open-lower-head .5s 2 alternate";
    }
    doUpperHead() {
        document.getElementById("upper-head").style.animation =
            "dragon-open-upper-head .5s 2 alternate";
    }
    doBody() {
        body.style.animation =
            "dragon-wiggle-body-anim 2s infinite alternate";
    }
    doNeck() {
        neck.style.animation =
            "dragon-cran-neck .5s 2 alternate";
    }
    doUpperArm() {
        document.getElementById("upper-arm").style.animationDuration = '.3s';
    }
    doLowerArm() {
        document.getElementById("lower-arm").style.animationDuration = '.3s';

    }
    doFire() {
        let dragon = document.getElementById("dragon");
        let fire = document.createElement('img');
        fire.src = "/src/img/header/dragon/fire.gif";
        fire.alt = "fire";
        fire.classList.add("fire");
        fire.id = "fire";
        dragon.appendChild(fire);
        setTimeout(() => { dragon.removeChild(fire); }, 720);
    }
}

class Facade {
    constructor() {
        this.wiggle = new Wiggle();
        this.fire = new Fire()
    }

    doWiggle() {
        this.wiggle.doBody();
        this.wiggle.doLowerArm();
        this.wiggle.doUpperArm();
        this.wiggle.doUpperHead();
        this.wiggle.doLowerHead();
        this.wiggle.doNeck();
    }

    doFire() {
        this.fire.doBody();
        this.fire.doLowerArm();
        this.fire.doUpperArm();
        this.fire.doUpperHead();
        this.fire.doLowerHead();
        this.fire.doNeck();
        this.fire.doFire();
        setTimeout(this.doWiggle.bind(this), 1000);
    }
}
let facade = new Facade();

function start() {
    facade.doWiggle();
}

function fire() {
    facade.doFire();
}

start();
document.querySelector("#dragon").addEventListener('mouseenter', (event) => { if (event.target.id == "dragon") facade.doFire(); });

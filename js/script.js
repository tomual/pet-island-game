var head = null;
var arm1 = null;
var arm2 = null;
var body = null;
var leg1 = null;
var leg2 = null;

var leftBound = 40;
var rightBound = 608;
var topBound = 70;
var bottomBound = 320;

function breathe() {
    head = anime({
        targets: '#layer11',
        translateY: 3,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine',
        duration: 1000,
        delay: 300
    });
    arm1 = anime({
        targets: '#layer4',
        translateY: 2,
        translateX: -2,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine',
        duration: 1000,
        delay: 300
    });
    arm2 = anime({
        targets: '#layer5',
        translateY: 2,
        translateX: -2,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine',
        duration: 1000,
        delay: 300
    });
    body = anime({
        targets: '#layer9',
        translateY: 1,
        translateX: -1,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine',
        duration: 1000,
        delay: 300
    });
    if (leg1) { leg1.pause(); }
    if (leg2) { leg2.pause(); }
}

function walk(x, y) {

    if(getRandomInt(1)) {
        x = x * -1;
    }
    if(getRandomInt(1)) {
        y = y * -1;
    }

    var originX = parseInt($('#pet').css('left'));
    var originY = parseInt($('#pet').css('top'));

    var currentX = $('#pet').position().left - originX;
    var currentY = $('#pet').position().top - originY;

    var destinationX = currentX + x;
    var destinationY = currentY + y;

    console.log(x);
    console.log(y);

    var distance = Math.sqrt( x*x + y*y );
    var duration = distance * 20;

    if(
        destinationX < (leftBound - originX) || 
        destinationX > (rightBound - originX) || 
        destinationY < (topBound - originY) || 
        destinationY > (bottomBound - originY) ) { 
        destinationX = currentX;
        destinationY = currentY;
        duration = 0;
    }


    if(currentX > destinationX) {
        faceDirection = -1;
    } else {
        faceDirection = 1;
    }
    

    pet = anime({
        targets: '#pet',
        translateX: destinationX,
        translateY: destinationY,
        scaleX: {
          value: faceDirection,
          duration: 0
        },
        duration: duration,
        easing: 'linear',
        complete: function() {
            updateZ();
            breathe();
        }
    });

    arm1 = anime.timeline({
        targets: '#layer4',
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true
    });
    arm1
    .add({
        rotate: 15,
    })
    .add({
        rotate: -20,
    });

    arm2 = anime.timeline({
        targets: '#layer5',
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true
    });
    arm2
    .add({
        rotate: -15,
    })
    .add({
        rotate: 20,
    });

    leg1 = anime.timeline({
        targets: '#layer6',
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true
    });
    leg1
    .add({
        rotate: -10,
    })
    .add({
        rotate: 10,
    });

    leg2 = anime.timeline({
        targets: '#layer7',
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true
    });
    leg2
    .add({
        rotate: 10,
    })
    .add({
        rotate: -10,
    });
    head.pause();
}

$(document).ready(function() {
    blink();
    breathe();
    move();
});

function blink() {
    $('[inkscape\\:label=face]').css('display', 'none');
    $('[inkscape\\:label=face-blink]').css('display', 'block');
    window.setTimeout(function() {
        $('[inkscape\\:label=face]').css('display', 'inline');
        $('[inkscape\\:label=face-blink]').css('display', 'none');
        window.setTimeout(function() {
            blink()
        }, getRandomInt(7) * 1000)
    }, 50);
}

function move() {
    window.setTimeout(function() {
        walk(getRandomInt(80, 150), getRandomInt(80, 150));
        move();
    }, getRandomInt(6, 6) * 1000)
}

function getRandomInt(min, max) {
    if(!max) {
        max = min;
        min = 0;
    }
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function updateZ() {
    $('#pet')
}
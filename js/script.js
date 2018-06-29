var head = null;
var arm1 = null;
var arm2 = null;
var body = null;
var leg1 = null;
var leg2 = null;

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

function walk() {
    arm1 = anime.timeline({
        targets: '#layer4',
        easing: 'easeInOutSine',
        direction: 'alternate',
        duration: 800,
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
        duration: 800,
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
});

function blink() {
    console.log($('[inkscape\\:label=face]').css('display'));
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

function move(top, left) {
    walk();
    $('.pet').css('top', top);
    $('.pet').css('left', left);
    setTimeout(function() {
        breathe();
    }, 4000);
}

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}
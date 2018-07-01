var head = null;
var arm1 = null;
var arm2 = null;
var body = null;
var leg1 = null;
var leg2 = null;

function animeBreathe() {
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
    if (head) {
        head.play();
    }
    if (leg1) {
        leg1.pause();
    }
    if (leg2) {
        leg2.pause();
    }
}

function animeWalk() {
    arm1 = anime.timeline({
        targets: '#layer4',
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true
    });
    arm1.add({
        rotate: 15,
    }).add({
        rotate: -20,
    });
    arm2 = anime.timeline({
        targets: '#layer5',
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true
    });
    arm2.add({
        rotate: -15,
    }).add({
        rotate: 20,
    });
    leg1 = anime.timeline({
        targets: '#layer6',
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true
    });
    leg1.add({
        rotate: -10,
    }).add({
        rotate: 10,
    });
    leg2 = anime.timeline({
        targets: '#layer7',
        easing: 'easeInOutSine',
        direction: 'alternate',
        loop: true
    });
    leg2.add({
        rotate: 10,
    }).add({
        rotate: -10,
    });
    if (head) {
        head.pause();
    }
    if (leg1) {
        leg1.play();
    }
    if (leg2) {
        leg2.play();
    }
}
$(document).ready(function() {
    blink();
    animate();
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

function walk(ms) {
    var leftPixels = parseInt($('#pet').css('margin-left'));
    if(checkBounds(leftPixels)) {
        animeWalk();
        var leftPercent = leftPixels / $(window).width() * 100;
        console.log($('#pet').css('margin-left'));
        $('#pet').css('margin-left', leftPercent + 5 + '%');
    }
    return new Promise(resolve => setTimeout(resolve, ms));
}

function breathe(ms) {
    animeBreathe();
    return new Promise(resolve => setTimeout(resolve, ms));
}
async function animate() {
    await walk(2000);
    await breathe(2000);
    window.setTimeout(function() {
        animate();
    }, 1000)
}

function getRandomInt(min, max) {
    if (!max) {
        max = min;
        min = 0;
    }
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

$(window).resize(function() {
    if ($(window).width() < 768) {
        var width = $(window).width() * 0.33;
        var scale = width / 250; 
        $('#pet svg').css('transform', 'scale(' + scale + ')');
    }
});

function checkBounds(x) {
    return x < ($(window).width() / 2);
}
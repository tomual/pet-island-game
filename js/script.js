var head = anime({
    targets: '#layer11',
    translateY: 3,
    direction: 'alternate',
    loop: true,
    easing: 'easeInOutSine',
    duration: 1000,
    delay: 300
});
var arm1 = anime({
    targets: '#layer4',
    translateY: 2,
    translateX: -2,
    direction: 'alternate',
    loop: true,
    easing: 'easeInOutSine',
    duration: 1000,
    delay: 300
});
var arm2 = anime({
    targets: '#layer5',
    translateY: 2,
    translateX: -2,
    direction: 'alternate',
    loop: true,
    easing: 'easeInOutSine',
    duration: 1000,
    delay: 300
});
var body = anime({
    targets: '#layer9',
    translateY: 1,
    translateX: -1,
    direction: 'alternate',
    loop: true,
    easing: 'easeInOutSine',
    duration: 1000,
    delay: 300
});
$(document).ready(function() {
    blink();
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

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}
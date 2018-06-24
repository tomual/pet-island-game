var headMovePixels = 0;
var headRotatePixels = 0;
var bodyMovePixels = 0;
var armMovePixels = 0;
var armRotatePixels = 0;
$(document).ready(function() {
    breathe();
    blink();
});

function breathe() {
    headMovePixels = headMovePixels ? 0 : 3;
    bodyMovePixels = bodyMovePixels ? 0 : -2;
    armMovePixels = armMovePixels ? 0 : -2;
    armRotatePixels = armRotatePixels ? 0 : 0.5;
    headRotatePixels = headRotatePixels ? 0 : 0.5;
    $('[inkscape\\:label=body]').css('top', bodyMovePixels);
    $('[inkscape\\:label=top]').css('top', headMovePixels);
    $('[inkscape\\:label=top]').css('transform', 'rotate(' + headRotatePixels + 'deg)');
    $('[inkscape\\:label=arm1]').css('top', armMovePixels);
    $('[inkscape\\:label=arm1]').css('transform', 'rotate(' + armRotatePixels + 'deg)');
    $('[inkscape\\:label=arm2]').css('top', armMovePixels);
    $('[inkscape\\:label=arm2]').css('transform', 'rotate(' + armRotatePixels + 'deg)');
    window.setTimeout(function() {
        breathe()
    }, 1200)
}

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
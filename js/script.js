$(document).ready(function () {
    $(window).on('mousemove', function (e) {
        var lSide = $(this).height() / 2;
        var cursorImg = e.pageX < lSide ? 'cursorU' : 'cursorB';
        $('body').css({
            "cursor": "url('assets/" + cursorImg + ".png'), auto"
        });
        console.log(cursorImg) // Just to see check it ;)
    });
});
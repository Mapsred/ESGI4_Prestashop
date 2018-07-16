$(document).ready(function () {
    if ($('#block-comments').attr('data-scroll') === 'true') {
        $('html, body').animate({
            scrollTop: $('#block-comments').offset().top
        }, 1200);
    }
});
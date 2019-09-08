// CSRF
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Preloader JS 
$(window).on('load', function() {
function Preloader() {
    var loader = $ ('.unn-image');
    loader.delay(500) .fadeOut (500);
    var preloader = $('.preloader');
    preloader.delay (1500) .slideUp(500);
}
Preloader();
});

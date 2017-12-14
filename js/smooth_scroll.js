$(document).on('click', 'a.scroll', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop : $( $.attr(this, 'href') ).offset().top - 250
    }, 500);
});
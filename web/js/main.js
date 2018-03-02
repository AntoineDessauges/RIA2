$( document ).ready(function() {
    
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).data('number')
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

});
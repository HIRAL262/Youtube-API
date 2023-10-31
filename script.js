
$(document).ready(function() {
    $('.btn-primary').click(function() {
        //  alert("jQuery is working perfectly.");
        $('.comments').toggleClass('details-visible');
    });
    $('.btn-winner').click(function() {
        $(".btn-winner").css('background', '#d31c92');
        $(".btn-winner").css('color', 'white');

        // alert("jQuery is working perfectly.");
        $('.winner').toggleClass('winner-visible');
    });

});

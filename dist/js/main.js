$(document).ready(function() {
    $('#testButton').on('click', function() {
        $('.alert').text('Success! The entire setup is working correctly.').removeClass('alert-info').addClass('alert-success');
    });
});
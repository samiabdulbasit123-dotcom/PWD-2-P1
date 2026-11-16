$(document).ready(function () {
    $('#showCheckbox').on('change', function () {

        if ($(this).is(':checked')) {
            $('#inputPassword').attr('type', 'text');
        } else {
            $('#inputPassword').attr('type', 'password');
        }
    });
});
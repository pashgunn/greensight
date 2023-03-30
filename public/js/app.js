$(document).ready(function() {
    $('#register-form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: '/register',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success: function() {
                $('#success-message').show();
                $('#register-form').hide();
            },
            error: function(response) {
                $('#error-list').empty();
                $.each(response.responseJSON.errors, function(key, value) {
                    $('#error-list').append('<li>' + value + '</li>');
                });
                $('#error-messages').show();
            }
        });
    });
});

$($(document).ready(function () {
    $('#register-form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: '{{ route("register.store") }}',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.status == 'success') {
                    $('#register-form').hide();
                    $('#message').html('<p>Registration successful.</p>');
                } else {
                    $('#message').html('<p>' + response.message + '</p>');
                }
            },
            error: function() {
                $('#message').html('<p>Error processing request.</p>');
            }
        });
    });
}));

// // registration.js
// $(document).ready(function() {
//     $('#registration-form').on('submit', function(event) {
//         event.preventDefault(); // prevent form from submitting normally
//
//         $.ajax({
//             url: '/register',
//             type: 'POST',
//             data: $(this).serialize(), // serialize form data
//             dataType: 'json', // expected data type from server
//             success: function(response) {
//                 $('#registration-form').hide(); // hide the form on successful registration
//                 $('#registration-message').text(response.message); // display success message
//             },
//             error: function(response) {
//                 if (response.status === 422) { // validation failed
//                     var errors = response.responseJSON.errors;
//                     var errorHtml = '<ul>';
//                     $.each(errors, function(key, value) {
//                         errorHtml += '<li>' + value[0] + '</li>'; // display the first error message for each field
//                     });
//                     errorHtml += '</ul>';
//                     $('#registration-message').html(errorHtml); // display validation errors
//                 }
//             }
//         });
//     });
// });

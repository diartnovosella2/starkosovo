jQuery(document).ready(function($) {
    $('#post-subscriber').on('submit', function(e) {
        $.ajax({
            type: "GET",
            url: script_object.ajax_url,
            dataType: 'json',
            data: {
                'action'        : 'populate_subscriber_field',
                'email'         : $('#email').val(),
            },
            success: function(response) {
                $('.form__submit').hide();
                $('.form__success__title').slideDown();
                $('.trigger').addClass('drawn');
            }
        });
        e.preventDefault();
    });
});
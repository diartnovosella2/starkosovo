jQuery(document).ready(function($) {
    $('#post-register').on('submit', function(e) {
        $.ajax({
            type: "GET",
            url: script_object.ajax_url,
            dataType: 'json',
            data: {
                'action'        : 'populate_register_fields',
                'firstName'     : $('#firstName').val(),
                'lastName'      : $('#lastName').val(),
                'dateOfBirth'   : $('#dateOfBirth').val(),
                'phoneNumber'   : $('#phoneNumber').val(),
                'email'         : $('#email').val(),
                'university'    : $('#university').children("option:selected").val(),
                'department'    : $('#department').val(),
                'yearOfUni'     : $('#yearOfUni').children("option:selected").val(),
                'yearOfStudies' : $('#yearOfStudies').children("option:selected").val(),
                'numberOfExams' : $('#numberOfExams').children("option:selected").val(),
                'englishLevel'  : $('#englishLevel').children("option:selected").val(),
                'avgGrade'      : $('#avgGrade').val(),
                'father_work'   : $("input[name='fatherWork']:checked").val(),
                'mother_work'   : $("input[name='motherWork']:checked").val(),
                'starWorkInfo'  : $('#starWorkInfo').children("option:selected").val(),
                'siteTitle'     : $('#siteTitle').val(),
                'siteUrl'       : $('#siteUrl').val(),
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
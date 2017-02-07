$(function() {


    var myModal = $('#phoneModal-1');

    $("#phoneForm input,#phoneForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("#phoneForm input#name").val();
            var email = 'test@gmail.com';
            var phone = $("#phoneForm input#phone").val();
            var message = "Тест";
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "././mail/mail.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {

                    $('.modal-main').addClass('hidden');
                    $('.modal-success').removeClass('hidden');


                    clearTimeout(myModal.data('hideInterval'));
                    myModal.data('hideInterval', setTimeout(function(){
                        myModal.modal('hide');
                    }, 2000));

                    //clear all fields
                    $('#phoneForm').trigger("reset");
                },
                error: function() {


                  

                    // Fail message
                    $('#success2').html("<div class='alert alert-danger'>");
                    $('#success2 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success2 > .alert-danger').append("<strong>Помилка.Спробуйте ще.");
                    $('#success2 > .alert-danger').append('</div>');





                           


                    // //clear all fields
                    $('#phoneForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });



    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

$('#phoneModal-1').on('hidden.bs.modal', function () {

   
    $('.modal-main').removeClass('hidden');
    $('.modal-success').addClass('hidden');
});
//
//
// /*When clicking on Full hide fail/success boxes */
// $('#name').focus(function() {
//     $('#success').html('');
// });

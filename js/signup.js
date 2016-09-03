// Contact Form Scripts

$(function() {

    $("#contactForm input, #contactForm textarea").jqBootstrapValidation({
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var dirid = $("#dirid").val();

            $.ajax({
                url: "../aviditif/mail/signup.inc.php",
                type: "POST",
                data: {
                    firstname: firstname,
                    lastname: lastname,
                    username: username,
                    email: email,
                    password: password,
                    dirid: dirid,
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your account has been created! Welcome to the world of visualization. Please <a href='signin.php'>SIGN IN</a> to continue.</strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstname + ", it seems that my server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
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


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});

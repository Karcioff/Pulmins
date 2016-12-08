$.validator.setDefaults({
    errorClass: 'invalid',
    validClass: "valid",
});

$().ready(function () {
    $("#form").validate({
        rules: {
            username_reg: {
                required: true,
                minlength: 5
            },
            mail_reg: {
                required: true,
                email: true
            },
            password_reg: {
                required: true,
                minlength: 5
            },
            conferma_psw: {
                required: true,
                minlength: 5,
                equalTo: "#password_reg"
            }
        },
        //For custom messages
        messages: {
            username_reg: {
                required: "",
                minlength: ""
            },
            mail_reg: {
                required: "",
                email: ""
            },
            password_reg: {
                required: "",
                minlength: ""
            },
            conferma_psw: {
                required: "",
                minlength: "",
                equalTo: ""
            }
        }
    });
});



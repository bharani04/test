$(function() {
        $("form[name='information']").validate({
            rules: {
                name: "required",

                mail: {
                required: true,
                mail: true,
                },
                mobile: {
                    required: true,
                    minlength: 10,
                },
                gender:"required",
                place: { 
                    required: true,
                },
                
            },
            messages: {
                name: "Please enter your name",
                email: "Please enter a valid email address",
                mobile: {
                    required:"Enter valid number",
                    minlength: "Your number must be 10 digit"
                },
                gender: "Please enter your gender",
                place: "Please enter your state",
            },
            submitHandler: function(form) {
            form.submit();
            }
        });
});

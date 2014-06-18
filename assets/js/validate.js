$(function() {
     jQuery.validator.addMethod("noSpace", function(value, element) { 
     return value.indexOf(" ") < 0 && value != ""; 
  }, "Space are not allowed");
     $.validator.addMethod("loginRegex", function(value, element) {
        return this.optional(element) || /^[a-z\-\s_.]+$/i.test(value);
    }, "Username must contain only letters, period, hyphen or underscore.");

     

	$("#regform").validate({		
		 rules: {
            firstname: {                
                required: true,
                maxlength: 50
            },

            middlename: {
            	required: true,
                maxlength: 50
            },

            lastname: {
                required: true,
                maxlength: 50
            },

            email: {
				required: true,
				email: true,
                maxlength: 50
                
			},

            username: {
                required: true,
                maxlength: 50,
                noSpace: true,
                loginRegex: true,
            },

            password: {
                required: true,
                maxlength: 12,
                noSpace: true,
                minlength: 6
            },

            confirm_password: {
                required: true,
                maxlength: 12,
                noSpace: true,
                minlength: 6,
                equalTo: "#password"
            },


        }

	});

    $('#loginForm').validate({
        rules: {
            password: {
                required: true
            },

            username: {
                required: true
            }
        }
    });

    $("#username").focus(function() {
        var firstname = $("#firstname").val().toLowerCase();
        var lastname = $("#lastname").val().toLowerCase();
        if(firstname && lastname && !this.value) {
            this.value = firstname + "." + lastname;
        }
    });

  $("#job_fields").select2({
    data:[
        {id:'AF',text:"Marketing"},
        {id:'AF',text:"Information Technology"}

    ],
    width: "280px"
});
});
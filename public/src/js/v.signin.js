/* 		// Wait for the DOM to be ready
		$(function() {
		  // Initialize form validation on the registration form.
		  // It has the name attribute "registration"
		  $("form[name='signin']").validate({
			// Specify validation rules
			rules:
			{
			  // The key name on the left side is the name attribute
			  // of an input field. Validation rules are defined
			  // on the right side
				emailid:
				{
					required:true,
					email:true
				},
				password:
				{
					password:true,
					minlength:6
				}
			},
			// Specify validation error messages
			messages: 
			{
				emailid:
				{
					required:"Email Id Is Required",
					email:"Please Enter Your Correct Email"
				},
				password:
				{
					password:"Password Is Required",
					minlength:"Please Enter Your Correct Password"
				}
			},
			// Make sure the form is submitted to the destination defined
			// in the "action" attribute of the form when valid
			submitHandler: function(form) {
			  form.submit();
			}
		  });
		}); */
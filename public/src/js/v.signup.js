 		// Wait for the DOM to be ready
		$(function() {
		  // Initialize form validation on the registration form.
		  // It has the name attribute "registration"
		  $("form[name='signup']").validate({
			// Specify validation rules
			rules:
			{
			  // The key name on the left side is the name attribute
			  // of an input field. Validation rules are defined
			  // on the right side
				full_name:
				{
					required:true,
					minlength:3
				},
				user_name:
				{
					required:true,
					minlength:6,
					nowhitespace:true
				},
				uemail:
				{
					required:true,
					email:true
				},
				user_pass1:
				{
					required:true,
					minlength:5
				},
				user_pass2:
				{
					required:true,
					minlength:5/* ,
					equalTo:'#pass1' */
				}
			},
			// Specify validation error messages
			messages: 
			{
				full_name:
				{
					required:"Name Is Required",
					minlength:"Minimum 3 Charectors Are Important"
				},
				user_name:
				{
					required:"Username Is Required",
					minlength:"Minimum 6 Letters Is Important",
					nowhitespace:"Please Don't Use Space"
				},
				uemail:
				{
					required:"Email Is Required",
					email:"Please Enter Your Correct EmailID"
				},
				user_pass1:
				{
					required:"Password Is Required",
					minlength:"Minimum 5 Text Is Important"
				},
				user_pass2:
				{
					required:"Password Is Required",
					minlength:"Minimum 5 Text Is Important"/* ,
					equalTo:"Password Shoulb Be Same" */
				}
			},
			// Make sure the form is submitted to the destination defined
			// in the "action" attribute of the form when valid
			submitHandler: function(form) {
			  form.submit();
			}
		  });
		}); 
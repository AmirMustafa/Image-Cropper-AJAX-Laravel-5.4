 		// Wait for the DOM to be ready
		$(function() {
		  // Initialize form validation on the registration form.
		  // It has the name attribute "registration"
		  $("form[name='p_camp_5']").validate({
			// Specify validation rules
			rules:
			{
			  // The key name on the left side is the name attribute
			  // of an input field. Validation rules are defined
			  // on the right side
				c_dur:
				{
					max:90,
					min:30
				}
			},
			// Specify validation error messages
			messages: 
			{
				c_dur:
				{
					max:"Value should be within 30-90 only",
					min:"Value should be within 30-90 only"
				}
			},
			// Make sure the form is submitted to the destination defined
			// in the "action" attribute of the form when valid
			submitHandler: function(form) {
			  form.submit();
			}
		  });
		}); 
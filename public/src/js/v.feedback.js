		// Wait for the DOM to be ready
		$(function() {
		  // Initialize form validation on the registration form.
		  // It has the name attribute "registration"
		  $("form[name='feedback']").validate({
			// Specify validation rules
			rules:
			{
			  // The key name on the left side is the name attribute
			  // of an input field. Validation rules are defined
			  // on the right side
				webname:
				{
					required:true,
					minlength:3
				},
				webemail:
				{
					required:true,
					email:true
				},
				fback:
				{
					maxWords:150
				}
				


			},
			// Specify validation error messages
			messages: 
			{

			},
			// Make sure the form is submitted to the destination defined
			// in the "action" attribute of the form when valid
			submitHandler: function(form) {
			  form.submit();
			}
		  });
		});
/* $(document).ready(function(){

	$("#hidepart") .hide();
	$("#other h3").mouseenter(function(){
		$(this).next().slideToggle(300);
	});

}); */
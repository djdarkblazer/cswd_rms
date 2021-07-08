$(function(){	
	$('#user_validation').validate({
		rules: {
			lastname: {
				required: true
			},
			firstname: {
				required: true
			},
			middlename: {
				required: true
			},						
			username: {
				required: true
			},
			email: {
				require: true,
				email: true
			}      
			password: {
				required: true,
				minlength: 6,
				maxlength: 20
			}
		},
		messages: {
			lastname: {
				required: "Please enter your Lastname"
			},			
			firstname: {
				required: "Please enter your Firstname"
			},
			middlename: {
				required: "Please enter your Middlename"
			},
			username: {
				required: "Please enter your Username"
			},
			email: {
				required: "Please enter your Email",
				email: "Provide a Valid Email Address"
			}
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				maxlength: "Your password must be at max of 20 characters only."
			},
		},
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}    	            
	});	
});
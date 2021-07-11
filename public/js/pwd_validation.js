$(document).ready(function(){

$(function(){	
	$('#sp_validate').validate({
		rules: {
			sp_lastname: {required: true},
			sp_firstname: {required: true},
			sp_middlename: {required: true},
			sp_sex: {required: true},
			sp_dob: {required: true},
			sp_pob: {required: true},
			sp_address: {required: true},
			sp_brgy: {required: true},
			sp_email: {required: true, email: true},
			sp_mobilenum: {required: true, digits: true},
			sp_educational: {required: true},
			sp_occupation: {required: true},
			sp_monthlyincome: {required: true},
			sp_curr_status: {required: true},
			sp_signature: {required: true},

		},
		messages: {
			sp_lastname: {required: "Please enter your Last Name"},
			sp_firstname: {required: "Please enter your First Name"},
			sp_middlename: {required: "Please enter your Middle Name"},
			sp_sex: {required: "Specify your Sex"},
			sp_dob: {required: "Date of Birth is Required"},
			sp_pob: {required: "Place of Birth is Required"},
			sp_address: {required: "Specify your Street/Number"},
			sp_brgy: {required: "Specify your Barangay"},
			sp_email: {required: "Please enter your Email", email: "@ for Valid Email is Required"},
			sp_mobilenum: {required: "Specify your Mobile Number", digits: "This Field Accepting Only Digits"},
			sp_educational: {required: "Education Attainment is Required"},
			sp_occupation: {required: "Occupation is Required"},
			sp_monthlyincome: {required: "Specify  your Estimated Monthly Income"},
			sp_curr_status: {required: "Determined your Current Status"},
			sp_signature: {required: "Signature is Required"},						
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

});
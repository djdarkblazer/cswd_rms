$(document).ready(function(){

$(function(){	
	$('#pwd_validate').validate({
		rules: {
			pwd_lname: {required: true},
			pwd_fname: {required: true},
			pwd_mname: {required: true},
			pwd_sex: {required: true},
			pwd_typedis: {required: true},
			pwd_causedis: {required: true},
			pwd_address: {required: true},
			pwd_brgy: {required: true},
			pwd_landline: {required: true, digits: true},
			pwd_mobilenum: {required: true, digits: true},
			pwd_email: {required: true,email: true},
			pwd_dob: {required: true},
			pwd_civilstatus: {required: true},
			pwd_educational: {required: true},
			pwd_empstatus: {required: true},
			pwd_empnature: {required: true},
			pwd_emptype: {required: true},
			pwd_occupation: {required: true},
			pwd_cperson: {required: true},
			pwd_cnumber: {required: true, digits: true},
			pwd_idnum: {required: true},
			pwd_signature: {required: true},

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
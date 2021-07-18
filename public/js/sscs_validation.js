$(document).ready(function(){

$(function(){	
	$('#sscs_validate').validate({
		rules: {
			cs_lname: {required: true},
			cs_fname: {required: true},
			cs_mname: {required: true},
			cs_sex: {required: true},
			cs_dob: {required: true},
			cs_pob: {required: true},
			cs_estimatedincome: {required: true},
			cs_occupation: {required: true},
			cs_signature: {required: true},
			cs_address: {required: true},
			cs_requestname: {required: true},
			cs_brgy: {required: true},
			cs_mobilenum: {required: true, digits: true},
			cs_email: {required: true,email: true},						

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
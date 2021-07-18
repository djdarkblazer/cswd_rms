$(document).ready(function(){

$(function(){	
	$('#pmc_validate').validate({
		rules: {
			pmc_lname: {required: true},
			pmc_fname: {required: true},
			pmc_mname: {required: true},
			pmc_sex: {required: true},
			pmc_dob: {required: true},
			pmc_pob: {required: true},
			pmc_estimatedincome: {required: true},
			pmc_occupation: {required: true},
			pmcg_lname: {required: true},
			pmcg_fname: {required: true},
			pmcg_mname: {required: true},
			pmcg_sex: {required: true},
			pmcg_dob: {required: true},
			pmcg_pob: {required: true},
			pmcg_estimatedincome: {required: true},
			pmcg_occupation: {required: true},			
			pmcb_signature: {required: true},
			pmcg_signature: {required: true},
			pmc_address: {required: true},
			pmc_brgy: {required: true},
			pmc_mobilenum: {required: true, digits: true},
			pmc_email: {required: true,email: true},						

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
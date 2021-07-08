$(document).ready(function(){

	$('.delete_checkbox').click(function(){
		if ($(this).is(':checked')) {
			$(this).closest('tr').addClass('removeRow');
		} else {
			$(this).closest('tr').removeClass('removeRow');
		}
	});

	$('#delete_all').click(function(){

		var checkbox = $('.delete_checkbox:checked');

		if (checkbox.length > 0) {
			var checkbox_value = [];

			$(checkbox).each(function(){
				checkbox_value.push($(this).val());
			});
			$.ajax({
				url: "<?= site_url();?>admin/del_multiuser",
				method: "POST",
				data: {checkbox_value:checkbox_value},
				success:function()
				{
					$('removeRow').fadeOut(1500);
				}
			}) 
		} else {
			alert('Select atleast one Record');
		}
	});
});
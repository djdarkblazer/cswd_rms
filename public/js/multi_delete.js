$(document).ready(function(){	
	$('#del_data').click(function(){
		if(confirm("Are you sure you want to Delete This?")){
			var id = [];
			$(':checkbox:checked').each(function(i){
				id[i] = $(this).val();
			});

			if(id.length === 0){
				alert("Please Select Atleast One Checkbox");
			} else {
				$.ajax({
					url: "<?=site_url('admin/sp_delrecords')?>",
					method: "POST",
					data: {sp_id:id},
					success:function(){
						for(var i=0; i<id,length; i++){
							$('td#' +id[i]+'').css('background-color','#ccc');
							$('tr#' _id[i]+'').fadeOut('slow');

						}
					}
				});
			}

		} else {
			return false;
		}
	});
});
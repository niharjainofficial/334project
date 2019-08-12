$(document).ready(function(){

	$('.delete_record').click(function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var action = $(this).data('action');
		var row = $(this).closest('tr');
		swal({
		  title: "Are you sure?",
		  text: "Once deleted, you will not be able to recover this!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		    	$.ajax({
				   url: './db/delete_records.php',
				   data: 'id=' + id + '&action=' + action,
				   error: function() {
				      $('#info').html('<p>An error has occurred</p>');
				   },
				   success: function(data) {
				      $.notify("Record deleted successfully.", "success");
				   		row.remove();
				   },
				   type: 'GET'
				});
		  } 
		});
	});
    
    $('.edit_record').click(function(e){
		e.preventDefault();
		
		var id = $(this).data('id');
		var action = $(this).data('action');

    	$.ajax({
		   url: './db/get_records.php',
		   data: 'id=' + id + '&action=' + action,
		   error: function() {
		      $('#info').html('<p>An error has occurred</p>');
		   },
		   success: function(data) {
		   	  $('#edit_modal_body').html(data);
		      $('#edit_record_modal').modal('show');
		   },
		   type: 'GET'
		});
	});
});
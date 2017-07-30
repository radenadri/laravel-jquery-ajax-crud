$(document).ready(function() {
	$('.edit-modal').click(function() {
		$('#state-id').val($(this).data('id'));
		$('#state-name').val($(this).data('name'));
		$('#modal-edit').modal('show');
	});

	$('.delete-modal').click(function() {
		$('#del-id').html($(this).data('delete-id'));
		$('#modal-delete').modal('show');
	});

	$('.save').click(function() {
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('#token').attr('content')
		    },
			url: '/api/states/store',
			type: 'POST',
			data: {
				'name': $('#new-state').val()
			},
			success: function(result) {
				$('#new-row').append(  
					`<tr class="state${result.id}"> \
						<td></td> \
	                    <td>${result.name}</td> \
	                    <td> \
	                        <button class="edit-modal btn btn-warning" \
	                                data-id="${result.id}"  \
	                                data-name="${result.name}"> \
	                                Edit</button> \
	                        <button class="delete-modal btn btn-danger" \
	                                data-delete-id="${result.id}"> \
	                                Delete</button> \
	                    </td> \
                	</tr>`
            	);
				location.reload();
			},
			error: function(xhr, error) {
				alert(error + ' : Name must not be empty');
			}
		});
	$('#new-state').val('');
	});

	$('.update').click(function() {
		$.ajax({
			url: '/api/states/update',
			type: 'PUT',
			headers: {
		        'X-CSRF-TOKEN': $('#token').attr('content')
		    },
			data: {
				'id': $('#state-id').val(),
				'name': $('#state-name').val()
			},
			success: function(result) {
				$('.state' + result.id)
				.replaceWith(  
					`<tr class="state${result.id}"> \
						<td></td> \
	                    <td>${result.name}</td> \
	                    <td> \
	                        <button class="edit-modal btn btn-warning" \
	                                data-id="${result.id}"  \
	                                data-name="${result.name}"> \
	                                Edit</button> \
	                        <button class="delete-modal btn btn-danger" \
	                                data-delete-id="${result.id}"> \
	                                Delete</button> \
	                    </td> \
                	</tr>`
            	);
				location.reload();
			},
			error: function(xhr, error) {
				alert(error + ' : Name must not be empty');
			}
		});
	});

	$('.delete').click(function() {
		$.ajax({
			url: '/api/states/delete',
			type: 'DELETE',
			headers: {
		        'X-CSRF-TOKEN': $('#token').attr('content')
		    },
			data: {
				'id': $('#del-id').html()
			},
			success: function(result) {
				$('.state' + result.id).remove();
				location.reload();
			},
			error: function(xhr, error) {
				alert(error);
			}
		});
	});
});
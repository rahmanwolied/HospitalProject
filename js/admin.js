$(document).ready(function () {
	var fileName = window.location.pathname.split('/').pop();
	if (fileName == 'order_list.html') {
		var c = 1;
	} else if (fileName == 'admin.html') {
		var c = 5;
	}

	$.ajax({
		url: 'get_orders.php',
		type: 'POST',
		data: { count: c },
		dataType: 'json',
		success: function (data) {
			console.log(data);
			$('#total-orders').html(data.count);
			$('#recent-orders').html(data.table1);
			$('#top-selling').html(data.table2);
			$('#total-customers').html(data.customer_count);
		},
	});

	$(document).on('click', '#seeAllOrders', function () {
		$.ajax({
			url: 'get_orders.php',
			type: 'POST',
			data: { count: 0 },
			dataType: 'json',
			success: function (data) {
				$('#recent-orders').html(data.table1);
				$('#seeAllOrders').html('Show less');
				$('#seeAllOrders').attr('id', 'showless');
			},
		});
	});

	$(document).on('click', '#showless', function () {
		$.ajax({
			url: 'get_orders.php',
			type: 'POST',
			data: { count: c },
			dataType: 'json',
			success: function (data) {
				$('#recent-orders').html(data.table1);
				$('#showless').html('See All');
				$('#showless').attr('id', 'seeAllOrders');
			},
		});
	});

	$(document).on('click', '.confirm-delivery', function (e) {
		e.preventDefault();
		var oID = $(this).data('id');
		$.ajax({
			url: 'update_status.php',
			type: 'POST',
			data: { oID: oID },
			success: function (data) {
				console.log(oID);
				if (data == 1) {
					window.location.href = 'order_list.html';
				} else {
					console.log(data);
				}
			},
		});
	});

	if (fileName == 'inventory.html') {
		$.ajax({
			url: 'get_inventory.php',
			type: 'POST',
			data: { count: 0 },
			success: function (data) {
				$('#inventory').html(data);
			},
		});

		$(document).on('click', '.btn-edit', function (e) {
			e.preventDefault();
			$('#myModal').addClass('active');
			var pID = $(this).data('id');
			$.ajax({
				url: 'get_suppliers.php',
				type: 'POST',
				data: { pID: pID },
				success: function (data) {
					$('#suppliers').html(data);
				},
			});

			$(document).on('click', '#confirm-btn', function (e) {
				e.preventDefault();
				var sID = $('#suppliers').val();
				var quantity = $('#quantity').val();
				$.ajax({
					url: 'update_stock.php',
					type: 'POST',
					data: { pID: pID, sID: sID, quantity: quantity },
					success: function (data) {
						if (data == 1) {
							$('.modal-content').html('Stock Updated Successfully');
							setTimeout(function () {
								window.location.href = 'inventory.html';
							}, 1000);
						} else {
							console.log(data);
						}
					},
				});
			});
		});

		$(document).on('click', '#close', function (e) {
			e.preventDefault();
			$('#myModal').removeClass('active');
		});
	} else if (fileName == 'customers.html') {
		$.ajax({
			url: 'get_customers.php',
			type: 'POST',
			data: { count: 0 },
			success: function (data) {
				$('#customers').html(data);
			},
		});
	}
});

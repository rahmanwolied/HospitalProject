$(document).ready(function () {
	var fileName = window.location.pathname.split('/').pop();
	if (fileName == 'order_list.html') {
		var c = 1;
	} else {
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
});

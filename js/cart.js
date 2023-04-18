$(document).ready(function () {
	var subtotalTotal = 0;
	$('td.subtotal').each(function () {
		subtotalTotal += parseInt(
			$(this)
				.text()
				.replace(/[^0-9]/g, '')
		);
	});
	$('#subtotal').html('Total: ' + subtotalTotal.toLocaleString());
	$.ajax({
		url: 'update_cart.php',
		type: 'POST',
		data: {},
		success: function (data) {
			$('#discount').html('Discount:' + data);
			$('#total').html('Total: ' + (subtotalTotal - data).toLocaleString());
		},
	});

	$('.cart-btn').on('click', function (e) {
		e.preventDefault();

		var productId = $(this).data('product-id');
		var quantity = 1;

		$.ajax({
			url: 'add-to-cart.php',
			method: 'POST',
			data: {
				productId: productId,
				quantity: quantity,
			},
			success: function (data) {
				console.log(data);
				if (data == 1) {
					$('#' + productId).html('Added to cart');
				} else if (data == 0) {
					$('#' + productId).addClass('error');
					$('#' + productId).html('Please Login first');
				} else if (data == 2) {
					$('#' + productId).addClass('error');
					$('#' + productId).html('Product already in cart');
				}
			},
		});
	});

	$('.trash-btn').on('click', function (e) {
		e.preventDefault();

		var prID = $(this).data('pr-id');

		console.log(prID);
		$.ajax({
			url: 'remove-from-cart.php',
			method: 'POST',
			data: { prID: prID },
			success: function (data) {
				if (data == 1) {
					window.location.href = 'cart.php';
					$('#message').html('Product removed from cart');
				} else {
					console.log(data);
				}
			},
		});
	});

	$('.minus').click(function () {
		var input = $(this).parent().find('input');
		var value = parseInt(input.val());
		if (value > parseInt(input.attr('min'))) {
			input.val(value - 1).change();
		}
	});

	$('.plus').click(function () {
		var input = $(this).parent().find('input');
		var value = parseInt(input.val());
		if (value < parseInt(input.attr('max'))) {
			input.val(value + 1).change();
		}
	});

	$('.quantity_field').on('change', function () {
		var subtotalTotal = 0;
		var quantity = $(this).val();
		var prod_id = $(this).data('prod-id');

		var price = parseInt($('.price p', $(this).closest('tr')).text().replace(/[^\d]/g, ''));
		var subtotal = quantity * price;
		$('.subtotal', $(this).closest('tr')).text('৳ ' + subtotal.toLocaleString());

		$('td.subtotal').each(function () {
			subtotalTotal += parseInt(
				$(this)
					.text()
					.replace(/[^0-9]/g, '')
			);
		});

		$.ajax({
			url: 'update_cart.php',
			type: 'POST',
			data: {
				prod_id: prod_id,
				quantity: quantity,
				subtotalTotal: subtotalTotal,
			},
			success: function (data) {
				var total = subtotalTotal - data;
				$('#subtotal').html('Subtotal: ৳' + subtotalTotal.toLocaleString());
				$('#discount').html('Discount: -৳' + data);
				$('#total').html('Total: ৳' + total.toLocaleString());
			},
		});
	});

	$('#checkout').on('click', function (e) {
		e.preventDefault();
		$('#payment-modal').addClass('active');
		$('#overlay').addClass('active');
	});

	$('#close-modal').on('click', function (e) {
		e.preventDefault();
		$('#payment-modal').removeClass('active');
		$('#overlay').removeClass('active');
	});

	$('.pay_methods').on('click', function (e) {
		e.preventDefault();
		$('#payment-modal').removeClass('active');
		$('#overlay').removeClass('active');

		var method = $(this).data('method');
		var total = $('#total').text().replace(/[^\d]/g, '');

		$.ajax({
			url: 'checkout.php',
			type: 'POST',
			data: {
				method: method,
				total: total,
			},
			success: function (data) {
				if (data == 1) {
					$('#message').html('Order placed successfully');

					setTimeout(function () {
						window.location.href = 'index.php';
					}, 1000);
				} else {
					$('#message').html('An error occured');
				}
			},
		});
	});
});

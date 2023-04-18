$(document).ready(function () {
	$('#error').hide();

	$('#login').on('click', function (e) {
		e.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		$.ajax({
			url: 'admin_login.php',
			method: 'POST',
			data: { username: username, password: password },
			success: function (data) {
				if (data == 1) {
					window.location.href = 'admin.html';
				} else if (data == 0) {
					$('#error').show();
					$('#error').html('Invalid username or password');
				}
			},
		});
	});
});

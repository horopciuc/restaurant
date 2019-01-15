/*
$(document).ready(function() {

	var username = $('#username');
	var password = $('#password');

	$('#submit').click(function(e) {
		e.preventDefault();
		$.ajax({
			url: './checkinfo.php',
			type: 'POST',
			dataType: 'JSON',
			data: {
				username: username.val(),
				password: password.val()
			},
			success: function(result) {
				if (result.code == 1) {

					console.log('succes', result.message);

					// window.location = "home.php";
				}
				else
				{
					console.log('esec', result.message);
				}
			},
			error: function(e) {
				console.log("Nu au putut fi aduse informatiile");
			}
		});
	})

});

*/

var Module = (function() {

	var //selectors
		$username = $('#username'),
		$password = $('#password'),
		$submit   = $('#submit'),
		$content  = $('#content');

	var startRequest = function() {
		$submit.click(function(e) {
			e.preventDefault();
			$.ajax({
				url: './checkinfo.php',
				method: 'post',
				dataType: 'JSON',
				data: {
					username: $username.val(),
					password: $password.val()
				},
				success: function(result) {
					$content.html(result);
					console.log('ramura de succes');

				}
			})
			.done(function(data) {
				$content.html(data);
			})
		})
	}

	var init = function() {
		startRequest();
	};

	return {
		init: init
	};


})();

Module.init();





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
		$submit    = $('#submit'),
		$content   = $('#content'),
		$loginform = $('#loginform');

	var startRequest = function() {
		$submit.click(function(e) {
			e.preventDefault();
			var $username = $('#username').val();
			var	$password = $('#password').val();
			if ($username != "admin" || $password != "admin")
				alert("not admin");
			else
				$loginform.style.display = 'none';
				$.ajax({
					url: './checkinfo.php',
					method: 'post',
					dataType: 'JSON',
					data: {
						username: $username,
						password: $password
					},
					success: function(result) {
						$content.html(result);
						console.log('ramura de succes');
					}
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





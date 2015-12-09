jQuery(document).ready(function($) {
	$('form').submit(function(e) {
		e.preventDefault();
		$.ajax('submit.php', {
			method: 'POST',
			data : $('form').serialize(),
			success: function(msgs) {
				$('#msgs').html(msgs);
				$('#msgs')[0].reset();

			}
		});
	});

	setInterval(function(){
		$.ajax('update.php', {
			method: 'POST',
			success: function(msgs) {
				$('#msgs').html(msgs);
			}
		});
	}, 1000);

});

jQuery(document).ready(function($) {
	$('form').submit(function(e) {
		e.preventDefault();
		$.ajax('./', {
			method: 'POST',
			data : $('form').serialize()),
			success: function(msgs) {
				$('#msgs').html(msgs);
			}
		});
	});
});

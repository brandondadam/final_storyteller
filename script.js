var charCode = e ? (e.which ? e.which: e.keycode): window.event.keycode;

jQuery(document).ready(function($) {
	$('form').submit(function(e) {
		if(charCode==13){
			console.log('checking');
			e.preventDefault();
			$.ajax('submit.php', {
				method: 'POST',
				data : $('form').serialize(),
				success: function(msgs) {
					$('#msgs').html(msgs);
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
		}



});

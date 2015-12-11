$('form').submit(function(e) {
	e.preventDefault();
	$.ajax('submit.php', {
		method: 'POST',
		data : $('form').serialize(),
		success: function(msgs) {
			$('#msgs').html(msgs);
		}
	});
	$('textarea').val('');
	$('textarea').attr('placeholder', 'Thanks for your submission! Come back tomorrow to contribute to another story.');
	$('textarea').attr('disabled', true);
});
setInterval(function() {
	$.ajax('update.php', {
		method: 'POST',
		success: function(msgs) {
			$('#msgs').html(msgs);
		}
	});
}, 1000);

function checkSubmit(e){
	var charCode = e ? (e.which ? e.which: e.keycode): window.event.keycode;
	if(charCode == 13){
		$('form').submit();
		e.preventDefault();
	}
}

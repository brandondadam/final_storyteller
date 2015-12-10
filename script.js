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

jQuery(document).ready(function($) {
	$('form').submit(function(e) {
		e.preventDefault();
		$.get('./?' + $('form').serialize());
	});
});

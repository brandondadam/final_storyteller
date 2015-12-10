<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Story Builder</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form onKeyPress="return checkSubmit(event);">
			<textarea type="text" id="type" name="msg" placeholder="Add to the story..." rows="8" cols"80"></textarea>
			<input type="submit" value="Send">
		</form>

		<div id="msgs">
				<?php
					if (!file_exists('msg')) {
						mkdir('msg');
					}
					$msgs=glob('msg/*.txt');
					foreach ($msgs as $filename){
						$msg = file_get_contents($filename);
						echo '<p>' . htmlentities($msg) . '</p>';
					}
				?>
		</div>


		<script src="jquery-1.11.3.min.js"></script>
		<script src="script.js"></script>
		<script>
			function checkSubmit(e){
				var charCode = e ? (e.which ? e.which: e.keycode): window.event.keycode;
				if(charCode == 13){
					console.log('ckdle');
				}
			}
		</script>
	</body>
</html>

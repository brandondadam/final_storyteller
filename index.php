<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Story Builder</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			session_start();
			if (empty($_SESSION['already_submitted'])){
		?>
			<form onKeyPress="return checkSubmit(event);">
				<textarea type="text" id="type" name="msg" placeholder="add to the story..." rows="8" cols"80"></textarea>
			</form>
		<?php
			} else {
				?>
			<textarea id="type" name="msg" placeholder="Thanks for your submission! Come back tomorrow to contribute to another story."></textarea>
			<?php
			}
		?>

		<div id="msgs">
			<p>text for sample.</p>
			<?php
				if (!file_exists('msg')) {
					mkdir('msg');
				}
				$msgs=glob('msg/*.txt');
				foreach ($msgs as $filename){
					$msg = file_get_contents($filename);
					echo '<p>' . htmlentities($msg) . '</p>';
					//this is for clearing messages
					//file_put_contents($filename, '');
				}
			?>
		</div>
		<script src="jquery-1.11.3.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>

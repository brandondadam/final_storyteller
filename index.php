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
			<textarea disabled id="type" name="msg" placeholder="Thanks for your submission! Come back tomorrow to contribute to another story."></textarea>
			<?php
			}
		?>

		<div id="msgs">
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


		<?php
		$date = strtotime("December 3, 2014 2:00 PM");
		$remaining = $date - time();
		$days_remaining = floor($remaining / 86400);
		$hours_remaining = floor(($remaining % 86400) / 3600);
		?>
		<p><?php echo $hours_remaining?></p>

		<script src="jquery-1.11.3.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>

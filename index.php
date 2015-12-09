<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Story Builder</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="msgs">
			<form action="submit.php" method="post">
				<textarea type="text" id="type" name="msg" placeholder="Add to the story..." rows="8" cols"80"></textarea>
				<input type="submit" value="Send">
			</form>
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
	</body>
</html>

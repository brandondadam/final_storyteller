<?php
	session_start();

	$form_token = uniqid();

	$_SESSION['form_token'] = $form_token;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Story Builder</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form action="submit.php" onKeyPress="return checkSubmit(event);">

			<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />

			<textarea type="text" id="type" name="msg" placeholder="Add to the story..." rows="8" cols"80"></textarea>
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
					//this is for clearing messages
					//file_put_contents($filename, '');
				}
			?>
		</div>

		<script src="jquery-1.11.3.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>

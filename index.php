<?php
session_start();
if (empty($_SESSION['already_submitted']) {

  // HTML stuff to allow the user to submit

} else {
   echo 'You only get to submit once!';
}
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


		<?php
		session_start();
		if (empty($_SESSION['already_submitted']) {

			<form onKeyPress="return checkSubmit(event);">
				<textarea type="text" id="type" name="msg" placeholder="what's on your mind..." rows="8" cols"80"></textarea>
			</form>

		} else {
		   echo 'You only get to submit once!';
		}
		?>


















		<div id="msgs">
			<?php
				if (!file_exists('msg')) {
					mkdir('msg');
				}
				//condtional for clearing msgs, doesn't work
				//if('msg' == 'reset'){
					//foreach ($msgs as $filename){
						//file_put_contents($filename, '');
				//}

				$msgs=glob('msg/*.txt');
				foreach ($msgs as $filename){
					$msg = file_get_contents($filename);
					echo '<p>' . htmlentities($msg) . '</p>';
					//this is for clearing messages, and it works, but then I can't submit anymore.
					//file_put_contents($filename, '');
				}
			?>
		</div>
		<script src="jquery-1.11.3.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>

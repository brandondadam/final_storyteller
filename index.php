<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Story Builder</title>
	</head>
	<body>
		<?php

		if (!file_exists('msg')) {
		  mkdir('msg');
		}
		if(!empty($_GET['msg'])){
			echo $_GET['msg'];
			$filename = time() . '.txt';
			file_put_contents("msg/$filename", $_GET['msg']);
		}

		$msgs=glob('msg/*.txt');
		foreach ($msgs as $filename){
			$msg = file_get_contents($filename);
			echo '<p>' . htmlentities($msg) . '</p>';
		}

		?>

		<form action="./">
			<input type="text" name="msg" placeholder="Add to the story...">
			<input type="submit" value="Send">
		</form>
	</body>
</html>

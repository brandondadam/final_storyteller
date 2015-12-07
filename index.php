<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Story Builder</title>
	</head>
	<body>
		<?php

		if(!empty($_GET['msg'])){
			echo $_GET['msg'];
			$filename = time() . '.txt'
			file_put_contents("msg/$filename", $_GET['msg']);
		}

		$msgs=glob('msg/*.txt');

		?>

		<form action="./">
			<input type="text" name="msg" placeholder="Add to the story...">
			<input type="submit" value="send">
	</body>
</html>

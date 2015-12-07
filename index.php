<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Co-Authors</title>
	</head>
	<body>
		<?php

		if(!empty($_GET['msg'])){
			echo $_GET['msg'];
		}

		?>
		<form action="./">
			<input type="text" name="msg" placeholder="Add to the story...">
			<input type="submit" value="send">
	</body>
</html>

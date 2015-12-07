<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Co-Authors</title>
	</head>
	<body>
		<?php

		<?php

if (file_exists('story.txt')) {
    $content = file_get_contents('story.txt');
} else {
    $content = '(no content)';
}

?>

		?>
		<form action="./">
			<input type="text" name="msg" placeholder="Add to the story...">
			<input type="submit" value="send">
	</body>
</html>

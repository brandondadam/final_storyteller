<?php
if(!empty($_POST['msg'])){
	$filename = time() . '.txt';
	file_put_contents("msg/$filename", $_POST['msg']);
	$msgs=glob('msg/*.txt');
	foreach ($msgs as $filename){
		$msg = file_get_contents($filename);
		echo '<p>' . htmlentities($msg) . '</p>';
	}
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Story Builder</title>
	</head>
	<body>
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
		<form action="./" method="post">
			<input type="text" name="msg" placeholder="Add to the story...">
			<input type="submit" value="Send">
		</form>
		<script src="jquery-1.11.3.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>

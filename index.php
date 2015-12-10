<?php
session_start();


if(isset($_POST['token']){
	echo "token";
	if(isset($_SESSION['token']) && $_POST['token']==$_SESSION['token']){
		$msg = htmlentities($_POST['msg']);
	}
}




$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));

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

		<form onKeyPress="return checkSubmit(event);">
			<textarea type="text" id="type" name="msg" placeholder="Add to the story..." rows="8" cols"80"></textarea>

			<input type="hidden" name="token" value="<?php=$token;?>" />

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

<?php
        /*** begin the session ***/
        session_start();

        /*** create the form token ***/
        $form_token = uniqid();

if(isset($_POST['msg'], $_POST['msg'], $_SESSION['form_token'])){

	/*** unset the form token in the session ***/
	unset( $_SESSION['form_token']);

}


        /*** add the form token to the session ***/
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

		<form onKeyPress="return checkSubmit(event);">
			<textarea type="text" id="type" name="msg" placeholder="Add to the story..." rows="8" cols"80"></textarea>


			<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />


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

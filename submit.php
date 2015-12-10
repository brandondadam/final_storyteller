<?php
if(!empty($_POST['msg'])){
	$filename = time() . '.txt';
	file_put_contents("msg/$filename", $_POST['msg']);

	unset($_SESSION['form_token']);

	$msgs=glob('msg/*.txt');
	foreach ($msgs as $filename){
		$msg = file_get_contents($filename);
		echo '<p>' . htmlentities($msg) . '</p>';
	}
}
	$filename = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);


?>

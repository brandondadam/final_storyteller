<?php
session_start();
if (empty($_SESSION['already_submitted'])) {
	if(!empty($_POST['msg'])){
		$filename = time() . '.txt';
		file_put_contents("msg/$filename", $_POST['msg']);
		$msgs=glob('msg/*.txt');
		foreach ($msgs as $filename){
			$msg = file_get_contents($filename);
			echo '<p>' . htmlentities($msg) . '</p>';
		}
	}
	$_SESSION['already_submitted'] = false;
}
?>

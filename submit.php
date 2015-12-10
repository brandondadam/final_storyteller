<?php
if(!empty($_POST['msg'])){
	$filename = time() . '.txt';
	file_put_contents("msg/$filename", $_POST['msg']);
	$msgs=glob('msg/*.txt');
	foreach ($msgs as $filename){
		$msg = file_get_contents($filename);
		php echo $form_token;
		echo '<p>' . htmlentities($msg) . '</p>';
	}
}
?>

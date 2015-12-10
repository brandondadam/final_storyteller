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
		</form>

		<button id="save" onclick="save();return false;">Save</button>
		<div id="response"></div>

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
		<script>
			function save(){
				var response=document.getElementById("response");
				var data = 'data='+document.getElementById("msgs").value;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange=function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200){
						response.innerHTML='<a href="files/'+xmlhttp.responseText+'.txt">'+xmlhttp.responseText+'.txt</a>';
					}
				}
				xmlhttp.open("POST","save.php",true);
				//Must add this request header to XMLHttpRequest request for POST
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send(data);
			}
</script>
		<script src="jquery-1.11.3.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>

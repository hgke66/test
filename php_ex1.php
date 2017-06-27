<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Hive</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    
</head>
<body>
	<input type='button' id='apply' value='<?=$value>'>
<?php

	echo "<input type='button' id='cancle' value='".$value."'>";
?>
	<!--
	… html code …
	-->

<script>
	var apply = document.getElementById('apply')
	var func = function(){

		// …. script ….
              value='<?=$value>';

	}
	apply.addEventListener('click', func);
</script>

</body>
<html>
 
<?php
	header("location:http://www.google.com");
?>

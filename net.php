<?php
session_start();
$id = $_SESSION['id'];
ob_start();
?>
<html>
<head>
<title>EEEE</title>
<body>
<form method='POST' action='sample.py'>
<input type="text" name='gdgd' placeholder='Enter'>
<input type='submit' value='submit'>
</form>

</body>
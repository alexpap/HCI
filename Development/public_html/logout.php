<?php 
	session_start();
	if ( $link ) mysqli_close($link);
	session_destroy();
	header('Location: index.php');
?>

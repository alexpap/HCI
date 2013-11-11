<?php 
	session_start();
	if ( !isset($_SESSION['id']) ) { 
		$err = "Πρέπει να συνδεθείτε.";
		header('Location: login.php');		
	} else if ( isset($_SESSION['type']) ) {
		if ( $_SESSION['type'] == "doc" ) { header('Location: profile_doc.php'); }
		else if  ( $_SESSION['type'] == "ins" )  { header('Location: profile_ins.php');	}
		else { header('Location: logout.php'); }
	} else { header('Location: logout.php');}
?>


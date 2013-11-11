<?php
	if ( !isset($link) ) {
		$link = mysqli_connect("pubsrv1.di.uoa.gr", "std09017user", "13_demo_eopyy", "std09017db");
		if (mysqli_connect_errno()) {
			unset($link);
			printf("Connect failed: %s\n",mysqli_connect_error());
			exit(); 
		}
		else { 
			mysqli_query($link,"set charset utf8"); 
		}
	}
?>

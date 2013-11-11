<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Αρχική Ε.Ο.Π.Υ.Υ.</title>
		<link rel="stylesheet" type="text/css" href="styles/header.css"/>
		<link rel="stylesheet" type="text/css" href="styles/index.css"/>
		<link rel="stylesheet" type="text/css" href="styles/form.css"/>
		<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
		
	</head>
	<body>
		<?php include 'includes/header.php'; ?>	
		<section id="content">
		<article id ="quicksearch">
		<h2><a href="search.php">Ψάχνετε Ιατρό;</a></h2><br>
		<a href="search.php"><img src="images/find.jpg" /></a>
		</article>
		<article id="news">
		
		<h2><a href="#">Νέα - Ανακοινώσεις</a></h2><br>
		<a href="#">Λίστα Ιατρών 2013</a><br/><br/>
		<a href="#">Νέες Πληροφορίες για Ασφαλισμένους</a>
		</article>
		<div id="banner">
			<img src="images/eopyy.gif">
		</div>
		
		
		</section>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>

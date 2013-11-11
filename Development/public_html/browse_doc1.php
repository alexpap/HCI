<?php session_start();?>
<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Doctor profile</title>
		<link rel="stylesheet" type="text/css" href="styles/header.css"/>
		<link rel="stylesheet" type="text/css" href="styles/docpage.css"/>
		<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	</head>
	<body>
		<?php include 'includes/header.php'?>
			
		<section id='content'>
					<h1><a href='search.php' >Αποτελέσματα</a>-> Γιώργος Παπαδόπουλος</h1><br>
					<article id='info'>
					<div id='pic'><img src='images/image.jpg' id='profpic'></div>
							<h2>Γιώργος Παπαδόπουλος</h2>
							<h4>Γυναικολόγος</h4>
							Μαραθώνος 15 Μαρούσι<br/>
							Τηλ.Ιατρείου:2103567843 <br/>
							Κινητό: 6977890765<br/>
							Κωδικός Ιατρού: 02378<br/>
							<a href='appointment.php'>Κλείστε Ραντεβού</a>
						</article>
						<article id='map'>
							<iframe width='400' height='200' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' 
							src='https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Unknown+road&amp;daddr=&amp;hl=en&amp;geocode=FT9XQwIdzKZqAQ&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;doflg=ptk&amp;mra=ls&amp;ie=UTF8&amp;ll=37.967679,23.766732&amp;spn=0.006295,0.007985&amp;t=m&amp;output=embed'></iframe>
							<br /><small><a href='https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Unknown+road&amp;daddr=&amp;hl=en&amp;geocode=FT9XQwIdzKZqAQ&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;doflg=ptk&amp;mra=ls&amp;ie=UTF8&amp;ll=37.967679,23.766732&amp;spn=0.006295,0.007985&amp;t=m' 
							style='color:#0000FF;text-align:left'>Μεγέθυνση Χάρτη</a></small>
						</article>
				
						<article id='desc' class='box'>
						<div class='label label2'>Περιγραφή</div>
							Something Something that the doctor wrote about his page and should be floating to the left with a maximum width
				
						</article>
						<article id='timetable' class='box'>
						<div class='label'>Ώρες Λειτουργίας</div>
							Another texbox for the doctor to fill and us to load in this page
						</article>
				
				</section>
				<?php include 'includes/footer.php'?>
	</body>
</html>

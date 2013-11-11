<?php 
	session_start(); 
	include 'includes/core/db_connect.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Demo_EOPYY</title>
		<link rel="stylesheet" href='styles/header.css' /> 
		<link rel="stylesheet" href='styles/search.css' />
		<link rel="stylesheet" href='styles/footer.css' />
  		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&language=el&region=GR"></script>
		<script type="text/javascript" src="includes/js/script.js"></script>
		<script> google.maps.event.addDomListener(window, 'load', initialize); </script>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<section id="content">
			<h1>Αναζήτηση Ιατρικών Υπηρεσιών</h1>
			<div id="search">
				<form class="search_form" id="search" action="search.php" method="get" >
					
							<p>Συμπληρώστε/Επιλέξτε ένα ή περισσότερα πεδία.</p>
						 <fieldset>
							Υπηρεσία :<br/>	<select name="service" >
										<option value="">Ιατρός</option>
										<option value="">Κέντρο Υγείας</option>
									</select>	<br/>
							Ονοματεπώνυμο :<br><input id="name" name="name" type="text"><br/>
							Ειδικότητα :<br><select name="specialty" >
										<option value="" >Όλες</option>
										<option value="1" >Γυναικολόγος</option>
										<option value="2" >Καρδιολόγος</option>
										<option value="3" >Οφθαλμίατρος </option>
										<option value="4" >Παιδίατρος</option>
										<option value="5" >Χειρουργός </option>
									</select>	<br/>
							Τοποθεσία :<br><input id="searchTextField" type="text" name="auto" value="">
							<input  type="hidden" id="lati" name="lati" value="">
							<input  type="hidden" id="longi" name="longi" value=""><br/>
							Ακτίνα αναζήτησης :<br/>	<select name="range" value="">
											<option value="">5</option>
											<option value="">25</option>
											<option value="">50</option>
											<option value="">100</option>
											</select>km		<br/>				
							Ημερομηνία :<br/><input type="date" name="date" min="2011-08-01" max="2011-08-15"><br/>
							Ώρα:<br/><input type="time" name="time">	<br/>			
							<button class ="submit" type="submit" name="search">Αναζήτηση</button>
						 
					</fieldset>
				</form>
			</div>
			<div style="width:350px;height:350px;float:right;" id="map_canvas"></div>
		</div>
		<div style="clear:left;display:box;"><br/><hr/>
			<h2>Αποτελέσματα Αναζήτησης</h2><hr/>
			<ul id="results" style ="list-style-type: none;">
				<?php
					if ( isset($_GET['search']) ) { 
						$n ="%" .mysqli_real_escape_string($link,$_GET['name']) ."%";
						$query = "select id,name,surname,email from client,doctor where client_id = id and (name like ? or name like upper(?) or name like lower(?) or surname like ? or surname like upper(?) or surname like lower(?));";
						if ( ($stmt = mysqli_prepare($link,$query)) ) 
						{
							mysqli_stmt_bind_param($stmt, "ssssss",$n,$n,$n,$n, $n ,$n);
							mysqli_stmt_execute($stmt);
							mysqli_stmt_bind_result($stmt,$a1,$a2,$a3,$a4);
							if ( mysqli_stmt_fetch($stmt) )
							{
								$result = "<table> <tr><th>Kωδ. Ιατρού |</th> <th>Ονομα Ιατρού |</th> <th>Επίθετο Ιατρού |</th> <th>Ηλεκρονικό Ταχυδρομίο </th></tr>";
								$result = $result . "<tr><td><a href='browse_doc1.php?doctor_id=".$a1."'>" . $a1 . "</a></td><td>" . $a2 . "</td><td>" . $a3 . "</td><td>" . $a4 . "</td></tr>";
								while (mysqli_stmt_fetch($stmt))
								{
									$result = $result . "</td><td> <a href='browse_doc1.php?doctor_id=" .$a1."'>" . $a1 . "</a></td><td>" . $a2 . "</td> <td>" . $a3 . "</td><td>" . $a4 . "</td></tr>";
								}
								$result = $result . "</table>";							
							}
							else $result = "<br> <h3>Δεν βρέθηκαν αποτελέσματα. </h3>";
							echo $result;
							unset($result);
							unset($n);
							mysqli_stmt_close($stmt);
						}
					}
				?>
			</ul>
		</div>		
		<?php include 'includes/footer.php'; ?>
	</body>
</html>

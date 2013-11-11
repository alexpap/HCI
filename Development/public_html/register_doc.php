<?php session_start();
	include 'includes/core/db_connect.php';
	if ( isset($_POST['Submit']) ) {
		$email = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['email'])));
		$password = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['password'])));
		$name = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['name'])));
		$surname = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['surname'])));
		$amka = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['amka'])));
		$dateofbirth = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['dateofbirth'])));
		$lati = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['lati'])));
		$longi = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['longi'])));
		$home_phone = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['home_phone'])));
		$mob_phone = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['mob_phone'])));
		$specialty = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['specialty'])));

		$query = "insert into location(latitude,longitude,range) values('$lati','$longi',20);";
		if ( mysqli_query($link, $query) === false ) $err= "err0";
		$query = "insert into client(email,password,amka,name,surname,dateofbirth,home_number,mobile_number,location_id)  
					values('$email','$password','$amka','$name','$surname','$dateofbirth','$home_phone','$mob_phone', 
					'(select id from location where latitude = '$lati' and longitude = '$longi' limit 1)');";
		if ( mysqli_query($link, $query)  === false) $err="err1";
		
		$query = "insert into doctor(client_id,specialty) values((select id from client where email = '$email' limit 1),'$specialty');";
		if ( mysqli_query($link, $query) === false ) $err="err2";
		
		$query = "select id from client where email = '$email';";
		if ( $result = mysqli_query($link, $query)) {
			$_SESSION['id'] = $result;
			$_SESSION['type'] = "ins";
    		mysqli_free_result($result);
			header('Location: index.php');
		}
	} else {$err = "Παρακαλώ εισάγεται τα στοιχεία σας.";}
	unset($email);	
	unset($password);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Εγγραφή Ε.Ο.Π.Υ.Υ.</title>
		<link rel="stylesheet" type="text/css" href="styles/header.css"/>
		<link rel="stylesheet" type="text/css" href="styles/index.css"/>
		<link rel="stylesheet" type="text/css" href="styles/form.css"/>
		<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&language=el&region=GR"></script>
		<script src="includes/js/script.js" type="text/javascript"></script>
	</head>
	<script> google.maps.event.addDomListener(window, 'load', initialize);</script>
	<body>
		<?php include 'includes/header.php'; ?>
		<div id="content">
			      		        <p> <font size="3" face="Calibri">
                    Συμπληρώστε τα παρακάτω στοιχεία για να δημιουργήσετε λογαριασμό στην ιστοσελίδα του ΕΟΠΥΥ. Τα κουτάκια με αστερίσκο
                    είναι υποχρεωτικά πεδία.</font>
					</p>
                    <br />
                    <form class ="register_form" action="register_doc.php" method="post" name="reg">
                    <div id="left" style="height:700px">
                	<fieldset >						   
                    	<legend><b>Προσωπικά Στοιχεία</b></legend>
						<font color="#FF0000">*</font><u>Όνομα:</u><br><input class="textbox" type="text" name="name" />
						<span class="form_hint">Συμπληρώστε το ονομά σας.</span><br>                        
						<font color="#FF0000">*</font><u>Επίθετο:</u><br><input type="text" name="surname" />
						<span class="form_hint">Συμπληρώστε το επίθετό σας.</span><br>
                        <font color="#FF0000">*</font><u>Ημερ/μηνία Γέννησης:</u> <br><input type="date" name="dateofbirth" min="1900-01-01"><br/>
                        <font color="#FF0000">*</font><u>Κωδικός Πρόσβασης:</u><br><input type="password" name="password"/>
						<span class="form_hint">Ο κωδικός πρόσβασης πρέπει να είναι μεταξύ 6 και 12 χαρακτήρων.<br>Για παράδειγμα "abc123".</span><br>                    
                        <font color="#FF0000">*</font><u>Επιβεβαίωση Κωδικού Πρόσβασης:</u><br><input type="password" value="" name="pwd"/><br>
                        <font color="#FF0000">*</font><u>Ηλεκτρονικό Ταχυδρομείο:</u><br><input type="email" name="email"/>
						<span class="form_hint">Για παράδειγμα "info@eopyy.org".</span><br>
                    </fieldset>
              	</div>
                <div id="center" style="height:700px">
                  	<fieldset>
                       	<legend><b>Στοιχεία Ιατρείου</b></legend>
                           	<u> Τοποθεσία:</u><br><input class="textbox" id="searchTextField" type="text" name="auto" value=""><br/>
							<input  type="hidden" id="lati" name="lati" value="">
							<input  type="hidden" id="longi" name="longi" value="">
							<div id="map_canvas" style=" height: 235px;width: 250px;margin-top: 0.6em;"></div>
							<div style="clear:both;"></div>
                            <u>Τηλέφωνο Ιατρείου</u><br><input type="text" name="home_number"><br>
							<font color="#FF0000">*</font><u>Ώρες Λειτουργίας</u><br>
							<input id="message" style="width:200px;height:80px;" name="message"required/>
							<span class="form_hint">Συμπληρώστε τις ώρες λειτουργίας του ιατρείου σας (πχ Δευτέρα : Από ΩΩ:ΛΛ έως ΩΩ:ΛΛ)".</span><br>
                   	</fieldset>
                </div>
                        <div id="right">
                        <fieldset>
                            <legend><b>Στοιχεία Ιατρού</b></legend>
                      	  	<font color="#FF0000">*</font><u>Αριθμός ΑΜΚΑ:</u><br><input type="text" name="amka"/>
							<span class="form_hint">Συμπληρώστε τον Αριθμό Μητρώου Κοινωνικής Ασφάλισης."</span><br>
                            <font color="#FF0000">*</font><u>Ειδικότητα:</u><br/><select name="specialty" >
										<option value="1" >Γυναικολόγος</option>
										<option value="2" >Καρδιολόγος</option>
										<option value="3" >Οφθαλμίατρος </option>
										<option value="4" >Παιδίατρος</option>
										<option value="5" >Χειρουργός </option>
									</select>
							<span class="form_hint">Συμπληρώστε την ειδικότητά σας".</span><br>
                            <u>Κινητό Τηλέφωνο</u><br><input type="text" name="mob_number"><br>
                        </fieldset>
						<center>
						<br>
                           <button class ="submit" type="submit" name="Submit"value="Submit">Δημιουργία<br>Λογαριασμού!</button>
						   </center>
                        </div>
                        </form>				
		</div>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>

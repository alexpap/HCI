<?php 
	session_start();
	if ( !isset($_SESSION['id']) ) { 
		$err = "Πρέπει να συνδεθείτε.";
		header('Location: login.php');		
	} else if ( isset($_SESSION['type']) ) {
		if ( $_SESSION['type'] != "ins" ) {header('Location: logout.php');}
	} else {header('Location: logout.php');}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Προφίλ Ε.Ο.Π.Υ.Υ</title>
		<link rel="stylesheet" type="text/css" href="styles/header.css"/>
		<link rel="stylesheet" type="text/css" href="styles/profile.css"/>
		<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		
	</head>
	<body>
		<?php include 'includes/header.php' ?>
		<section id="content">
                        <nav id="accountmenu">
						<ul>
						   <li><a href='#'><span>Δείτε τα ραντεβού σας</span></a></li>
						   <li><a href='#'><span>Κλείστε νέο ραντεβού</span></a></li>
						   <li><a href='#'><span>Ημερολόγιο Ραντεβού</span></a></li>
						   <li><a href='#'><span>Αποθηκευμένες Υπηρεσίες</span></a></li>
						   <li><a href='#'><span>Διαχειριστείτε το λογαριασμό σας</span></a></li>
						   <li><a href='account.html'><span>Επεξεργαστείτε της πληροφορίες σας</span></a></li>
						</ul>
						</nav>
						
    
                    <form class ="update_form" action="update.php" method="post" name="upd">
                        <div id="center">
                            <fieldset>
                            <legend><b>Στοιχεία Κατοικίας</b></legend>
                            <u>Νομός:</u><br><input list="nomos" name="nomos">
								<datalist id="nomos">
									  <option value="Αττική">
									  <option value="Θεσσαλονίκη">
									  <option value="Αχαϊα">
									  <option value="Χαλκιδική">
									  <option value="Εύβοια">
								</datalist><br>
                            <u>Πόλη:</u><br><input type="text" name="city"><br>
                            <u>Διεύθυνση:</u><br><input type="text" name="address"><br>
                            <u>Ταχυδρομικός Κώδικας:</u> <br><input type="text" name="TK"><br>
                            <u>Τηλέφωνο Κατοικίας:</u><br> <input type="text" name="phone"><br>
                            <u>Κινητό Τηλέφωνο:</u><br><input type="text" name="mobile"><br>
                            </fieldset>
                        </div>
        
                        <div id="right">
                        <fieldset>
                            <legend><b>Στοιχεία Ασφαλισμένου</b></legend>
                            <font color="#FF0000">*</font><u>Αριθμός ΑΜΚΑ:</u><br><input type="text"required/>
							<span class="form_hint">Συμπληρώστε τον Αριθμό Μητρώου Κοινωνικής Ασφάλισης.</span><br>
                            <u>ΑΜΚΑ Προστατευόμενων Μελών:</u><br><input type="text"><br>
                        </fieldset>
						<center>
						<br>
                           <button class ="submit" type="submit" value="Submit">Επιβεβαίωση<br>Αλλαγών</button>
						 </center>
                        </div>
                        </form>				
		</section>
			<?php include 'includes/footer.php' ?>
	</body>
</html>

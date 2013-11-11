<?php	//try to log in 
	session_start();
	if ( isset ($_POST['Login'])  ) { 
		if (!isset($_SESSION['id']) ) {
			include 'includes/core/db_connect.php';
			if ( isset($_POST['email']) && isset($_POST['email'])  ) {
				if ( !empty($_POST['email']) && !empty($_POST['email']) ) {
					$email = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['email'])));
					$password = strip_tags(stripslashes(mysqli_real_escape_string($link,$_POST['password'])));
					$query ="select id from client where email = ? and password = ? limit 1";
					if ( ($stmt = mysqli_prepare($link,$query)) ) {
						mysqli_stmt_bind_param($stmt, "ss", $email,$password);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt,$id);
						if ( mysqli_stmt_fetch($stmt) )	{
							$_SESSION['id'] = $id;
							mysqli_stmt_close($stmt);
							$query ="select client_id from insured where client_id = ? limit 1";
							if ( ($stmt = mysqli_prepare($link,$query)) ) {
								mysqli_stmt_bind_param($stmt, "s", $id);
								mysqli_stmt_execute($stmt);
								mysqli_stmt_bind_result($stmt,$res);
								if ( mysqli_stmt_fetch($stmt) && $res == $id ){
									$_SESSION['type'] = "ins";
								} else $_SESSION['type'] = "doc";
								header('Location: index.php');
							}else { $err = "Λάθος στοιχεία!";}
						} else { $err = "Λάθος στοιχεία!";}
						mysqli_stmt_close($stmt);
					} else $err = "Υπήρξε πρόβλημα στην επικοινωνία με τη βάση, παρακαλώ δοκιμάστε αργότερα!";
				} else $err = "Παρακαλώ εισάγεται τα στοιχεία σας.";
			}
			unset($email);	
			unset($password);
		} else $err = "Είστε ήδη συνδεδεμένος";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Σύνδεση στον Ε.Ο.Π.Υ.Υ.</title>
		<link rel="stylesheet" type="text/css" href="styles/header.css"/>
		<link rel="stylesheet" type="text/css" href="styles/form.css"/>
		<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>	
		<div id="content">
		<?php 
			if (isset($_SESSION['id'])) echo "<br/> <h2>" . $err . "</h2>";
			else {
				echo '<form id="login" action="login.php" method="post" >
						Ηλεκτρονικό Ταχυδρομείο :<br/> <input class="textbox" type="text" name="email" value=""><br>
						Κωδικός :<br/> <input class="textbox" type="password" name="password" value=""><br>
						<input class="btn" name ="Login" type="submit" value="Σύνδεση">
					</form>';
				if ( isset($err) ) echo "<br/> <h2>" . $err . "</h2>"; 
			}
		?>
		</div>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>

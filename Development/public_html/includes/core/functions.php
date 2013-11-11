<?php
	function sec_session_start() {
        $session_name = 'SessEopyy'; 
        $secure = false; 
        $httponly = true; 
        ini_set('session.use_only_cookies', 1);  
        $cookieParams = session_get_cookie_params(); 
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
        session_name($session_name); 
        session_start(); 				
        session_regenerate_id(true);     
	}
	function login($email, $password, $mysqli) {
   		if ($stmt = $mysqli->prepare("SELECT id, email, password FROM client WHERE email = ? LIMIT 1")) { 
			  $stmt->bind_param('s', $email); 
			  $stmt->execute(); 
			  $stmt->store_result();
			  $stmt->bind_result($user_id, $username, $db_password, $salt); 
			  $stmt->fetch();
			  $password = hash('sha512', $password.$salt); // hash the password with the unique salt.
 
     	 if($stmt->num_rows == 1) { 
         	if(checkbrute($user_id, $mysqli) == true) { 
         	   return false;
         	} else {
		     	if($db_password == $password) { 
				       $ip_address = $_SERVER['REMOTE_ADDR'];  
				       $user_browser = $_SERVER['HTTP_USER_AGENT']; 
				       $user_id = preg_replace("/[^0-9]+/", "", $user_id); // XSS protection as we might print this value
				       $_SESSION['user_id'] = $user_id; 
				       $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username); // XSS protection as we might print this value
				       $_SESSION['username'] = $username;
				       $_SESSION['login_string'] = hash('sha512', $password.$ip_address.$user_browser);
				       return true;    
				 } else {
				    $now = time();
				    $mysqli->query("INSERT INTO login_attempts (user_id, time) VALUES ('$user_id', '$now')");
				    return false;
				 }
			  }
		  } else {
    		die('Error occured while connecting to db.');
		     return false;
		  }
   		}
	}
	function login_check($mysqli) {
		if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
			$user_id = $_SESSION['user_id'];
			$login_string = $_SESSION['login_string'];
			$username = $_SESSION['username'];
			$ip_address = $_SERVER['REMOTE_ADDR']; 
			$user_browser = $_SERVER['HTTP_USER_AGENT']; 
     		if ($stmt = $mysqli->prepare("SELECT password FROM members WHERE id = ? LIMIT 1")) { 
		    	$stmt->bind_param('i', $user_id); 
		    	$stmt->execute(); 
		    	$stmt->store_result();
        		if($stmt->num_rows == 1) { 
		       		$stmt->bind_result($password); 
		       		$stmt->fetch();
		       		$login_check = hash('sha512', $password.$ip_address.$user_browser);
           			if($login_check == $login_string) {
              			return true;
           			} else {
            			return false;
           			}
        		} else {
            		return false;
        		}
     		} else {
        		return false;
     		}
		} else {
     		return false;
   		}
	}
?>

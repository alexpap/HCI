<header id="header">
				<a href="index.php"><img id="logo" src="./images/logo.png" ></a>
			<?php if ( !isset($_SESSION['id']) ) echo '
				<nav id="topmenu">
					<ul>
						<li><a href="#" ><span>Επικοινωνία</span></a></li>
						<li class="has-sub" ><a href="#" ><span>Εγγραφή</span></a>
						<ul>
							<li><a href="register_ins.php"><span>Είστε Ασφαλισμένος ;</span></a></li>
							<li><a href="register_doc.php"><span>Είστε Ιατρός ;</span></a></li>
						</ul>
						</li>
						<li class="has-sub" ><a href="login.php" ><span>Σύνδεση</span></a>
						<ul>
							<li><a href="#"><span>				
								<form id="login" action="login.php" method="post" >
						Ηλεκτρονικό Ταχυδρομείο :<br/> <input class="textbox" type="text" name="email" value=""><br>
						Κωδικός :<br/> <input class="textbox" type="password" name="password" value=""><br>
						<input class="btn" name ="Login" type="submit" value="Σύνδεση">
					</form></span></a>
							</li>
							
						<li><a href="#"><span>Ξεχάσατε τον κωδικό σας;</span></a></li>
						</ul>				
						</li>
					</ul>
				</nav>';
				else echo '
				<nav id="topmenu">
					<ul>
						<li><a href="#" ><span>Επικοινωνία</span></a></li>
						<li class="has-sub" ><a href="profile.php" ><span>Προφίλ</span></a></li>
						<li class="has-sub" ><a href="logout.php" ><span>Αποσύνδεση</span></a></li>
					</ul>
				</nav> ';
				?>
				<section id="searchbox">
					<form id="searchform" action="#" method="get" role="search">
						<label class="screen-reader-text" for="s"></label>
						<input id="s" class="textbox" type="text" name="s" value="">
						<input id="searchsubmit" class="btn" type="submit" onmouseout="this.className='btn'" onmouseover="this.className='btn btnhov'" value="Αναζήτηση ">
					</form>
				</section>			
		
			<nav id="menu">
				<ul>
					<li><a href="index.php" title="Αρχική">Αρχική</a></li>
					<li><a href="#" title="Συμβουλές Υγείας"  >Συμβουλές Υγείας</a></li>
					<li><a href="search.php" title="Βρείτε Ιατρικές Υπηρεσίες">Βρείτε Ιατρικές Υπηρεσίες</a></li>
					<li><a href="appointment.php" title="Κλείστε Ραντεβού">Κλείστε Ραντεβού</a></li>
					<li><a href="#" title="Ανακοινώσεις">Ανακοινώσεις</a></li>
					<li><a href="#" title="Χρήσιμοι Συνδεσμοι">Χρήσιμοι Συνδεσμοι</a></li>
					<li><a href="about.php" title="Περί Ε.Ο.Π.Υ.Υ.">Περί Ε.Ο.Π.Υ.Υ.</a></li>
				</ul>
			</nav>
			
			</header>

<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<title>Κλείστε Ραντεβού Ε.Ο.Π.Υ.Υ</title>
		<link rel="stylesheet" type="text/css" href="styles/header.css"/>
		<link rel="stylesheet" type="text/css" href="styles/index.css"/>
		<link rel="stylesheet" type="text/css" href="styles/form.css"/>
		<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<section id="content">
		<form class ="register_form" action="register.php" method="post" name="reg">
                        <div id="appointmentform">
                           <fieldset>						   
                           <legend><b>Αίτηση για Ραντεβού</b></legend>
                           <div id="leftap">            
							<font color="#FF0000">*</font><u>Όνομα:</u><br><input class="textbox" type="text" name="name" required/>
							<span class="form_hint">Συμπληρώστε το ονομά σας.</span><br>                        
							<font color="#FF0000">*</font><u>Επίθετο:</u><br><input type="text" name="surname" required/>
							<span class="form_hint">Συμπληρώστε το επίθετό σας.</span><br>
                            <font color="#FF0000">*</font><u>Ημερ/μηνία Γέννησης:</u> <br>
                                                                                        <select id="birthday" name="birthday">
                                                                                            <option value="01">01</option>
                                                                                            <option value="02">02</option>
                                                                                            <option value="03">03</option>
                                                                                            <option value="04">04</option>
                                                                                            <option value="05">05</option>
                                                                                            <option value="06">06</option>
                                                                                            <option value="07">07</option>
                                                                                            <option value="08">08</option>
                                                                                            <option value="09">09</option>
                                                                                            <option value="10">10</option>
                                                                                            <option value="11">11</option>
                                                                                            <option value="12">12</option>
                                                                                            <option value="13">13</option>
                                                                                            <option value="14">14</option>
                                                                                            <option value="15">15</option>
                                                                                            <option value="16">16</option>
                                                                                            <option value="17">17</option>
                                                                                            <option value="18">18</option>
                                                                                            <option value="19">19</option>
                                                                                            <option value="20">20</option>
                                                                                            <option value="21">21</option>
                                                                                            <option value="22">22</option>
                                                                                            <option value="23">23</option>
                                                                                            <option value="24">24</option>
                                                                                            <option value="25">25</option>
                                                                                            <option value="26">26</option>
                                                                                            <option value="27">27</option>
                                                                                            <option value="28">28</option>
                                                                                            <option value="29">29</option>
                                                                                            <option value="30">30</option>
                                                                                            <option value="31">31</option>
                                                                                            </select>
                                                                                               <select id="birthmonth" name="birthmonth">
                                                                                               <option value="Ιανουάριος">Ιανουάριος</option>
                                                                                               <option value="Φεβρουάριος">Φεβρουάριος</option>
                                                                                               <option value="Μάρτιος">Μάρτιος</option>
                                                                                               <option value="Απρίλιος">Απρίλιος</option>
                                                                                               <option value="Μάιος">Μάιος</option>
                                                                                               <option value="Ιούνιος">Ιούνιος</option>
                                                                                               <option value="Ιούλιος">Ιούλιος</option>
                                                                                               <option value="Αύγουστος">Αύγουστος</option>
                                                                                               <option value="Σεπτέμβριος">Σεπτέμβριος</option>
                                                                                               <option value="Οκτώβριος">Οκτώβριος</option>
                                                                                               <option value="Νοέμβριος">Νοέμβριος</option>
                                                                                               <option value="Δεκέμβριος">Δεκέμβριος</option>
                                                                                               </select> 
                                                                                                <select id="birthyear" name="birthyear">
                                                                                                <option value="2012">2012</option>
                                                                                                <option value="2011">2011</option>
                                                                                                <option value="2010">2010</option>
                                                                                                <option value="2009">2009</option>
                                                                                                <option value="2008">2008</option>
                                                                                                <option value="2007">2007</option>
                                                                                                <option value="2006">2006</option>
                                                                                                <option value="2005">2005</option>
                                                                                                <option value="2004">2004</option>
                                                                                                <option value="2003">2003</option>
                                                                                                <option value="2002">2002</option>
                                                                                                <option value="2001">2001</option>
                                                                                                <option value="2000">2000</option>
                                                                                                <option value="1999">1999</option>
                                                                                                <option value="1998">1998</option>
                                                                                                <option value="1997">1997</option>
                                                                                                <option value="1996">1996</option>
                                                                                                <option value="1995">1995</option>
                                                                                                <option value="1994">1994</option>
                                                                                                <option value="1993">1993</option>
                                                                                                <option value="1992">1992</option>
                                                                                                <option value="1991">1991</option>
                                                                                                <option value="1990">1990</option>
                                                                                                <option value="1989">1989</option>
                                                                                                <option value="1988">1988</option>
                                                                                                <option value="1987">1987</option>
                                                                                                <option value="1986">1986</option>
                                                                                                <option value="1985">1985</option>
                                                                                                <option value="1984">1984</option>
                                                                                                <option value="1983">1983</option>
                                                                                                <option value="1982">1982</option>
                                                                                                <option value="1981">1981</option>
                                                                                                <option value="1980">1980</option>
                                                                                                <option value="1979">1979</option>
                                                                                                <option value="1978">1978</option>
                                                                                                <option value="1977">1977</option>
                                                                                                <option value="1976">1976</option>
                                                                                                <option value="1975">1975</option>
                                                                                                <option value="1974">1974</option>
                                                                                                <option value="1973">1973</option>
                                                                                                <option value="1972">1972</option>
                                                                                                <option value="1971">1971</option>
                                                                                                <option value="1970">1970</option>
                                                                                                <option value="1969">1969</option>
                                                                                                <option value="1968">1968</option>
                                                                                                <option value="1967">1967</option>
                                                                                                <option value="1966">1966</option>
                                                                                                <option value="1965">1965</option>
                                                                                                <option value="1964">1964</option>
                                                                                                <option value="1963">1963</option>
                                                                                                <option value="1962">1962</option>
                                                                                                <option value="1961">1961</option>
                                                                                                <option value="1960">1960</option>
                                                                                                <option value="1959">1959</option>
                                                                                                <option value="1958">1958</option>
                                                                                                <option value="1957">1957</option>
                                                                                                <option value="1956">1956</option>
                                                                                                <option value="1955">1955</option>
                                                                                                <option value="1954">1954</option>
                                                                                                <option value="1953">1953</option>
                                                                                                <option value="1952">1952</option>
                                                                                                <option value="1951">1951</option>
                                                                                                <option value="1950">1950</option>
                                                                                                <option value="1949">1949</option>
                                                                                                <option value="1948">1948</option>
                                                                                                <option value="1947">1947</option>
                                                                                                <option value="1946">1946</option>
                                                                                                <option value="1945">1945</option>
                                                                                                <option value="1944">1944</option>
                                                                                                <option value="1943">1943</option>
                                                                                                <option value="1942">1942</option>
                                                                                                <option value="1941">1941</option>
                                                                                                <option value="1940">1940</option>
                                                                                                <option value="1939">1939</option>
                                                                                                <option value="1938">1938</option>
                                                                                                <option value="1937">1937</option>
                                                                                                <option value="1936">1936</option>
                                                                                                <option value="1935">1935</option>
                                                                                                <option value="1934">1934</option>
                                                                                                <option value="1933">1933</option>
                                                                                                <option value="1932">1932</option>
                                                                                                <option value="1931">1931</option>
                                                                                                <option value="1930">1930</option>
                                                                                                <option value="1929">1929</option>
                                                                                                <option value="1928">1928</option>
                                                                                                <option value="1927">1927</option>
                                                                                                <option value="1926">1926</option>
                                                                                                <option value="1925">1925</option>
                                                                                                <option value="1924">1924</option>
                                                                                                <option value="1923">1923</option>
                                                                                                <option value="1922">1922</option>
                                                                                                <option value="1921">1921</option>
                                                                                                <option value="1920">1920</option>
                                                                                                <option value="1919">1919</option>
                                                                                                <option value="1918">1918</option>
                                                                                                <option value="1917">1917</option>
                                                                                                <option value="1916">1916</option>
                                                                                                <option value="1915">1915</option>
                                                                                                <option value="1914">1914</option>
                                                                                                <option value="1913">1913</option>
                                                                                                <option value="1912">1912</option>
                                                                                                <option value="1911">1911</option>
                                                                                                <option value="1910">1910</option>
                                                                                                <option value="1909">1909</option>
                                                                                                <option value="1908">1908</option>
                                                                                                <option value="1907">1907</option>
                                                                                                <option value="1906">1906</option>
                                                                                                <option value="1905">1905</option>
                                                                                                <option value="1904">1904</option>
                                                                                                <option value="1903">1903</option>
                                                                                                <option value="1902">1902</option>
                                                                                                <option value="1901">1901</option>
                                                                                                <option value="1900">1900</option>
                                                                                                </select><br>
                            <font color="#FF0000">*</font><u>Τηλέφωνο Κατοικίας:</u><br> <input type="text" required/>
							<span class="form_hint">Συμπληρώστε το τηλέφωνο κατοικίας σας".</span><br>                    
                            <u>Κινητό Τηλέφωνο:</u><br><input type="text"><br>
                            <font color="#FF0000">*</font><u>Αριθμός ΑΜΚΑ:</u><br><input type="text"required/>
							<span class="form_hint">Συμπληρώστε τον Αριθμό Μητρώου Κοινωνικής Ασφάλισης."</span><br>
                            </div>
							<div id="centerap">
                            
                            
                            <u>Νομός:</u><br><input list="nomos" name="nomos">
								<datalist id="nomos">
									  <option value="Αττική">
									  <option value="Θεσσαλονίκη">
									  <option value="Αχαϊα">
									  <option value="Χαλκιδική">
									  <option value="Εύβοια">
									  <option value="Κομοτηνή">
									  <option value="Ξάνθη">
								</datalist><br>
                            <u>Πόλη:</u><br><input type="text"><br>
                            <u>Διεύθυνση:</u><br><input type="text"><br>
                            <u>Ταχυδρομικός Κώδικας:</u> <br><input type="text"><br>
							<font color="#FF0000">*</font><u>Προτεινόμενη Ώρα Ραντεβού:</u><br><input type="time" name="usr_time" required/>
							<span class="form_hint">Συμπληρώστε την ώρα που προτιμάτε να πραγματοποιηθεί το ραντεβού σας (ΩΩ:ΛΛ)."</span><br>
							<br>
                           <button class ="submit" type="submit" value="Submit" style="margin-left:8px";>Υποβολή<br>Αίτησης!</button>
						 
							</div>
                        </fieldset>
						</div>
                        </form>				
		
		</section>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>

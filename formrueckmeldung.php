<?php
require_once("header.php");
?>
<!DOCTYPE HTML>
<html>
	<body>
         <h1>Wir freuen uns auf Ihre Bestellung!</h1>
         <br>
		<?php
			echo "<div class='table'>";
			$errors = array();
			if(count($_POST) > 0) {				
				if($_POST['name'] ==""){
					$errors['name'] = 'Name';
				}
				if($_POST['vorname'] ==""){
					$errors['vorname'] = 'Vorname';
				}
				if(!isset($_POST['groesse'])){
					$errors['groesse'] = 'Grösse';
				}
				if($_POST['anzahl'] ==""){
					$errors['anzahl'] = 'Anzahl';
				}
				if($_POST['adresse'] ==""){
					$errors['adresse'] = 'Adresse';
				}
				if($_POST['bestellung'] ==""){
					$errors['bestellung'] = 'Bestellung';
				}
				if($_POST['lieferzeit'] ==""){
					$errors['lieferzeit'] = 'Lieferzeit';
				}
				if($_POST['telefon'] ==""){
					$errors['telefon'] = 'Telefon';
				}
			}
			if(count($_POST) > 0 && count($errors) == 0) {	
				echo "Besten Dank für Ihre Bestellung.<br />";	
				echo "Hier Ihre Angaben:<br />"	;																		
				$message =
					"Ihr Name: " . $_POST['name'] ."<br />" .
					"Ihr Vorname: " . $_POST['vorname'] . "<br />" .
					"Grösse Pizza:  " . $_POST['groesse'] . "<br />" .	
					"Ihre Adresse:  " . $_POST['adresse'] . "<br />" .	
					"Anzahl:  " . $_POST['anzahl'] . "<br />" .	
					"Ihre Bestellung:  " . $_POST['bestellung'] . "<br />" .
					"Ihre gewünschte Lieferzeit:  " . $_POST['lieferzeit'] . "<br />" .	
					"Ihre Telefonnummer:  " . $_POST['telefon'] . "<br />";

				if($_POST['kommentar'] != ""){
					$message .=	"Kommentar:  " . $_POST['kommentar'] . "<br />";
				}
			    mail("nithuja.nagendram@liip.ch", "daangelo", $message);
				echo $message; 
				echo"Wir bedienen sie so schnell wie möglich";		
			} else {
				if($errors > 0){
					echo "<h4>Bitte allle Pflichtfelder ausfüllen!</h4><br />";
					foreach($errors as $error){
						echo '<a class="error">' . $error . '</a><br />';	
					}
					echo "<br />";
				}

			}
			echo "</div>";
		 ?>
 		<br>
 		 <a id="button2" class="btn btn-default" href="formular.php" role="button">Zurück zur Bestellung</a>
 		 	 <div id="footer">
                  &copy; 2015<a href="mailto: nagendram@muster.com"> Nithuja Nagendram</a>
            </div>
		</body>
</html>


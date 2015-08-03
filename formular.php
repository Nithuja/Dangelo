<?php
	require_once("header.php");

    function cmklein(){
	if (isset($_POST['groesse']) && $_POST['groesse'] == 'cmklein'){ 		
	echo 'checked="checked"';
	}
}
	function cmgross(){
	if (isset($_POST['groesse']) && $_POST['groesse'] == 'cmgross'){ 		
	echo 'checked="checked"';
	}
}
?>
<!DOCTYPE HTML>
<html>
 	<body>
	        <h1>Wir freuen uns auf Ihre Bestellung!</h1>
			<table id="formular">
				<form class="form-group"action="formrueckmeldung.php" method="post" >
				<tr>
					<td>* Name:</td></p>
					<td><input class="form-control <?php if(isset($errors['name'])) {echo 'fehler';} ?>"type="text"  name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" /></td><br>
					<p>
				</tr>
				<tr>
					<td>* Vorname:</td>
				    <td><input class="form-control <?php if(isset($errors['vorname'])) {echo 'fehler';} ?>" type="text" name="vorname" value="<?php if(isset($_POST['vorname'])){echo $_POST['vorname'];}?>" /></td>
				</tr>
				<tr>
				<td>* Bestellung:</td>
				<td><select class="form-control <?php if(isset($errors['bestellung'])) {echo 'fehler';} ?>" name="bestellung" value="<?php if(isset($_POST['bestellung'])){echo $_POST['bestellung'];}?>" />
					<option value="Pizza Margherita">Pizza Margherita</option>
					<option value="Pizza Napoletane">Pizza Napoletane</option>
					<option value="Pizza Prosciutto">Pizza Prosciutto</option>
					<option value="Pizza Prosciutto e Funghi">Pizza Prosciutto e Funghi</option>
					<option value="Pizza Salame">Pizza Salame</option>
					<option value="Pizza Salame e Funghi">Pizza Salame e Funghi	</option>
					<option value="Pizza Diavola (scharf)">Pizza Diavola (scharf)	</option>
					<option value="Pizza Capriciosa">Pizza Capriciosa</option>
					<option value="Pizza Tonno">Pizza Tonno</option>
					<option value="Gorgonzola">Gorgonzola</option>
					<option value="Quattro Formaggi">Quattro Formaggi</option>
					<option value="La Bomba (sharf)">La Bomba (sharf)</option>
					<option value="Broccoli">Broccoli</option>
					<option value="Tomaten">Tomaten</option>
					<option value="Pizza Quattro Stagioni">Pizza Quattro Stagioni</option>
				</select></td>
				</tr>
				<tr>
					<td> * Anzahl:</td>
				    <td><input type="text" class="form-control <?php if(isset($errors['anzahl'])) {echo 'fehler';} ?>"  name="anzahl" value="<?php if(isset($_POST['anzahl'])){echo $_POST['anzahl'];}?>" /></td>
				</tr>
				<tr>
				<td>* Gewünschte Lieferzeit:</td>
				<td><select class="form-control <?php if(isset($errors['lieferzeit'])) {echo 'fehler';} ?>" name="lieferzeit" value="<?php if(isset($_POST['lieferzeit'])){echo $_POST['lieferzeit'];}?>" />
					<option value="02:30">02:30</option>
					<option value="02:00">02:00</option>
					<option value="01:30">01:30</option>
					<option value="01:00">01:00</option>
					<option value="00:30">00:30</option>
					<option value="00:00">00:00</option>
					<option value="23:30">23:30</option>
					<option value="23:00">23:00</option>
					<option value="22:30">22:30</option>
					<option value="22:00">22:00</option>
					<option value="21:30">21:30</option>
					<option value="21:00">21:00</option>
					<option value="20:30">20:30</option>
					<option value="20:00">20:00</option>
					<option value="19:30">19:30</option>
					<option value="19:00">19:00</option>
					<option value="18:30">18:30</option>
					<option value="17:00">17:00</option>
					<option value="16:30">16:30</option>
					<option value="15:00">15:00</option>
					<option value="14:30">14:30</option>
					<option value="14:00">14:00</option>
					<option value="13:30">13:30</option>
					<option value="13:00">13:00</option>
					<option value="12:30">12:30</option>
					<option value="12:00">12:00</option>
					<option value="11:30">11:30</option>
					<option value="11:00">11:00</option>
					
				</select></td> 
				</tr>
				<tr>
					<td>* Grösse:</td>
					<td><input type="radio" value="32cm" checked="checked" name="groesse"  <?php cmklein();?>/> 32cm
					    <input type="radio" value="50cm" checked="checked" name="groesse" <?php cmgross();?>/> 50cm</td>
					<p>
				</tr>
				<tr>
					<td> * Adresse:</td>
				    <td><input type="text" class="form-control <?php if(isset($errors['adresse'])) {echo 'fehler';} ?>"  name="adresse" value="<?php if(isset($_POST['adresse'])){echo $_POST['adresse'];}?>" /></td>
				</tr>
				<tr>
					<td> * Telefon:</td>
				    <td><input type="text" class="form-control <?php if(isset($errors['telefon'])) {echo 'fehler';} ?> " name="telefon" value="<?php if(isset($_POST['telefon'])){echo $_POST['telefon'];}?>" /></td>
				</tr>
				<tr>
					<td> Weitere Bestellugen / Kommentar:</td>
				    <td><input class="form-control" type="text" <?php if( isset( $post['kommentar'])){echo $_POST['kommentar'];}?> name="kommentar"></td>
				</tr>
				<tr>
				<td>
				<h5>*Pflichtfelder</h5>
				</td>
				<td><input class="btn btn-large" type="submit" value="Senden"></td>
				</tr>

				</form>
			</table>
      		 <div id="footer">
                  &copy; 2015<a href="mailto: nagendram@muster.com"> Nithuja Nagendram</a>
            </div>
		</body>
</html>

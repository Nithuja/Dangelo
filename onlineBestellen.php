<?php
require_once("header.php");
?>  
  	        	<h3 id="onlinebestellH3">Da Angelo Pizza - Jetzt bestellen und geniessen! </h3>
  	        	<img id="lieferungPizza"src="img/lieferung.png" class="img-responive">
<?php
require_once ('konfiguration.php');
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
 
$sql = "SELECT * FROM Pizza";
 
$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
?>


<div class="table-responsive">
<table class="table" border="1">
<tr>
<th>Pizza</th>
<th>Zutaten</th>
<th>Grösse klein</th>
<th>Preis klein</th>
<th>Grösse gross</th>
<th>Preis gross</th>
</tr>

<?php
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
{

  echo "<td>". $zeile['Pizza'] . "</td>";
  echo "<td>". $zeile['Zutaten'] . "</td>";
  echo "<td>". $zeile['Grösse klein'] . "</td>";
  echo "<td>". $zeile['Preis klein'] . "</td>";
  echo "<td>". $zeile['Grösse gross'] . "</td>";
  echo "<td>". $zeile['Preis gross'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo "</div>";
mysqli_free_result( $db_erg );


?>
      	<a id="button1" class="btn btn-default" href="formular.php" role="button">Jetzt bestellen</a>
         <div id="footer">
             &copy; 2015<a href="mailto: nagendram@muster.com"> Nithuja Nagendram</a>
         </div>
     </body>
</html>



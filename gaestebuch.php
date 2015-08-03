<?php
require_once("header.php");
require_once ('konfiguration.php');

echo "<div class='table'>";
      $errors = array();
      if(count($_POST) > 0) {       
        if($_POST['name'] ==""){
          $errors['name'] = 'Name';
        }
        if($_POST['vorname'] ==""){
          $errors['vorname'] = 'Vorname';
        }
        if($_POST['kommentar'] ==""){
          $errors['kommentar'] = 'Kommentar';
        }
      }

      if(count($_POST) > 0 && count($errors) == 0) {  
        echo "Hier Ihre Angaben:<br />" ;                                   
        $message =
          "Ihr Name: " . $_POST['name'] ."<br />" .
          "Ihr Vorname: " . $_POST['vorname'] . "<br />" .
          "Ihr Kommentar: " . $_POST [ 'kommentar' ] . "<br \>";
          echo $message; 
          echo"Besten Dank für Ihre Kommentar";    
        

  $Name = $_POST['name'];
  $Vorname = $_POST['vorname'];
  $Kommentar = $_POST['kommentar'];
  $sql = "INSERT INTO kommentar (Name, Vorname,Kommentar) " . "VALUES ('$Name', '$Vorname', '$Kommentar') ";

  $ergebnis = mysqli_query($db_link, $sql );
  } else {
    if ( $errors > 0 ){
      foreach( $errors as $error ){
        echo '<a class="error">' . $error . '</a><br />';
      }
      echo "<br />";
    }
  } 


?>
<html>
  <body>
    <h1 id="gestebuchH1">Gästebuch</h1>
    <div>
    <form id="formular2" class" form-horizontal" actions="gaestebuch.php" method="post" role="form">
       <fieldset>
                  <div class="form-group">
                    <label for="name" class="control-label col-lg-4 <?php if( isset ( $errorsGb ['name'])) { echo 'has-error'; }?>" >Name</label>
                  <div class="col-lg-8 <?php if( isset ( $errorsGb ['name'])) { echo 'has-error'; }?>">
                    <input name="name" type="text" class="form-control" value="<?php if( isset( $_POST['name'])){ echo $_POST['name']; } ?>" />
                  </div>
          
                    <label for="vornname" class="control-label col-lg-4 <?php if( isset( $errorsGb[ 'vorname'])) { echo 'has-error';}?>" >Vorname</label>
                  <div class="col-lg-8 <?php if( isset( $errorsGb[ 'vorname'])) { echo 'has-error';}?>">
                    <input name="vorname" type="text" class="form-control" value="<?php if( isset( $_POST['vorname'])){ echo $_POST['vorname']; }?>"/>
                    
                  </div>
                  </div>
                  <div class="kommentar <?php if( isset ( $errorsGb ['kommentar'])) { echo 'has-error'; }?>">
                    <label for"name" class="control-label col-lg-12">Kommentar:</label><br/>
                    <textarea name="kommentar"  for"textfeld" placeholder="Hier Ihr Kommentar..." cols="45" rows="8"  type="text" <?php if( isset( $post['kommentar'])){echo $_POST['kommentar'];}?>  class="form-control"  value="<?php if(isset($errors['kommentar'])){echo 'has-error';}?>"></textarea></br></textarea>
                  </div>
                  <br/> 
                  <input class="submit"type="submit" name"senden"/>
                
                  </div>

                </div>
        </fieldset>
    </form>
    <div class="comments">
          <h2>Kommentare:</h2>

            <?php
            $sql = "SELECT  * from kommentar"; 

            $result = mysqli_query($db_link, $sql);
            while ($row = mysqli_fetch_assoc($result)) {  
              echo "<div class='comment row'>";
                echo "<div class='col-md-9'>";
              echo "<p> <strong> ". $row['Name'].  " " .  $row['Vorname'] .":</p></strong><br/>"; 
              echo "<p> ". $row['Kommentar']. "</p>";
              echo "</div>";
                  echo "</div>";
            }

            mysqli_close($db_link);
            ?>

        </div>
         <div id="footer">
                  &copy; 2015<a href="mailto: nagendram@muster.com"> Nithuja Nagendram</a>
         </div>
  </body>
</html>

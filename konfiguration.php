<?php

error_reporting(E_ALL);

define ( 'MYSQL_HOST',      '127.0.0.1' );
define ( 'MYSQL_BENUTZER',  'root' );
define ( 'MYSQL_KENNWORT',  'root' );
define ( 'MYSQL_DATENBANK', 'daangelo' );
 
$db_link = mysqli_connect (MYSQL_HOST, 
                           MYSQL_BENUTZER, 
                           MYSQL_KENNWORT, 
                           MYSQL_DATENBANK);
 
if ( $db_link )
{
    
    //print_r( $db_link);
}
else
{
    // hier sollte dann später dem Programmierer eine
    // E-Mail mit dem Problem zukommen gelassen werden
    die('can not connect: ' . mysqli_error());
}
?>
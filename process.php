<?php
 include_once('includes/dbconfig.php');
 $ref = 'institution/'; 
 var_dump( $database);
 $fetchdata = $database->getReference($ref)->getValue();

 foreach( $fetchdata as $key => $row){
     echo $row['email'];
 }


?>
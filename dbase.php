<?php
try {
     //$bdd = new PDO('mysql:host=localhost;dbname=credit', 'root', '');
	 $bdd = new PDO('mysql:host=localhost;dbname=credit;charset=UTF8', 'root', '');
   } catch(Exception $e) {
       exit("Unable to connect to database.myiii mysql_error()");
    
  }
 
?>
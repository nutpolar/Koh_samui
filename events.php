<?php
// List of events
 $json = array();

 // Query that retrieves events
 $requete = "SELECT * FROM tb_event ORDER BY id";

 // connection to the database
 //$db['default']['hostname'] = 'localhost';
//$db['default']['username'] = 'project3_samui';
//$db['default']['password'] = '71zBWZEw';
//$db['default']['database'] = 'project3_samui';
 
// $db['default']['hostname'] = 'localhost';
//$db['default']['username'] = 'root';
//$db['default']['password'] = '';
//$db['default']['database'] = 'samui_db';
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=samui_db', 'root', '');
 } catch(Exception $e) {
  exit('Unable to connect to database.');
 }
 // Execute the query
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

 // sending the encoded result to success page
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);

?>
<?php 

try {
	$amis= new PDO("mysql:host=localhost;dbname=kyoto;charset=utf8","root","");

 echo "Connexion réussie";
} catch (Exception $e) {
	die(" Echec de la connexion ".$e->getMessage());
}
	
 ?>
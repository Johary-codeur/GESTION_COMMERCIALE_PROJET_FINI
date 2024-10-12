<?php 
$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

if(!empty($_POST['nomC']) and !empty($_POST['adresseC']) and !empty($_POST['contactC']) and !empty($_POST['mailC'])){

	$bdd->query('INSERT into clients(nom_client,contact_client,email_client,adresse_client) 
		values ("'.$_POST['nomC'].'","'.$_POST['contactC'].'","'.$_POST['mailC'].'","'.$_POST['adresseC'].'")');

	header('location:main.php?page=client_list');

}
 ?>
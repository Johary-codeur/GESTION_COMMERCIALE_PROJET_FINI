<?php 
$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

if(!empty($_POST['nomR']) and !empty($_POST['adresseR']) and !empty($_POST['mailR']) and !empty($_POST['contactR'])){


	$bdd->query('insert into revendeurs(nom_revendeur,adresse_rev,contact_rev,email_rev) 
		values ("'.$_POST['nomR'].'","'.$_POST['adresseR'].'","'.$_POST['contactR'].'","'.$_POST['mailR'].'")');

	header('location:main.php?page=partner_list');

 

}
 ?>

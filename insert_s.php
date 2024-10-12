<?php 

	$bdd= New PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	if(!empty($_POST['adresseM']) and !empty($_POST['respM']) and !empty($_POST['contM'])
	 and !empty($_POST['mailM']) and !empty($_POST['photoM'])){

		$bdd->query('INSERT INTO magasin(adresse_mag,nom_responsable,contact_mag,email_mag,photo) 
			VALUES ("'.$_POST['adresseM'].'","'.$_POST['respM'].'","'.$_POST['contM'].'","'.$_POST['mailM'].'","'.$_POST['photoM'].'")');

		header('location:main.php?page=shop_list');
	}
 ?>
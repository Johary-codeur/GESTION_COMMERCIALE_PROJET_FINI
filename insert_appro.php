<?php 
	
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	if(!empty($_POST['date']) and !empty($_POST['prod']) and !empty($_POST['mag'])and !empty($_POST['qte'])){

		$bdd->query('INSERT INTO appro_mag(date_appro,id_produit,id_magasin,quantite_appro) 

			VALUES ("'.$_POST['date'].'",'.$_POST['prod'].','.$_POST['mag'].','.$_POST['qte'].')');

		header('location:main.php?page=appro_mag');
	}

 ?>
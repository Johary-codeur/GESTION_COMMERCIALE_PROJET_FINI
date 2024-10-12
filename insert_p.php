<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	if(!empty($_POST['prod']) and !empty($_POST['dim']) and !empty($_POST['coul']) 
		and !empty($_POST['desc']) and !empty($_POST['gros']) and !empty($_POST['detail'])){

		$bdd->query('INSERT INTO produits(nom_produit,dimension,couleur,description,prix_gros,prix_detail) 
 VALUES ("'.$_POST['prod'].'","'.$_POST['dim'].'","'.$_POST['coul'].'","'.$_POST['desc'].'",
 '.$_POST['gros'].','.$_POST['detail'].')');

	header('location:main.php?page=product_list');
	}

 ?>
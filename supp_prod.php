<?php 
 
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	$bdd->query('DELETE FROM produits WHERE id_produit='.$_GET['id']);
	header('location:main.php?page=product_list');


 ?>
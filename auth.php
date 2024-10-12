<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	if(!empty($_POST['user']) and !empty($_POST['pwd'])){

$bdd->query('INSERT INTO users(users,password) VALUES ("'.$_POST['user'].'","'.$_POST['pwd'].'")');

	header('location:main.php');
	}else{

		echo"Mot de passe incorecte";
	}
 ?>
<?php 
	
	$bdd= New PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	if(!empty($_POST['rev']) and !empty($_POST['dt'])){

		
		$bdd->query('INSERT INTO facture_rev(id_revendeur,date_facture) 

			VALUES ('.$_POST['rev'].',"'.$_POST['dt'].'")');

			$lastidf = $bdd->query('select * from facture_rev order by id_fact desc limit 0,1');

		$lastid = $lastidf->fetch();


		
		header('location:main.php?page=vente_rev&idR='.$_POST['rev'].'&id='.$lastid['id_fact']);
	}

 ?>
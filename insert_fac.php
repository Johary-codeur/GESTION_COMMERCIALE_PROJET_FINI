<?php 
	
	$bdd= New PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	if(!empty($_POST['cl']) and !empty($_POST['magsi'])  and !empty($_POST['dt'])){

		
		$bdd->query('INSERT INTO facture_client(id_client,id_magasin,date_facture_cli) 

			VALUES ('.$_POST['cl'].','.$_POST['magsi'].',"'.$_POST['dt'].'")');

		$lastidf = $bdd->query('select * from facture_client order by id_fact_cli desc limit 0,1');

		$lastid = $lastidf->fetch();

		

		header('location:main.php?page=vente&idm='.$_POST['magsi'].'&idf='.$lastid['id_fact_cli']);
	}

 ?>
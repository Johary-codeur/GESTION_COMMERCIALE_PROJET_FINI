<?php 
	
	$bdd= New PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	echo 'INSERT INTO accompte(date_accompte,montant_accompte,id_revendeur,id_fact)VALUES ("'.$_POST['dt'].'",'.$_POST['mt'].','.$_POST['rev'].','.$_POST['idf'].')';

	if(!empty($_POST['rev']) and !empty($_POST['dt']) and !empty($_POST['mt']) and !empty($_POST['idf'])){


		$bdd->query('INSERT INTO accompte(date_accompte,montant_accompte,id_revendeur,id_fact)VALUES ("'.$_POST['dt'].'",'.$_POST['mt'].','.$_POST['rev'].','.$_POST['idf'].')');

			
	header('location:main.php?page=list_accompte&idf='.$_POST['idf']);
	}

 ?>
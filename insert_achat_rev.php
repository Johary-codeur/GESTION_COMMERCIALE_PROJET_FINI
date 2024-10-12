<?php 
	
	$bdd= New PDO('mysql:host=localhost;dbname=gestion_vente','root','');


	if(!empty($_POST['prod']) and !empty($_POST['rev']) 
		and !empty($_POST['qte'])  and !empty($_POST['idf'])){

		if($_POST['qte']>=5){

			$tv='En Gros';
		}else{
			$tv='Détail';
		}

		$bdd->query('INSERT INTO appro_rev(id_revendeur,id_produit,quantite_achat,id_fact) 

			VALUES ('.$_POST['rev'].','.$_POST['prod'].','.$_POST['qte'].','.$_POST['idf'].')');

		
		$ventes = $bdd->query('SELECT * FROM facture_rev fc 
JOIN revendeurs c ON c.id_revendeur=fc.id_revendeur 
JOIN appro_rev v ON v.id_fact=fc.id_fact JOIN produits p ON v.id_produit=p.id_produit
 WHERE fc.id_fact='.$_POST['idf']);
		$ttl =0;
		$ttls =0;

		while($vente = $ventes->fetch()){
			$pu = $vente['prix_detail'];

			if($vente['quantite_achat']>=5){

				$pu = $vente['prix_gros'];

			}

			$ttl = $pu*$vente['quantite_achat'];

			$ttls = $ttls+$ttl;

		}

		$bdd->query('update facture_rev set Montant_facture='.$ttls.' where id_fact='.$_POST['idf']);

		header('location:main.php?page=vente_rev&idR='.$_POST['rev'].'&id='.$_POST['idf']);
	}

 ?>
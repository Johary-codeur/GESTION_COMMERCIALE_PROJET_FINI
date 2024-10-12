<?php 
	
	$bdd= New PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	if(!empty($_POST['prod']) and !empty($_POST['cl']) and !empty($_POST['magsi']) 
		and !empty($_POST['qte'])  and !empty($_POST['idf'])){

		if($_POST['qte']>=5){

			$tv='En Gros';
		}else{
			$tv='Détail';
		}

		$bdd->query('INSERT INTO ventes(id_produit,id_client,id_magasin,quantite_vente,type_vente,id_fact_cli) 

			VALUES ('.$_POST['prod'].','.$_POST['cl'].','.$_POST['magsi'].','.$_POST['qte'].',"'.$tv.'",'.$_POST['idf'].')');

		$ventes = $bdd->query('SELECT * FROM facture_client fc 
JOIN clients c ON c.id_client=fc.id_client 
JOIN ventes v ON v.id_fact_cli=fc.id_fact_cli JOIN produits p ON v.id_produit=p.id_produit
JOIN magasin m ON m.id_magasin=fc.id_magasin WHERE fc.id_fact_cli='.$_POST['idf']);
		$ttl =0;

		while($vente = $ventes->fetch()){
			$pu = $vente['prix_detail'];

			if($vente['quantite_vente']>=5){

				$pu = $vente['prix_gros'];

			}

			$ttl = $pu*$vente['quantite_vente'];

			$ttls = $ttls+$ttl;

		}

		$bdd->query('update facture_client set montant_fact_cli='.$ttls.' where id_fact_cli='.$_POST['idf']);

		header('location:main.php?page=vente&idm='.$_POST['magsi'].'&idf='.$_POST['idf']);
	}

 ?>
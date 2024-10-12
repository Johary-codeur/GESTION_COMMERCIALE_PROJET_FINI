<?php 
	
	$bdd= New PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	$produits=$bdd->query('SELECT * FROM produits ');
	
	$clients=$bdd->query('SELECT * FROM clients cl join facture_client fc on fc.id_client=cl.id_client where fc.id_fact_cli='.$_GET['idf']);
	$client = $clients->fetch();

	$magasins = $bdd->query('SELECT * FROM magasin where id_magasin='.$_GET['idm']);
	$magasin = $magasins->fetch();


 ?>

<h1>VENTE DE MACRHANDISE</h1>

<div class="container  well">

<form class="form-horizontal" role="form" method="post" action="insert_v.php">

	<div class="form-group">
		<input type="hidden" name="idf" value="<?php echo $client['id_fact_cli']; ?>" >
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">PRODUITS</label>
		<div class="col-sm-9">
			<select type="text" id="form-field-1" name="prod" placeholder="Produits" class="col-xs-10 col-sm-5" />
			<option>Choisir PPRODUITS</option>
			<?php 
				while($prod=$produits->fetch()){

					echo'<option value="'.$prod['id_produit'].'">'.$prod['nom_produit'].' '.$prod['dimension'].'</option>';
				}

			 ?>

			</select>
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">CLIENT</label>
		<div class="col-sm-9">
			<div class="col-sm-9">
			<input type="text" name="" value="<?php echo $client['nom_client']; ?>" disabled="disabled" class="col-xs-10 col-sm-5"  id="form-field-1">
			<input type="hidden" name="cl" value="<?php echo $client['id_client']; ?>" >
	 	</div>
			
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">MAGASIN</label>
		<div class="col-sm-9">
			<input type="text" name="" value="<?php echo $magasin['adresse_mag']; ?>" disabled="disabled" class="col-xs-10 col-sm-5"  id="form-field-1">
			<input type="hidden" name="magsi" value="<?php echo $magasin['id_magasin']; ?>" >
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">QUANTITE</label>
		<div class="col-sm-9">
			<input type="number" id="form-field-1" name="qte" placeholder="QUANTITE" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	

	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">Enregister</button>
		<a class="btn btn-success" href="main.php?page=vente_list&id=<?php echo $_GET['idm'];?>">Términer</a>

									
	</div>

	
</form>
	
</div>
<style type="text/css">
	h1{
		margin-left:350px;
		font-weight: bold;
		margin-bottom: 20px;
		color: yellow;
	}

	.col-sm-3{
		font-weight:bold;
		margin-top:-8px;
		font-size:18px;
		list-style:none;
		font-family:sans-serif;
	}



	.col-xs-10{
		color: black;
		font-size: 16px;
		font-weight: bold;
		color:black;
		border-radius:5px;
	}

	.col-sm-9{
		width:600px;
	}
	.col-sm-5{
		color: black;
		font-size: 18px;
		font-weight: bold;
	}

	.btn-info{
		border-radius: 5px;
		width: 150px;
		font-size:18px;
		font-weight: bold;
		color:black;
		
	}
	.page-content{
		background: black;
	}
	.form-horizontal{
		background:;
	}
	.well{
		background:;
		width:1000px;
	}
</style>
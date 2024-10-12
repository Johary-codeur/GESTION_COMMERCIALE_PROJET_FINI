
<?php 

$revendeurs = $bdd->query('SELECT * FROM revendeurs where id_revendeur='.$_GET['idr']);
	$revendeur = $revendeurs->fetch();
		$facts=$bdd->query('SELECT * FROM facture_rev where id_fact='.$_GET['id']);
		$fact = $facts->fetch();

 ?>
<h1>Nouvelle accompte</h1>

<div class="container  well">

<form class="form-horizontal" role="form" method="post" action="insert_accompte.php">

	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Revendeur</label>
		<div class="col-sm-9">
			<div class="col-sm-9">
			<input type="text" name="" value="<?php echo $revendeur['nom_revendeur']; ?>" disabled="disabled" class="col-xs-10 col-sm-5"  id="form-field-1">
			<input type="hidden" name="rev" value="<?php echo $revendeur['id_revendeur']; ?>" >
	 	</div>
			
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Facture</label>
		<div class="col-sm-9">
			<input type="text" name="" value="FC/<?php echo $fact['id_fact']; ?>" disabled="disabled" class="col-xs-10 col-sm-5"  id="form-field-1">
			<input type="hidden" name="idf" value="<?php echo $fact['id_fact']; ?>" >
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Montant</label>
		<div class="col-sm-9">
			<input type="number" id="form-field-1" name="mt" placeholder="Montant de l'accompte" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Date accompte</label>
		<div class="col-sm-9">
			<input type="date" id="form-field-1" name="dt" placeholder="Montant de l'accompte" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	

	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">Enregister</button>
		

									
	</div>

	
</form>
	
</div>
<style type="text/css">
	h1{
		margin-left:400px;
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
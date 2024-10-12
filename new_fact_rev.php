<h1>Nouvelle Facture</h1>
<?php 
	$revendeurs = $bdd->query('SELECT * FROM revendeurs where id_revendeur='.$_GET['idR']);
	$revendeur = $revendeurs->fetch();
		$clients=$bdd->query('SELECT * FROM clients');

 ?>



<div class="container  well">

	<a href="main.php?page=new_partner" class="btn btn-success">Nouveau revendeur</a>
	<div class="alert alert-warning">Si le client n'est pas encore ajouter appuier sur Nouveau revendeur</div>

<form class="form-horizontal" role="form" method="post" action="insert_fact_rev.php">

	

	

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Revendeur</label>
		<div class="col-sm-9">
			<input type="text" name="" value="<?php echo $revendeur['nom_revendeur']; ?>" disabled="disabled" class="col-xs-10 col-sm-5"  id="form-field-1">
			<input type="hidden" name="rev" value="<?php echo $revendeur['id_revendeur']; ?>" >
	 	</div>
	</div>

	
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">DATE</label>
		<div class="col-sm-9">
			<input type="date" id="form-field-1" name="dt" placeholder="DATE" class="col-xs-10 col-sm-5" />
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

	.btn-success{
		color: black;
		background: green;
		font-weight: bold;

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


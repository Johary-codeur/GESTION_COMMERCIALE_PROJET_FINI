<?php 
	$magasins = $bdd->query('SELECT * FROM magasin where id_magasin='.$_GET['idm']);
	$magasin = $magasins->fetch();
		$clients=$bdd->query('SELECT * FROM clients');

 ?>

<h1>Nouvelle Facture</h1>

<div class="container  well">

	<a href="main.php?page=new_client" class="btn btn-success">Nouveau client</a>
	<div class="alert alert-warning">Si le client n'est pas encore ajouter appuier sur Nouveau client</div>

<form class="form-horizontal" role="form" method="post" action="insert_fac.php">

	

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">CLIENT</label>
		<div class="col-sm-9">
			<select type="text" id="form-field-1" name="cl" placeholder="Client" class="col-xs-10 col-sm-5" />
			<option>Choisir client</option>
			<?php 
					while($clie=$clients->fetch()){

						echo'<option value="'.$clie['id_client'].'">'.$clie['nom_client'].'</option>';
					}
					

			 ?>

			</select>
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

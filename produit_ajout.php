<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	$produits=$bdd->query('SELECT * FROM produits');
	
 ?>

<h1>NEW PRODUCTS</h1>

<div class="container  well">

<form class="form-horizontal" role="form" method="post" action="insert_p.php">

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">PRODUITS</label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="prod" placeholder="Produits" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">DIMENSION</label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="dim" placeholder="Dimension" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">COULEUR</label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="coul" placeholder="Couleur" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">DESCRITPION</label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="desc" placeholder="description" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">PRIX EN GROS</label>
		<div class="col-sm-9">
			<input type="number" id="form-field-1" name="gros" placeholder="Gros" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">PRIX EN DETAIL</label>
		<div class="col-sm-9">
			<input type="number" id="form-field-1" name="detail" placeholder="Detail" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">Enregister</button>
									
	</div>
</form>
</div>
<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	$magasin=$bdd->query('SELECT * FROM magasin');
	
 ?>

<h1>NEW SHOP </h1>

<div class="container  well">

<form class="form-horizontal" role="form" method="post" action="insert_s.php">

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ADRESSE</label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="adresseM" placeholder="Adresse" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">RESPONSABLE</label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="respM" placeholder="Responsable" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">CONTACT</label>
		<div class="col-sm-9">
			<input type="number" id="form-field-1" name="contM" placeholder="Contact" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">E-MAIL</label>
		<div class="col-sm-9">
			<input type="email" id="form-field-1" name="mailM" placeholder="E-mail" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">PHOTO</label>
		<div class="col-sm-9">
			<input type="photo" id="form-field-1" name="photoM" placeholder="Photo" class="col-xs-10 col-sm-5" />
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
<h1>NOUVEAU CLIENT</h1>

<div class="container  well">
<form class="form-horizontal" role="form" action="insert_c.php" method="post">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nom client </label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="nomC" placeholder="Nom du Client" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> adresse </label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="adresseC" placeholder="Adresse" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact </label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="contactC" placeholder="Contact" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
		<div class="col-sm-9">
			<input type="email" id="form-field-1" name="mailC" placeholder="E-mail" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>
	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">Enregister</button>
									
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
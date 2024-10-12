<?php 
	
	$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

	$magasin=$bdd->query('SELECT * FROM appro_mag');
	$produits=$bdd->query('SELECT * FROM produits ');

	$magasins = $bdd->query('SELECT * FROM magasin ');
	
	
 ?>
<h1>NEW APPROVISIONNEMENT</h1>

<div class="container  well">

<form class="form-horizontal" role="form" method="post" action="insert_appro.php">

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">DATE</label>
		<div class="col-sm-9">
			<input type="date" id="form-field-1" name="date" placeholder="date" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">PRODUITS</label>
		<div class="col-sm-9">
		
			<select type="text" id="form-field-1" name="prod" placeholder="Produits" class="col-xs-10 col-sm-5" />
			<option>CHOISIR PPRODUITS</option>
			<?php 
				while($prod=$produits->fetch()){

echo'<option value="'.$prod['id_produit'].'">'.$prod['nom_produit'].' '.$prod['dimension'].'</option>';
				}

			 ?>

			</select>
	 	</div>
	</div>


	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">MAGASIN</label>
		<div class="col-sm-9">
			<select type="text" id="form-field-1" name="mag" placeholder="Magasin" class="col-xs-10 col-sm-5" />
			<option>CHOISIR MAGASIN</option>
			<?php 
				while($mag=$magasins->fetch()){

echo'<option value="'.$mag['id_magasin'].'">'.$mag['adresse_mag'].'</option>';
				}

			 ?>
			</select>
			</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">QUANTITE_APPRO</label>
		<div class="col-sm-9">
			<input type="number" id="form-field-1" name="qte" placeholder="Quantite" class="col-xs-10 col-sm-5" />
	 	</div>
	</div>

	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">Enregister</button>
									
	</div>
	</form>
</div>
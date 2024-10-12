
<?php 
$clients = $bdd->query('SELECT * FROM facture_client fc join clients c on c.id_client=fc.id_client join magasin m on m.id_magasin=fc.id_magasin WHERE fc.id_magasin='.$_GET['id']);
$mags = $bdd->query('SELECT * FROM magasin WHERE id_magasin='.$_GET['id']);
$mag = $mags->fetch();

 ?>

<h1>Liste des Ventes Pour <?php echo $mag['adresse_mag']  ?></h1>
	<div class="row">
									<div class="col-xs-12">
										
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-bordered">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														
														<th>Facture N°</th>
														<th>Date facture</th>
														<th>CLIENT</th>
														<th>Magasin</th>
														<th>Montant</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>

													<?php while ($client = $clients->fetch()) {

														echo '
														<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														
														<td>CL/'.$client['id_fact_cli'].'</td>

														<td>'.$client['date_facture_cli'].'</td>
				
														<td>'.$client['nom_client'].'</td>

														
														<td>'.$client['adresse_mag'].'</td>

														<td>'.$client['montant_fact_cli'].' Ar</td>

														
												
														
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="detail_fact_cli.php?id='.$client['id_fact_cli'].'">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		
																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-heart bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>


														';

														
													} ?>
																									
												</tbody>
											</table>
										</div>
									</div>
								</div>
	<style type="text/css">
	h1{
		margin-left:250px;
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
	th{
		color: black;
		font-weight: bold;
		font-size: 20px;
		font-family:sans-serif;
	}

	tr,td{
		color: white;
		font-weight: bold;
		font-family: sans-serif;
		font-size: 16px;
	}
</style>
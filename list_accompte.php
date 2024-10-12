
<?php 
$accomptes  = $bdd->query('SELECT * FROM facture_rev fr 
JOIN revendeurs r ON fr.id_revendeur=r.id_revendeur 
JOIN accompte ac ON ac.id_fact=fr.id_fact WHERE fr.id_fact='.$_GET['idf'].' group by fr.id_fact');
$mags = $bdd->query('SELECT * FROM revendeurs r join facture_rev fr on fr.id_revendeur=r.id_revendeur WHERE id_fact='.$_GET['idf']);
$mag = $mags->fetch();

 ?>

<h1>Liste Accompte de "<?php echo $mag['nom_revendeur'];  ?>" sur le facture : "FC/<?php echo $_GET['idf'] ?>"</h1>
	<div class="row">
									<div class="col-xs-12">

										
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														
														
														<th>Date facture</th>
														<th>Date accompte</th>
														<th>Montant facture</th>
														<th>Total Accompte</th>
														<th>Réste à payer</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>

													<?php while ($accompte = $accomptes->fetch()) {

														$sommes = $bdd->query('select sum(Montant_accompte) as som from accompte where id_fact='.$accompte['id_fact']);

														$som = $sommes->fetch();

														$rap = $accompte['Montant_facture']-$som['som'];

														echo '
														<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														
														
														<td>'.$accompte['date_facture'].'</td>
				
														<td>'.$accompte['date_accompte'].'</td>

														<td>'.$accompte['Montant_facture'].' Ar</td>

														<td>'.$som['som'].' Ar</td>
														<td>'.$rap.' Ar</td>

																									
														
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="detail_fact_rev.php?id='.$accompte['id_fact'].'">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="blue" href="main.php?page=new_accompte&idr='.$accompte['id_revendeur'].'&id='.$accompte['id_fact'].'">
																	<i class="ace-icon fa  fa-credit-card bigger-130"></i>
																</a>

																<a class="red" href="&id='.$accompte['id_fact'].'">
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

	tr{
		color:white;
		font-weight: bold;
		font-size: 16px;
		font-family: sans-serif;
	}

	th{
		color: black;
		font-weight: bold;
		font-size:20px;
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
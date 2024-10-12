<?php 
$produits = $bdd->query('select * from produits');

 ?>

<h1>Liste de Produits</h1>
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
														<th>ID PRODUIT</th>
														<th>Produit</th>
														<th>Dimension</th>
														<th>Prix de gros</th>
														<th>Prix en détail</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>

													<?php while ($produit = $produits->fetch()) {

														echo '
														<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														<td>
															'.$produit['id_produit'].'
														</td>
														
														<td>
															'.$produit['nom_produit'].'  
															('.$produit['couleur'].')
														</td>
														<td>'.$produit['dimension'].'</td>
														<td>'.$produit['prix_gros'].' Ar</td>
														<td>'.$produit['prix_detail'].' Ar</td>
												
														
																												<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

<a class="red" href="supp_prod.php?id='.$produit['id_produit'].'"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

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
																					<i class="ace-icon fa fa-shopping-bag bigger-120"></i>
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
		list-style: none;
		margin-left: 400px;
		color: yellow;
		margin-bottom:5px;
		font-weight: bold;
		font-family: sans-serif;
	}
	.page-content{
		background: black;
	}
	td{
		color: white;
		font-family: sans-serif;
		font-weight: bold;
	}

</style>
<?php 
$partners = $bdd->query('select * from revendeurs');

 ?>

<h1>Liste des revendeurs</h1>
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
														<th>Photo</th>
														<th>Revendeur</th>
														<th>Adresse</th>
														<th class="hidden-480">Contact</th>

														
														<th class="hidden-480">Email</th>
														
														<th>Action</th>
													</tr>
												</thead>

												<tbody>

													<?php while ($partner = $partners->fetch()) {

														echo '
														<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														<td class="hidden-480">
															<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jasons Photo" />
														</td>
														<td>
															'.$partner['nom_revendeur'].'
														</td>
														<td>'.$partner['adresse_rev'].'</td>
														<td class="hidden-480">'.$partner['contact_rev'].'</td>
														<td>'.$partner['email_rev'].'</td>														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="main.php?page=new_fact_rev&idR='.$partner['id_revendeur'].'">
																	<i class="ace-icon fa fa-shopping-bag bigger-130"></i>
																</a>

																<a class="green" href="main.php?page=list_fact_rev&id='.$partner['id_revendeur'].'">
																	<i class="ace-icon fa fa-list bigger-130"></i>
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
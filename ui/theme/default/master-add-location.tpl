{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Add']} {$_L['Location']}</div>
						<div class="panel-body">
						
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{if isset($idreg)}{$_url}master/add_location_post/{$idreg}/{else}{$_url}master/add_location_post{/if}">  
							<div class="form-group">
								<label class="col-md-2 control-label">ID {$_L['Region']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control dinline" name="idregion" id="idregion" autocomplete="off" value="{if isset($idreg)}{$idreg}{/if}" required>
								</div>
								<div class="col-md-4" id="dataTable">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIdRegion"><i class="fa fa-cogs"></i>
									</button>

									<div class="modal fade" id="modalIdRegion" tabindex="-1" role="dialog" aria-labelledby="modalIdRegionLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalIdRegionLabel">ID {$_L['Region']}</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body-h500">
													<div class="col-sm-12"> 
														<input id="search" value="" class="form-control" type="search" placeholder="Search" aria-label="Search">
													</div>
													<div id="loader" class="col-sm-12 text-center dnone h90 justify-content-center">
														<img style="width:50px" src="{$_theme}/images/spinner.gif" class="loader" alt="">
													</div>
													<div class="col-sm-12 dataTable table-responsive h90 overflow-y" >
														<table class="table table-collapse table-bordered tableInput" style="font-size:1.2rem;">
															<tbody>

															</tbody>
														</table>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>          
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Name']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" required autocomplete="off" autofocus>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Type']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control dinline" name="type" id="type" autocomplete="off" required>
								</div>
								<div class="col-md-4" id="dataTable">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalType"><i class="fa fa-cogs"></i>
									</button>

									<div class="modal fade" id="modalType" tabindex="-1" role="dialog" aria-labelledby="modalTypeLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalTypeLabel">Type</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body-h500">
													<div class="col-sm-12"> 
														<input id="search" value="" class="form-control" type="search" placeholder="Search" aria-label="Search">
													</div>
													<div id="loader" class="col-sm-12 text-center dnone h90 justify-content-center">
														<img style="width:50px" src="{$_theme}/images/spinner.gif" class="loader" alt="">
													</div>
													<div class="col-sm-12 dataTable table-responsive h90 overflow-y" >
														<table class="table table-collapse tableInput" style="font-size:1.2rem;">
															<tbody>

															</tbody>
														</table>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Address']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="address" name="address">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="Aktif" selected>Aktif</option>
										<option value="In-Aktif">In-Aktif</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Home_Pass']}</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="homepass" name="homepass" autocomplete="off"> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Occupancy']}</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="occupancy" name="occupancy" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Add']}</button>
									Or <a href="{if isset($idreg)}{$_url}master/vloc_region{$idreg}{else}{$_url}master/location/{/if}">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
{include file="sections/footer.tpl"}

{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Add']} ODP Port - {$namaodp}</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{$_url}region/{$idreg}/{$idloc}/{$idodp}/add_odp_port_post">       
							<div class="form-group">
								<label class="col-md-2 control-label">Port ODP</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="portodp" required>
										{foreach $portsisa as $port}
											<option value="{$port}">{$port}</option>
										{/foreach}
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">ID {$_L['Customers']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="idcustomer" name="idcustomer" autocomplete="off">
								</div>
								<div class="col-md-4" id="dataTable">

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIdCust"><i class="fa fa-cogs"></i>
									</button>

									<div class="modal fade" id="modalIdCust" tabindex="-1" role="dialog" aria-labelledby="modaldCustLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modaldCustLabel">ID Pelanggan</h5>
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
								<label class="col-md-2 control-label">{$_L['Internet_Numb']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="internetnumb" name="internetnumb" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status Port ODC</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="ACTIVE">ACTIVE</option>
										<option value="IDLE">IDLE</option>
										<option value="CHURN">CHURN</option>
										<option value="BROKEN">BROKEN</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Revenue</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="revenue" placeholder="Rp." name="revenue" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LAT</label>
								<div class="col-md-6">
									<input type="text" class="form-control decimal" id="lat" name="lat" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LON</label>
								<div class="col-md-6">
									<input type="text" class="form-control decimal" id="lon" name="lon" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Add']}</button>
									Or <a href="{$_url}region/{$idreg}/{$idloc}/{$idodp}/">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
{include file="sections/footer.tpl"}

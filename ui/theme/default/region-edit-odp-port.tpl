{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Edit']} {$namaodp} -  Port {$port['port_odp']}</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{$_url}region/{$idreg}/{$idloc}/{$idodp}/edit_odp_port_post">       
							<input type="hidden" class="form-control" id="idport" name="idport" value="{$port['id']}">
							<div class="form-group">
								<label class="col-md-2 control-label">Port ODP</label>
								<div class="col-md-6">
									<input type="text" class="form-control disabled" id="portodp" name="portodp" required autocomplete="off" value="{$port['port_odp']}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">ID {$_L['Customers']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="idcustomer" name="idcustomer" autocomplete="off" value="{$port['id_pelanggan']}">
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
									<input type="text" class="form-control" id="internetnumb" name="internetnumb" autocomplete="off" value="{$port['no_inet']}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status Port ODC</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option {if $port['status_port_odp'] eq 'ACTIVE'}selected{/if} value="ACTIVE">ACTIVE</option>
										<option {if $port['status_port_odp'] eq 'IDLE'}selected{/if} value="IDLE">IDLE</option>
										<option {if $port['status_port_odp'] eq 'CHURN'}selected{/if} value="CHURN">CHURN</option>
										<option {if $port['status_port_odp'] eq 'BROKEN'}selected{/if} value="BROKEN">BROKEN</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Revenue</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="revenue" name="revenue" autocomplete="off" 
									placeholder="Rp." value="{$revenue}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LAT</label>
								<div class="col-md-6">
									<input type="text" maxlength="13" class="form-control decimal" id="lat" name="lat" autocomplete="off" value="{$port['lat']}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LON</label>
								<div class="col-md-6">
									<input type="text" maxlength="13" class="form-control decimal" id="lon" name="lon" autocomplete="off" value="{$port['lon']}">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Save']}</button>
									Or <a href="{$_url}region/{$idreg}/{$idloc}/{$idodp}">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
{include file="sections/footer.tpl"}

{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Add']} ODP</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{$_url}master/add_odp_post">         
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Name']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" required autocomplete="off" autofocus>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">ID ODC</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="idodc" name="idodc" autocomplete="off" required>
								</div>
								<div class="col-md-4" id="dataTable">

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIdOdc"><i class="fa fa-cogs"></i>
									</button>

									<div class="modal fade" id="modalIdOdc" tabindex="-1" role="dialog" aria-labelledby="modaldIdOdcLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalIdOdcLabel">ID ODC</h5>
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
								<label for="portodc" class="col-md-2 control-label">Port ODC</label>
								<div class="col-md-6" id="dataSelect">
									<select class="form-control" id="portodc" name="portodc" required>
		
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status Port ODC</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="ACTIVE" selected>ACTIVE</option>
										<option value="UNUSED">UNUSED</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Capacity']}</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="capacity" name="capacity" autocomplete="off">
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
									Or <a href="{$_url}master/odp">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

{include file="sections/footer.tpl"}

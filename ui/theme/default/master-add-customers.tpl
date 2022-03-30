{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Add']} {$_L['Customers']}</div>
						<div class="panel-body">
						
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{$_url}master/add_customers_post">            
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Name']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" required autocomplete="off" autofocus>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Address']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="address" name="address">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Telp_Numb']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="telp" name="telp">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="BERLANGGANAN" selected>BERLANGGANAN</option>
										<option value="BELUM BERLANGGANAN">BELUM BERLANGGANAN</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Add']}</button>
									Or <a href="{$_url}master/customers">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
{include file="sections/footer.tpl"}

{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Edit_Customer']}</div>
						<div class="panel-body">
						
						<form class="form-horizontal" method="post" role="form" action="{$_url}master/edit_customers_post" > 
						<input type="hidden" name="id" value="{$d['id']}">           
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Name']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" value="{$d['nama']}" required autofocus>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Address']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="alamat" name="alamat" value="{$d['alamat']}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Telp_Numb']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="alamat" name="telp" value="{$d['no_telp']}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="BERLANGGANAN" {if $d['status'] eq 'BERLANGGANAN'}selected{/if}>BERLANGGANAN</option>
										<option value="BELUM BERLANGGANAN" {if $d['status'] eq 'BELUM BERLANGGANAN'}selected{/if}>BELUM BERLANGGANAN</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Save']}</button>
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

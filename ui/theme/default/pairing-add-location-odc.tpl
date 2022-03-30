{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Add']} {$_L['Location']} - ODC</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{$_url}pairing/add_location_odc_post">
						<div class="row">
							<div class="col-md-6">
								<p class="">{$_L['Location']}</p>
								<div class="form-group">
									{foreach $d as $loc}
										<div class="row">
											<div class="col-lg-10 col-md-6">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="lokasi" value="{$loc['id']}"> 
												</span>
												<input type="text" class="form-control disabled" name="namalokasi" value="{$loc['nama']}">
												</div>
											</div>
										</div>
									{/foreach}
								</div>
							</div>
							<div class="col-md-6">
								<p class="">ODC</p>
								<div class="form-group">
									{foreach $c as $odc}
										<div class="row">
											<div class="col-lg-10 col-md-6">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="odc" value="{$odc['id']}" required>
												</span>
												<input type="text" class="form-control disabled" name="namaodc" value="{$odc['nama']}">
												</div>
											</div>
										</div>
									{/foreach}
								</div>
							</div>
						</div>	
							<div class="form-group">
								<div class=" col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Add']}</button>
									Or <a href="{$_url}pairing/location-odc">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

{include file="sections/footer.tpl"}

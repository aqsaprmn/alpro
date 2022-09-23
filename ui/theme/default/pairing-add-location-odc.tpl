{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked">
					<div class="panel-heading">{$_L['Add']} {$_L['Location']} - ODC</div>
					<div class="panel-body pt-3">
					<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{$_url}pairing/add_location_odc_post">
					<div class="row">
						<div class="col-md-6">
							<p class=""><b>{$_L['Location']}</b></p>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" id="pair-loc" name="pair-loc" placeholder="Search Location" autocomplete="off">
								</div>
							</div>
							<div class="form-group pair">
								{foreach $d as $loc}
									<div style="margin-right:1px;margin-left:1px" class="row">
										<div class="col-sm-12">
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
							<p class=""><b>ODC</b></p>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" id="pair-odc" name="pair-loc" placeholder="Search ODC" autocomplete="off" >
								</div>
							</div>
							<div class="form-group pair">
								{foreach $c as $odc}
									<div style="margin-right:1px;margin-left:1px class="row">
										<div class="col-sm-12">
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
						<div class="form-group mb0">
							<div class="col-lg-10">
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

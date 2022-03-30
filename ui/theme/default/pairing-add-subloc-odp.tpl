{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Add']} {$_L['SubLoc']} - ODP</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{$_url}pairing/add_subloc_odp_post">
						<div class="row">
							<div class="col-md-6">
								<p class="">{$_L['SubLoc']}</p>
								<div class="form-group">
									{foreach $d as $loc}
										<div class="row">
											<div class="col-lg-10 col-md-6">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="sublokasi" value="{$loc['id']}"> 
												</span>
												<input type="text" class="form-control disabled" name="namasublokasi" value="{$loc['nama']}">
												</div>
											</div>
										</div>
									{/foreach}
								</div>
							</div>
							<div class="col-md-6">
								<p class="">ODP</p>
								<div class="form-group">
									{foreach $c as $odp}
										<div class="row">
											<div class="col-lg-10 col-md-6">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="odp" value="{$odp['id']}" required>
												</span>
												<input type="text" class="form-control disabled" name="namaodp" value="{$odp['nama']}">
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
									Or <a href="{$_url}pairing/subloc-odp">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

{include file="sections/footer.tpl"}

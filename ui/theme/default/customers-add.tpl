{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Add_Customer']}</div>
						<div class="panel-body">
						
						<form class="form-horizontal" method="post" role="form" action="{$_url}customers/add-post" >            
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Witel']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="witel" name="witel">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Site']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="Site" name="Site">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Name']}</label>
								<div class="col-md-6">
									<input type="password" class="form-control" id="Site" name="Site">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Address']}</label>
								<div class="col-md-6">
									<input type="password" class="form-control" id="Address" name="Address">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['SC_Number']}</label>
								<div class="col-md-6">
									<input name="scnumber" 
									type="text"
									id="scnumber"  class="form-control"></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Internet_Number']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="internetnumber" name="internetnumber">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Installation']}</label>
								<div class="col-md-6">
									<input type="date" class="form-control" id="installation" name="installation">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Save']}</button>
									Or <a href="{$_url}customers/list">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

{include file="sections/footer.tpl"}

{include file="sections/header-new.tpl"}
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Add']} ODC</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="{$_url}master/add_odc_post">         
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Name']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" required autocomplete="off" autofocus>
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
								<label class="col-md-2 control-label">{$_L['Number_Of_Splitter']}</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="splitter" name="splitter" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Capacity']}</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="capacity" name="capacity" required autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Add']}</button>
									Or <a href="{$_url}master/odc">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

{include file="sections/footer.tpl"}

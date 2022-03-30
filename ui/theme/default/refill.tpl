{include file="sections/header.tpl"}

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">Aktikan Voucher</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="{$_url}prepaid/refill-post" >            
							<div class="form-group">
								<label class="col-md-2 control-label">Kode Voucher</label>

								<div class="col-md-6">
									<input type="hidden" class="form-control" id="id" name="id" value="{$c['id']}">
									<input type="text" class="form-control" id="code" name="code" value="{$c['code']}" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Kata Sandi</label>
								<div class="col-md-6">
									<input type="password" class="form-control" id="password" name="password" placeholder="Ketikkan kata sandi">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-success waves-effect waves-light" type="submit">Aktifkan</button> 
									Atau <a href="{$_url}prepaid/voucher">Batal</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

{include file="sections/footer.tpl"}

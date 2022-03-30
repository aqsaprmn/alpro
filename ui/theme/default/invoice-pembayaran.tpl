{include file="sections/header.tpl"}

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel-default">
            <div class="panel-heading">Penyetoran Pembayaran Voucher</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="{$_url}payment/agent-post">
				<input type="hidden" name="user_id" value="{$d['user_id']}">
				<input type="hidden" name="setoran" value="{$d['setoran']}">
                    <div class="form-group">
						<label class="col-md-2 control-label">Nama Agen</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="fullname" name="fullname" value="{$d['fullname']}" readonly>
						</div>
                    </div>

                    <div class="form-group">
						<label class="col-md-2 control-label">Nomor Telpon</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{$d['phonenumber']}" readonly>
						</div>
                    </div>
					
                    <div class="form-group">
						<label class="col-md-2 control-label">Alamat</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="address" name="address" value="{$d['address']}" readonly>
						</div>
                    </div>
					
                    <div class="form-group">
						<label class="col-md-2 control-label">Total Yang Harus Disetor</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="total" name="total" value="{$d['status']}" readonly>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit">Bayar Sekarang</button> 
							Atau <a href="{$_url}prepaid/voucher">Nanti Saja</a>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>

{include file="sections/footer.tpl"}

{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">VOUCHER PINTER</div>
								<div class="panel-body">
								{if $_admin['user_type'] eq 'Admin'}
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="{$_url}prepaid/voucher/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="code" class="form-control" placeholder="{$_L['Search_by_Code']}...">
												<div class="input-group-btn">
													<button class="btn btn-success">{$_L['Search']}</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<div class="btn-group btn-group-justified" role="group">
												<div class="btn-group" role="group">
												<a href="{$_url}prepaid/add-voucher" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add_Voucher']}</a>
												</div>
												<div class="btn-group" role="group">
												<a href="{$_url}prepaid/print-voucher" target="print_voucher" class="btn btn-info"><i class="ion ion-android-print"> </i> Print</a>
												</div>
											</div>
										</div>&nbsp;
									</div>
								{/if}
						<div class="table-responsive">
						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr> 
									<th>Paket</th>
									<th>Kode</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							{foreach $d as $ds}
								{if $ds['status'] eq '0' || $ds['status'] eq '1'}
								<tr>
									<td>{$ds['name_plan']}</td>
									<td>{$ds['code']}</td>
									<td>
										{if $ds['status'] eq '0'}
										<a href="{$_url}prepaid/voucher-refill/{$ds['id']}" id="{$ds['id']}" class="btn btn-primary btn-sm">Aktifkan</a>
										{else}
										<a href="{$_url}prepaid/voucher-refill/{$ds['id']}" id="{$ds['id']}" class="btn btn-danger btn-sm" disabled>Terjual</a>
										{/if}
									</td>
								</tr>
								{/if}
							{/foreach}
							</tbody>
						</table>
						</div>
						{$paginator['contents']}
								</div>
							</div>
						</div>
					</div>
{include file="sections/footer.tpl"}

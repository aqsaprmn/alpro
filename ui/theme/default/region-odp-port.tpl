{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">{$title}</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="{$_url}region/{$idreg}/{$idloc}/{$idodp}">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="keyword" class="form-control" placeholder="{$_L['Search_Data']} ...">
												<div class="input-group-btn">
													<button class="btn btn-success">{$_L['Search']}</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="{$_url}region/{$idreg}/{$idloc}/{$idodp}/add_odp_port" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add']} ODP Port</a>
										</div>&nbsp;
									</div>
									{if isset($msg)}
									<div class="mb10">
										<span class="">{$msg}</span>
									</div>
									{else}
									<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr style="font-size:1.1rem;">
												<th class="text-center">Port ODP</th>
												<th class="text-center hidden">ID {$_L['Customers']}</th>
												<th class="text-center">{$_L['Cust_Name']}</th>
												<th class="text-center">{$_L['Cust_Address']}</th>
												<th class="text-center">{$_L['Internet_Numb']}</th>
												<th class="text-center">Status Port ODP</th>
												<th class="text-center">Revenue</th>
												<th class="text-center hidden">LAT</th>
												<th class="text-center hidden">LON</th>
												<th class="text-center">{$_L['Action']}</th>
											</tr>
										</thead>
										<tbody>
											{foreach $port as $po}
												<tr style="font-size:1.1rem;">
													<td class="text-center">{$po['port_odp']}</td>
													<td class="text-center hidden">{$po['id_pelanggan']}</td>
													<td style="width:160px;" class="">{$po['nama']}</td>
													<td class="">{$po['alamat']}</td>
													<td class="text-center">{$po['no_inet']}</td>
													<td class="text-center">{$po['status_port_odp']}</td>
													<td class="text-center">{$po['revenue']}</td>
													<td class="text-center hidden">{$po['lat']}</td>
													<td class="text-center hidden">{$po['lon']}</td>
													<td style="width:160px;" class="text-center">
														<a href="{$_url}region/{$idreg}/{$idloc}/{$idodp}/edit_odp_port/{$po['id']}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> {$_L['Edit']}</a>
														<a href="" id="{$po['id']}" data-reg="{$idreg}" data-loc="{$idloc}" data-odp="{$idodp}" class="btn btn-danger btn-sm cdelete-odp-port"><i class="fa fa-trash-o" aria-hidden="true"></i> {$_L['Delete']}</a>
													</td>
												</tr>
											{/foreach}
										</tbody>
									</table>
									{/if}
									</div>
								</div>
							</div>
						</div>
					</div>
{include file="sections/footer.tpl"}

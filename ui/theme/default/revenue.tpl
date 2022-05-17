{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								{if $title eq 'Lokasi'}
									<div class="panel-heading">Revenue - {$treg['nama']} - {$title}</div>
								{else}
									<div class="panel-heading">Revenue - {$title}</div>
								{/if}
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-12">
											<form id="site-search" method="post" action="{$_url}region/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="name" class="form-control" placeholder="{$_L['Search_by_Name']}...">
												<div class="input-group-btn">
													<button class="btn btn-success">{$_L['Search']}</button>
												</div>
											</div>
											</form>
										</div>
										&nbsp;
									</div>
										<div class="table-responsive">
										<table class="table table-bordered">
										{if $title eq 'Lokasi'}
											<thead>
												<tr style="font-size:1.2rem;">
													<th class="text-center">No</th>
													<th class="text-center">{$_L['Location']}</th>
													<th class="text-center">Revenue</th>
													<th class="text-center">{$_L['Action']}</th>
												</tr>
											</thead>
											<tbody>
												{foreach $loc as $l}
													<tr style="font-size:1.2rem;">
														<td class="text-center">{$i++}</td>
														<td>{$l['nama']}</td>
														<td>Rp. 1.000.000.000</td>
														<td style="width:160px;" class="text-center">
															<a href="{$_url}revenue/lokasi/{$l['id']}" class="btn btn-primary btn-sm" data-id=""><i class="fa fa-eye" aria-hidden="true"></i> {$_L['View']}</a>
														</td>
													</tr>
												{/foreach}
											</tbody>
										{else}
											<thead>
													<tr style="font-size:1.2rem;">
														<th class="text-center">No</th>
														<th class="text-center">Region</th>
														<th class="text-center">Revenue</th>
														<th class="text-center">{$_L['Action']}</th>
													</tr>
												</thead>
												<tbody>
													{foreach $treg as $tr}
														<tr style="font-size:1.2rem;">
														<td class="text-center">{$i++}</td>
														<td>{$tr['nama']}</td>
														<td>Rp. 1.000.000.000</td>
														<td style="width:160px;" class="text-center">
															<a href="{$_url}revenue/lokasi/{$tr['id']}" class="btn btn-primary btn-sm" data-id=""><i class="fa fa-eye" aria-hidden="true"></i> {$_L['View']}</a>
														</td>
													</tr>
												{/foreach}
											</tbody>
										{/if}
										</table>
									</div>
									{if $paginator eq !null}
									{$paginator['contents']}
									{/if}
								</div>
							</div>
						</div>
					</div>
{include file="sections/footer.tpl"}

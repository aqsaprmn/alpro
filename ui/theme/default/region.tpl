{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">{$title}</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-12">
											<form id="site-search" method="post" action="{$_url}region/{$idreg}/{$idloc}">
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
									{if isset($msg)}
										<div class="mb10">
											<span class="">{$msg}</span>
										</div>
									{else}
									{foreach $odc as $odca}
										<div class="mb10">
											<span class="text-bold">ODC : </span> {$odca['nama_odc']}
										</div>
										<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr style="font-size:1.2rem;">
													<th class="text-center">ID</th>
													<th class="text-center">ODP {$_L['Name']}</th>
													<th class="text-center">{$_L['Capacity']}</th>
													<th class="text-center">{$_L['Over']}</th>
													<th class="text-center">{$_L['Action']}</th>
												</tr>
											</thead>
											<tbody>
												{foreach $odp as $odpa}
														{if $odpa['id_odc'] eq $odca['id_odc']}
														<tr style="font-size:1.2rem;">
															<td class="text-center">{$odpa['id']}</td>
															<td>{$odpa['nama']}</td>
															<td class="text-center">{$odpa['kapasitas']}</td>
															<td class="text-center">{foreach $portodpsisa as $portsi}{if $portsi['idodp'] eq $odpa['id']}{$portsi['portsisa']}{/if}{/foreach}</td>
															<td style="width:160px;" class="text-center">
																<a href="{$_url}region/{$idreg}/{$idloc}/{$odpa['id']}" class="btn btn-primary btn-sm" data-id="{$odpa['id']}"><i class="fa fa-eye" aria-hidden="true"></i> {$_L['View']}</a>
															</td>
														</tr>
														{/if}
												{/foreach}
											</tbody>
										</table>
									{/foreach}
									{/if}
									</div>
								</div>
							</div>
						</div>
					</div>
{include file="sections/footer.tpl"}

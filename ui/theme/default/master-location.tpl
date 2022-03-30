{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">{if isset($namareg)}{$namareg} - {/if}{$_L['Main']} {$_L['Location']}</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" class="keyword" method="post" action="{if isset($namareg)}{$_url}master/vloc_region{$idreg}{else}{$_url}master/location/{/if}">
												<div class="input-group">
													<div class="input-group-addon">
														<span class="fa fa-search"></span>
													</div>
													<input type="text" name="name" class="form-control" placeholder="{$_L['Search_by_Name']}..." value="">
													<div class="input-group-btn">
														<button class="btn btn-success">{$_L['Search']}</button>
													</div>
												</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="{if isset($namareg)}{$_url}master/add_location/{$idreg}{else}{$_url}master/add_location{/if}" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add']} {$_L['Location']}</a>
										</div>&nbsp;
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<thead>
												<tr style="font-size:1.2rem;">
													<th class="text-center">{$_L['Name']}</th>
													<th class="text-center">{$_L['Type']}</th>
													<th class="text-center">{$_L['Address']}</th>
													<th class="text-center">Status</th>
													<th class="text-center">{$_L['Home_Pass']}</th>
													<th class="text-center">{$_L['Map']}</th>
													<th class="text-center">{$_L['Occupancy']}</th>
													<th class="text-center">{$_L['Action']}</th>
												</tr>
											</thead>
											<tbody>
												{foreach $d as $loc}
													<tr style="font-size:1.2rem;">
														<td>{$loc['nama']}</td>
														<td class="text-center">{$loc['tipe']}</td>
														<td>{$loc['alamat']}</td>
														<td class="text-center">{$loc['status']}</td>
														<td class="text-center">{$loc['homepass']}</td>
														<td>Map</td>
														<td class="text-center">{$loc['occupancy']}</td>
														<td style="width:240px;" class="text-center">
															<a href="{$_url}master/
															vsubloc_loc{$loc['id']}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> {$_L['View']}</a>
															<a href="{if isset($namareg)}{$_url}master/
															edit_location/{$loc['id']}/{$idreg}/{else}{$_url}master/
															edit_location/{$loc['id']}{/if}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> {$_L['Edit']}</a>
															<a href="{if isset($namareg)}{$_url}master/delete_location_post/{$loc['id']}/{$idreg}/{else}{$_url}master/delete_location_post/{$loc['id']}{/if}" id="{$loc['id']}" data-idreg="{if isset($namareg)}{$idreg}{/if}" class="btn btn-danger btn-sm cdelete-loc"><i class="fa fa-trash-o" aria-hidden="true"></i> {$_L['Delete']}</a>
														</td>
													</tr>
												{/foreach}
											</tbody>
										</table>
									</div>
									{if isset($msg)}
										<div class="mb10 text-center">
											<span class="">{$msg}</span>
										</div>
									{/if}
									{if isset($paginator)}
										{$paginator['contents']}
									{/if}
								</div>
							</div>
						</div>
					</div>

{include file="sections/footer.tpl"}

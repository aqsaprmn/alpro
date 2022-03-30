{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">{if isset($namaloc)}{$namaloc} - {/if}{$_L['Main']} {$_L['SubLoc']}</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" class="keyword" method="post" action="{if isset($namaloc)}{$_url}master/vsubloc_loc{$idloc}/{else}{$_url}master/sublocation/{/if}">
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
										<div class="col-md-4">
											<a href="{if isset($namaloc)}{$_url}master/add_sublocation/{$idloc}{else}{$_url}master/add_sublocation/{/if}" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add']} {$_L['SubLoc']}</a>
										</div>&nbsp;
									</div>
									<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr style="font-size:1.2rem;">
												<th class="text-center">Id {$_L['Location']}</th>
												<th class="text-center">{$_L['Name']}</th>
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
													<td class="text-center">{$loc['id_lokasi']}</td>
													<td>{$loc['nama']}</td>
													<td class="text-center">{$loc['status']}</td>
													<td class="text-center">{$loc['homepass']}</td>
													<td class="text-center">Map</td>
													<td class="text-center">{$loc['occupancy']}</td>
													<td style="width:160px;" align="center">
														<a href="{if isset($namaloc)}{$_url}master/edit_sublocation/{$loc['id']}/{$idloc}/{else}{$_url}master/edit_sublocation/{$loc['id']}/{/if}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> {$_L['Edit']}</a>
														<a href="{if isset($namaloc)}{$_url}master/delete_sublocation_post/{$loc['id']}/{$idloc}/{else}{$_url}master/delete_sublocation_post/{$loc['id']}{/if}" id="{$loc['id']}" data-idloc="{if isset($namaloc)}{$idloc}{/if}" class="btn btn-danger btn-sm cdelete-subloc"><i class="fa fa-trash-o" aria-hidden="true"></i> {$_L['Delete']}</a>
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

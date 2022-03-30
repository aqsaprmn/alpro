{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">{$_L['Main']} {$_L['Location']} - ODC</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="{$_url}pairing/location-odc/">
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
											<a href="{$_url}pairing/add_location_odc" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add']} {$_L['Location']} - ODC</a>
										</div>&nbsp;
									</div>
									<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr style="font-size:1.2rem;">
												<th class="text-center">ID ODC</th>
												<th class="text-center">ODC {$_L['Name']}</th>
												<th class="text-center">ID {$_L['Location']}</th>
												<th class="text-center">{$_L['Location']} {$_L['Name']}</th>
												<th class="text-center">{$_L['Action']}</th>
											</tr>
										</thead>
										<tbody>
											{foreach $d as $locodc}
												<tr style="font-size:1.2rem;">
													<td class="text-center">{$locodc['id_odc']}</td>
													<td>{$locodc['nama_odc']}</td>
													<td class="text-center">{$locodc['id_lokasi']}</td>
													<td>{$locodc['nama_lokasi']}</td>
													<td align="center">
														<a href="{$_url}pairing/edit_location_odc/{$locodc['id_odc']}/{$locodc['id_lokasi']}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> {$_L['Edit']}</a>
														<a href="{$_url}pairing/delete_location_odc_post/{$locodc['id_odc']}/{$locodc['id_lokasi']}" id="" data-idodc="{$locodc['id_odc']}" 
														data-idloc="{$locodc['id_lokasi']}"  class="btn btn-danger btn-sm cdelete-loc-odc"><i class="fa fa-trash-o" aria-hidden="true"></i> {$_L['Delete']}</a>
													</td>
												</tr>
											{/foreach}
										</tbody>
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

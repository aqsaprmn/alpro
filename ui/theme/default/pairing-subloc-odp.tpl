{include file="sections/header-new.tpl"}
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">{$_L['Main']} {$_L['SubLoc']} - ODP</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="{$_url}master/odc/">
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
											<a href="{$_url}pairing/add_subloc_odp" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add']} {$_L['SubLoc']} - ODP</a>
										</div>&nbsp;
									</div>
									<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr style="font-size:1.2rem;">
												<th class="text-center">ID ODP</th>
												<th class="text-center">ODP {$_L['Name']}</th>
												<th class="text-center">ID {$_L['SubLoc']}</th>
												<th class="text-center">{$_L['SubLoc']} {$_L['Name']}</th>
												<th class="text-center">{$_L['Action']}</th>
											</tr>
										</thead>
										<tbody>
											{foreach $d as $sublocodp}
												<tr style="font-size:1.2rem;">
													<td class="text-center">{$sublocodp['id_odp']}</td>
													<td>{$sublocodp['nama_odp']}</td>
													<td class="text-center">{$sublocodp['id_sub_lokasi']}</td>
													<td>{$sublocodp['nama_sub_lokasi']}</td>
													<td align="center">
														<a href="{$_url}pairing/edit_subloc_odp/{$sublocodp['id_odp']}/{$sublocodp['id_sub_lokasi']}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> {$_L['Edit']}</a>
														<a href="{$_url}pairing/delete_subloc_odp_post/{$sublocodp['id_odp']}/{$sublocodp['id_sub_lokasi']}" id=""
														data-idodp="{$sublocodp['id_odp']}" 
														data-idsublokasi="{$sublocodp['id_sub_lokasi']}" class="btn btn-danger btn-sm cdelete-subloc-odp"><i class="fa fa-trash-o" aria-hidden="true"></i> {$_L['Delete']}</a>
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

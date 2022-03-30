{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">Main ODC</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" class="keyword" method="post" action="{$_url}master/odc/">
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
											<a href="{$_url}master/add_odc" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add']} ODC</a>
										</div>&nbsp;
									</div>
									<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr style="font-size:1.2rem;">
												<th class="text-center">{$_L['Name']}</th>
												<th class="text-center">LAT</th>
												<th class="text-center">LON</th>
												<th class="text-center">{$_L['Number_Of_Splitter']}</th>
												<th class="text-center">{$_L['Capacity']}</th>
												<th class="text-center">{$_L['Action']}</th>
											</tr>
										</thead>
										<tbody>
											{foreach $d as $loc}
												<tr style="font-size:1.2rem;">
													<td>{$loc['nama']}</td>
													<td class="text-center">{$loc['lat']}</td>
													<td class="text-center">{$loc['lon']}</td>
													<td class="text-center">{$loc['jumlah_splitter']}</td>
													<td class="text-center">{$loc['kapasitas']}</td>
													<td style="width:160px;" align="center">
														<a href="{$_url}master/edit_odc/{$loc['id']}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> {$_L['Edit']}</a>
														<a href="{$_url}master/delete_odc_post/{$loc['id']}" id="{$loc['id']}" class="btn btn-danger btn-sm cdelete-odc"><i class="fa fa-trash-o" aria-hidden="true"></i> {$_L['Delete']}</a>
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

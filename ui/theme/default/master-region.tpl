{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">{$_L['Main']} {$_L['Region']}</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" class="keyword" method="post" action="{$_url}master/region/">
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
											<a href="{$_url}master/add_region" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"></i> {$_L['Add']} {$_L['Region']}</a>
										</div>&nbsp;
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<thead>
												<tr style="font-size:1.2rem;">
													<th class="text-center">ID</th>
													<th class="text-center">{$_L['Name']}</th>
													<th class="text-center">{$_L['Action']}</th>
												</tr>
											</thead>
											<tbody>
												{foreach $d as $reg}
													<tr style="font-size:1.2rem;">
														<td class="text-center">{$reg['id']}</td>
														<td class="text-center">{$reg['nama']}</td>
														<td style="width:240px;" class="text-center">
															<a href="{$_url}master/vloc_region{$reg['id']}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> {$_L['View']}</a>
															<a href="{$_url}master/
															edit_region/{$reg['id']}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> {$_L['Edit']}</a>
															<a href="{$_url}master/delete_region_post/{$reg['id']}" id="{$reg['id']}" class="btn btn-danger btn-sm cdelete-reg"><i class="fa fa-trash-o" aria-hidden="true"></i> {$_L['Delete']}</a>
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

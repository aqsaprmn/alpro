{include file="sections/header-new.tpl"}

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">{$_L['Manage_Accounts']}</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="{$_url}customers/list/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="username" class="form-control" placeholder="{$_L['Search_by_Username']}...">
												<div class="input-group-btn">
													<button class="btn btn-success">{$_L['Search']}</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="{$_url}customers/add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add_Customer']}</a>
										</div>&nbsp;
									</div>
	
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>{$_L['Witel']}</th>
												<th>{$_L['Site']}</th>
												<th>{$_L['Name']}</th>
												<th>{$_L['Address']}</th>
												<th>{$_L['SC_Number']}</th>
												<th>{$_L['Internet_Number']}</th>
												<th>{$_L['Installation']}</th>	
												<th>Status</th>	
												<th>{$_L['Update_Delete']}</th>	
											</tr>
										</thead>
										<tbody>
										{foreach $d as $ds}
											<tr>
												<td>{$ds['username']}</td>
												<td>{$ds['fullname']}</td>
												<td>{$ds['phonenumber']}</td>
												<td>{$ds['created_at']}</td>
												<td>{$ds['created_at']}</td>
												<td>{$ds['created_at']}</td>
												<td>{$ds['created_at']}</td>
												<td>{$ds['created_at']}</td>
												
												<td align="center">
													<a href="{$_url}customers/edit/{$ds['id']}" class="btn btn-warning btn-sm">{$_L['Edit']}</a>
													<a href="{$_url}customers/delete/{$ds['id']}" id="{$ds['id']}" class="btn btn-danger btn-sm cdelete">{$_L['Delete']}</a>
												</td>
											</tr>
										{/foreach}
										</tbody>
									</table>
									{$paginator['contents']}
								</div>
							</div>
						</div>
					</div>

{include file="sections/footer.tpl"}

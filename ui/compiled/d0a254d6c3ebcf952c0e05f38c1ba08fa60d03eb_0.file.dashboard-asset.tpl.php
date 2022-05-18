<?php
/* Smarty version 3.1.39, created on 2022-05-18 15:17:31
  from 'C:\xampp\htdocs\alpro\ui\theme\default\dashboard-asset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6284ab9b122ea7_00520243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a254d6c3ebcf952c0e05f38c1ba08fa60d03eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\dashboard-asset.tpl',
      1 => 1652861850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6284ab9b122ea7_00520243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (($_smarty_tpl->tpl_vars['_admin']->value['user_type']) == 'Admin' || ($_smarty_tpl->tpl_vars['_admin']->value['user_type']) == 'Sales') {?>
	<div class="contaier-fluid">
      <div class="">
        <div class="ml10
        ">
          <h2 class="text-bold">Dasboard</h2>
        </div>
        <div class="row ml0 mr0">
          <div class="col-md-3 col-sm-6">
            <div class="panel panel-default mb20 mini-box panel-hovered">
              <div class="panel-body">
                <div class="clearfix">
                  <div class="info left">
                    <h4 class="mt0 text-primary text-bold">Rp. 1.400.000.000.000</h4>
                    <h5 class="text-light mb0">Total Revenue</h5>
                  </div>
                  <div class="right ion ion-ios-pricetags-outline icon"></div>
                </div>
              </div>
              <div class="panel-footer clearfix panel-footer-sm panel-footer-primary">
                <p class="mt0 mb0 right"><a class="text-putih" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
revenue/treg_"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_Details'];?>
</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="panel panel-default mb20 mini-box panel-hovered">
              <div class="panel-body">
                <div class="clearfix">
                  <div class="info left">
                    <h4 class="mt0 text-success text-bold"><?php echo $_smarty_tpl->tpl_vars['odc']->value;?>
</h4>
                    <h5 class="text-light mb0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Number_Of'];?>
 ODCs</h5>
                  </div>
                  <div class="right ion ion-social-usd icon"></div>
                </div>
              </div>
              <div class="panel-footer clearfix panel-footer-sm panel-footer-success">
                <p class="mt0 mb0 right"><a class="text-putih" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_Reports'];?>
</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="panel panel-default mb20 mini-box panel-hovered">
              <div class="panel-body">
                <div class="clearfix">
                  <div class="info left">
                    <h4 class="mt0 text-info text-bold"><?php echo $_smarty_tpl->tpl_vars['odp']->value;?>
</h4>
                    <h5 class="text-light mb0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Number_Of'];?>
 ODPs</h5>
                  </div>
                  <div class="right ion ion-android-contact icon"></div>
                </div>
              </div>
              <div class="panel-footer clearfix panel-footer-sm panel-footer-info">
                <p class="mt0 mb0 right"><a class="text-putih" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_All'];?>
</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="panel panel-default mb20 mini-box panel-hovered">
              <div class="panel-body">
                <div class="clearfix">
                  <div class="info left">
                    <h4 class="mt0 text-pink text-bold"><?php echo $_smarty_tpl->tpl_vars['cus']->value;?>
</h4>
                    <h5 class="text-light mb0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Number_Of'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</h5>
                  </div>
                  <div class="right ion ion-android-contacts icon"></div>
                </div>
              </div>
              <div class="panel-footer clearfix panel-footer-sm panel-footer-pink">
                <p class="mt0 mb0 right"><a class="text-putih" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_All'];?>
</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row ml0 mr0" id="dataTotal">
        <div class="col-md-12 col-sm-12">
          <div class="h-100 panel panel-default mini-box panel-hovered">
            <div class="panel-body">
              <div class="clearfix">
                <div class="row ml0 mr0 mb20">
                  <div class="col-lg-6 col-xs-6 p-0">
                    <h3 class="text-bold mt0 mb0 text-left">Asset Location</h3>
                  </div>
                </div>
                <div class="row mb20">
                 <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-4">
                        <label class="control-label mt5">Region</label>
                      </div>
                      <div class="col-lg-8 p-0">
                      <select class="form-select form-select-lg" name="region" id="region">
                        
                      </select>
                       </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-4">
                        <label class="control-label mt5">Location</label>
                      </div>
                      <div class="col-lg-8 p-0">
                      <select class="form-select form-select-lg" name="location" id="location">
                        
                      </select>
                       </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="row">
                      <div class="col-lg-4">
                        <label class="control-label mt5">Sub Location</label>
                      </div>
                      <div class="col-lg-8 p-0">
                      <select class="form-select form-select-lg" name="subloc" id="subloc">
                       
                      </select>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header col-12 text-center pb-4"><b>Data Asset</b></div>
                      <div class=
                      "row">
                        <div class="col-lg-6 chart-areas mb30">
                          <canvas id="myBarChart"></canvas>
                        </div>
                        <div class="col-lg-6 chart-area">
                          <canvas id="myLineChart"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </div>
      </div>
      <div class="row ml0 mr0 py-3">
        <div class="col-md-12 col-xs-12">
          <div class="panel panel-default mini-box panel-hovered">
            <div class="panel-body">
              <div class="clearfix">
                <h3 class="text-bold mt0 mb0 text-left">
                  Recently Tagged Assets
                </h3>
                <div class="row ml0 mr0 mt15 mb15">
                  <div class="col-lg-3 col-sm-3">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search for..."
                      />
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                          Go!
                        </button>
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-1 col-sm-1">
                    <h5 class="text-bold">Filter by:</h5>
                  </div>
                  <div class="col-lg-2 col-sm-2">
                    <div class="dropdown">
                      <button
                        class="btn btn-default dropdown-toggle w100"
                        type="button"
                        id="dropdownMenu1"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="true"
                      >
                        Location
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Indonesia</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-2 col-sm-2">
                    <div class="dropdown">
                      <button
                        class="btn btn-default dropdown-toggle w100"
                        type="button"
                        id="dropdownMenu1"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="true"
                      >
                        Categori
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Indonesia</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-2 col-sm-2">
                    <div class="dropdown">
                      <button
                        class="btn btn-default dropdown-toggle w100"
                        type="button"
                        id="dropdownMenu1"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="true"
                      >
                        Entity
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Indonesia</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-2 col-sm-2">
                    <button class="btn btn-primary w100">Add Asset</button>
                  </div>
                </div>
                <div class="row ml0 mr0">
                  <div class="panel panel-default overflow-auto">
                    <div class="panel-heading">List Assets</div>
                    <table class="table">
                      <tr class="text-center">
                        <th class="text-center">Code</th>
                        <th class="text-center">Asset Name</th>
                        <th class="text-center">Location</th>
                        <th class="text-center">Category</th>
                      </tr>
                      <tr class="text-center">
                        <td>1234</td>
                        <td>AC</td>
                        <td>Jakarta</td>
                        <td>Elektronik</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
<?php } else { ?>
    <div class="row">
      <div class="col-md-12">
        <div class="dash-head clearfix mt15 mb20">
          <div class="left">
            <h4 class="mb5 text-light"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
, <?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome_Text_User'];?>
</p>
            <ul>
              <li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</li>
              <li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</a></li>
              <li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/list-activated"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Activated_Voucher'];?>
</a></li>
              <li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
              <li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</li>
              <li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Private_Message'];?>
</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel mb20 panel-primary panel-hovered">
          <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-3">
                  <p class="small text-success text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</p>
                  <p class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['username'];?>
</p>
              </div>
              <div class="col-sm-3">
                  <p class="small text-primary text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</p>
                  <p class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['namebp'];?>
</p>
                </div>
                <div class="col-sm-3">
                  <p class="small text-info text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</p>
                  <p class="small mb15"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];?>
</p>
                </div>
                <div class="col-sm-3">
                  <p class="small text-danger text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</p>
                  <p class="small mb15"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];?>
</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

{include file="sections/header-new.tpl"}

{if ($_admin['user_type']) eq 'Admin' || ($_admin['user_type']) eq 'Sales'}
	<div class="contaier-fluid">
      <div class="">
        <div style="margin-left:2px" class="">
          <h2 class="text-bold mt0">Dasboard</h2>
        </div>
        <div class="row ml0 mr0">
          <div class="col-md-3 col-sm-6 px-1">
            <div class="panel panel-default mb20 mini-box panel-hovered">
              <div class="panel-body">
                <div class="clearfix">
                  <div class="info left">
                    <h4 class="mt0 text-primary text-bold">Rp. 100.000.000</h4>
                    <h5 class="text-light mb0">Total Revenue</h5>
                  </div>
                  <div class="right ion ion-social-usd icon"></div>
                </div>
              </div>
              <div class="panel-footer clearfix panel-footer-sm panel-footer-primary">
                <p class="mt0 mb0 right"><a class="text-putih" href="{$_url}revenue/treg_">{$_L['View_Details']}</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 px-1">
            <div class="panel panel-default mb20 mini-box panel-hovered">
              <div class="panel-body">
                <div class="clearfix">
                  <div class="info left">
                    <h4 class="mt0 text-success text-bold">{$odc}</h4>
                    <h5 class="text-light mb0">{$_L['Number_Of']} ODCs</h5>
                  </div>
                  <div class="right ion ion-ios-pricetags-outline icon"></div>
                </div>
              </div>
              <div class="panel-footer clearfix panel-footer-sm panel-footer-success">
                <p class="mt0 mb0 right"><a class="text-putih" href="{$_url}reports/by-period">{$_L['View_All']}</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 px-1">
            <div class="panel panel-default mb20 mini-box panel-hovered">
              <div class="panel-body">
                <div class="clearfix">
                  <div class="info left">
                    <h4 class="mt0 text-info text-bold">{$odp}</h4>
                    <h5 class="text-light mb0">{$_L['Number_Of']} ODPs</h5>
                  </div>
                  <div class="right ion ion-android-contact icon"></div>
                </div>
              </div>
              <div class="panel-footer clearfix panel-footer-sm panel-footer-info">
                <p class="mt0 mb0 right"><a class="text-putih" href="{$_url}prepaid/list">{$_L['View_All']}</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 px-1">
            <div class="panel panel-default mb20 mini-box panel-hovered">
              <div class="panel-body">
                <div class="clearfix">
                  <div class="info left">
                    <h4 class="mt0 text-pink text-bold">{$cus}</h4>
                    <h5 class="text-light mb0">{$_L['Number_Of']} {$_L['Customers']}</h5>
                  </div>
                  <div class="right ion ion-android-contacts icon"></div>
                </div>
              </div>
              <div class="panel-footer clearfix panel-footer-sm panel-footer-pink">
                <p class="mt0 mb0 right"><a class="text-putih" href="{$_url}customers/list">{$_L['View_All']}</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row ml0 mr0 relative mb15" id="dataTotal">
        <div class="col-md-4 mb15 px-1">
          <div class="panel panel-default mini-box panel-hovered p-4">
            <div class="row ml0 mr0 mb15 relative">
              <h3 class="text-bold mt0 mb0 text-left">Total Asset /Location</h3>
            </div>
            <div class="row ml0 mr0 relative">
              <div class="col-lg-4 px-1 mb5">
                <select class="form-select form-select-lg mr" name="region" id="region">
                            
                </select>
              </div>
              <div class="col-lg-4 px-1 mb5">
                <select class="form-select form-select-lg" name="location" id="location">
                            
                </select>
              </div>
              <div class="col-lg-4 px-1 mb5">
                <select class="form-select form-select-lg" name="subloc" id="subloc">
                          
                </select>
              </div>
            </div>
            <div class="row ml0 mr0 relative">
              <div class="" style="">
                <canvas id="myDonatChart"></canvas>
              </div>
            </div>
            <div class="row ml0 mr0 relative">
              <table id="dataAsset" class="table mb0">
                    
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-8 px-1">
          <div class="row mr0 ml0 relative mb5">
            <div class="col-lg-12 panel panel-default mini-box panel-hovered p-4">
              <div class="row ml0 mr0 relative">
                <div class="col-md-3">
                  <h3 class="text-bold mt0 mb0">Revenue</h3>
                </div>
                <div class="col-md-9 px-5">
                  <div id="between" class="row hidden">
                    <div class="col-xs-6">
                      <input class="yearpicker form-control" id="start" type="number">
                    </div>
                    <div class="col-xs-6 px-4">
                      <input class="yearpicker form-control" id="end" type="number">
                    </div>
                  </div>
                  <input class="yearpicker form-control" id="periode" type="number">
                </div>
              </div>
              <div class="row ml0 mr0 relative">
                <div class="" style="height:50vh;">
                  <canvas id="myBarChart"></canvas>
                </div>
              </div>
              <div class="row ml mr0 px-4 relative">
                <button id="tahun" class="btn btn-primary">Tahun</button>
                <button id="bulan" class="btn btn-primary">Bulan</button>
                <button id="hari" class="btn btn-primary">Hari</button>
              </div>
            </div>
          </div>
          <div class="row ml0 mr0 relative">
            <div class="col-lg-12 panel panel-default mini-box panel-hovered p-4">
              <div class="row ml0 mr0 relative">
                <div class="col-lg-12 mb15">
                  <h3 class="text-bold mt0 mb0">Expense
                  </h3>
                </div>
              </div>
              <div class="row ml0 mr0 relative">
                <div class="col-lg-4 px-1 mb5">
                  <select class="form-select form-select-lg mr" name="region" id="">
                              
                  </select>
                </div>
                <div class="col-lg-4 px-1 mb5">
                  <select class="form-select form-select-lg" name="location" id="">
                              
                  </select>
                </div>
                <div class="col-lg-4 px-1 mb5">
                  <select class="form-select form-select-lg" name="subloc" id="">
                            
                  </select>
                </div>
              </div>
              <div class="row ml0 mr0 relative">
                <div class="" style="height:10vh;">
                  <canvas id="myExpChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row ml0 mr0 py-1">
        <div class="col-md-12 col-xs-12 px-1">
          <div class="panel panel-default mini-box panel-hovered p-4">
            <h3 class="text-bold mt0 mb15 text-left">
              List All Asset
            </h3>
            <div class="row ml0 mr0">
              <div class="overflow-auto">
                <table id="allAsset" class="cell-border hover">
                  <thead>
                    <tr class="text-center">
                      <th class="text-center">No</th>
                      <th class="text-center">Asset Name</th>
                      <th class="text-center">Type</th>
                      <th class="text-center">Lat</th>
                      <th class="text-center">Lon</th>
                      <th class="text-center">Kapasitas</th>
                    </tr>
                  </thead>
                  <tbody>
                    {foreach $asset as $a}
                      <tr class="text-center">
                        <td>{$no++}</td>
                        <td>{$a['nama']}</td>
                        <td>{$a['type']}</td>
                        <td>{$a['lat']}</td>
                        <td>{$a['lon']}</td>
                        <td>{$a['kapasitas']}</td>
                      </tr>
                    {/foreach}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
{else}
    <div class="row">
      <div class="col-md-12">
        <div class="dash-head clearfix mt15 mb20">
          <div class="left">
            <h4 class="mb5 text-light">{$_L['Welcome']}, {$_user['fullname']}</h4>
            <p>{$_L['Welcome_Text_User']}</p>
            <ul>
              <li> {$_L['Account_Information']}</li>
              <li> <a href="{$_url}voucher/activation">{$_L['Voucher_Activation']}</a></li>
              <li> <a href="{$_url}voucher/list-activated">{$_L['List_Activated_Voucher']}</a></li>
              <li> <a href="{$_url}accounts/change-password">{$_L['Change_Password']}</a></li>
              <li> {$_L['Order_Voucher']}</li>
              <li> {$_L['Private_Message']}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel mb20 panel-primary panel-hovered">
          <div class="panel-heading">{$_L['Account_Information']}</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-3">
                  <p class="small text-success text-uppercase text-normal">{$_L['Username']}</p>
                  <p class="small mb15">{$_bill['username']}</p>
              </div>
              <div class="col-sm-3">
                  <p class="small text-primary text-uppercase text-normal">{$_L['Plan_Name']}</p>
                  <p class="small mb15">{$_bill['namebp']}</p>
                </div>
                <div class="col-sm-3">
                  <p class="small text-info text-uppercase text-normal">{$_L['Created_On']}</p>
                  <p class="small mb15">{date($_c['date_format'], strtotime($_bill['recharged_on']))} {$_bill['time']}</p>
                </div>
                <div class="col-sm-3">
                  <p class="small text-danger text-uppercase text-normal">{$_L['Expires_On']}</p>
                  <p class="small mb15">{date($_c['date_format'], strtotime($_bill['expiration']))} {$_bill['time']}</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
{/if}

{include file="sections/footer.tpl"}

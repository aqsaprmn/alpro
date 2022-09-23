{include file="sections/header-new.tpl"}
    <div class="row ml0 mr0 relative">
        <div class="panel panel-hovered panel-default">
            {if $display eq 'transaction'}
                <div class="panel-heading">
                    Transaction
                </div>
                <div class="panel-body">
                    <form id="formInputTable" class="form-horizontal" method="post" action="{$_url}earnings/add/">
                        <div class="form-group">
                            <label style="text-align:left;" class="col-md-2 control-label">Id ODP</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="idodp" name="idodp" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="text-align:left;" class="col-md-2 control-label">Port</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="port" name="port">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="text-align:left;" class="col-md-2 control-label">Internet Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control disabled" id="noinet" name="internet" required autocomplete="off">
                            </div>
                            <div class="col-md-4" id="dataTable">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalnoinet"><i class="fa fa-cogs"></i>
                                </button>

                                <div class="modal fade" id="modalnoinet" tabindex="-1" role="dialog" aria-labelledby="modalnoinetLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalnoinetLabel">ID {$_L['Region']}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body-h500">
                                                <div class="col-sm-12"> 
                                                    <input id="search" value="" class="form-control" type="search" placeholder="Search" aria-label="Search">
                                                </div>
                                                <div id="loader" class="col-sm-12 text-center dnone h90 justify-content-center">
                                                    <img style="width:50px" src="{$_theme}/images/spinner.gif" class="loader" alt="">
                                                </div>
                                                <div class="col-sm-12 dataTable table-responsive h90 overflow-y" >
                                                    <table class="table table-collapse table-bordered tableInput" style="font-size:1.2rem;">
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="text-align:left;" class="col-md-2 control-label">Date</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" id="date" name="date" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="text-align:left;" class="col-md-2 control-label">Total</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="revenue" name="total" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            {else}
                <div class="panel-heading">
                    List Earnings
                </div>
                <div class="panel-body">
                    <div class="row ml0 mr0 mb15 relative">
                        <div class="col-md-6 p-0">
                            <form class="input-group dflex keyword" method="post" action="{$_url}earnings/list/">
                                <input class="form-control" type="text" autocomplete="off" name="keyword" />
                                <button class="btn btn-primary" type="submit" name="submit">Search</button>
                            </form>
                        </div>
                        <div class="col-md-6 dflex content-end px-0">
                            <a target="_blank" href="TemplateExcel.xlsx" class="btn btn-primary mr5">Template Excel Import</a>
                            <button class="btn btn-default mr5" name="submit" data-toggle="modal" data-target="#import"><i class="fa fa-download" aria-hidden="true"></i> Import</button>
                            <a target="_blank" href="{$_url}exp/pdf/earnings" class="btn btn-danger mr5"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
                            <a target="_blank" href="{$_url}exp/excel/earnings" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>
                        </div>
                        <!-- Modal -->
                        <div id="import" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Import Data Earnings</h4>
                                    </div>
                                    <form class="form-horizontal" method="POST" action="{$_url}import/earnings" enctype="multipart/form-data">
                                        <div class="modal-body px-5 py-1 form-group">
                                            <p class="mb15">Format Excel</p>
                                            <input type="file" name="excel" class="form-control-file" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Import</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Customer Name</th>
                                <th class="text-center">No Internet</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $revenue as $r}
                                <tr>
                                    <td class="text-center">{$r['no']}</td>
                                    <td>{$r['nama']}</td>
                                    <td class="text-center">{$r['no_inet']}</td>
                                    <td class="text-center">{$r['tgl_revenue']}</td>
                                    <td>{$r['revenue']}</td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                    <div>
                        {if $paginator eq !null}
                            {$paginator['contents']}
                        {/if}
                    </div>
                </div>
            {/if}
        </div>
    </div>

{include file="sections/footer.tpl"}
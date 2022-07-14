<?php include 'header.php'; ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-3 col-md-6">
         <div class="panel panel-green">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo countRow(["table"=>"clients"]) ?></div>
                     <div>Usuários registrados</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>clients">
               <div class="panel-footer">
                  <span class="pull-left">Detalhes</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
            <div class="col-lg-3 col-md-6">
         <div class="panel panel-green">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="fa fa-shopping-cart fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo countRow(["table"=>"orders"]) ?></div>
                     <div>Pedidos totais</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>orders">
               <div class="panel-footer">
                  <span class="pull-left">Detalhes</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
      <div class="col-lg-3 col-md-6">
         <div class="panel panel-green">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="	fa fa-bug fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo $failCount ?></div>
                     <div>Pedidos falhados</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>orders/1/fail">
               <div class="panel-footer">
                  <span class="pull-left">Detalhes</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
      <div class="col-lg-3 col-md-6">
         <div class="panel panel-yellow">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="fa fa-bell fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo countRow(["table"=>"payments","where"=>["payment_method"=>4,"payment_status"=>1] ]) ?></div>
                     <div>Notificações de pagamento pendentes</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>payments/bank">
               <div class="panel-footer">
                  <span class="pull-left">Detalhes</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
      <div class="col-lg-3 col-md-6">
         <div class="panel panel-red">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="fa fa-support fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo countRow(["table"=>"tickets","where"=>["client_new"=>2]]); ?></div>
                     <div>Pedidos de suporte pendentes</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>tickets?search=unread">
               <div class="panel-footer">
                  <span class="pull-left">Detalhes</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
              Logs de clientes
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
               <div class="table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                          <th class="checkAll-th">
                             <div class="checkAll-holder">
                                <input type="checkbox" id="checkAll">
                                <input type="hidden" id="checkAllText" value="order">
                             </div>
                             <div class="action-block">
                                <ul class="action-list" style="margin:5px 0 0 0!important">
                                   <li><span class="countOrders"></span> Logs selecionados</li>
                                   <li>
                                      <div class="dropdown">
                                         <button type="button" class="btn btn-default btn-xs dropdown-toggle btn-xs-caret" data-toggle="dropdown"> Operações em lote<span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li>
                                              <a class="bulkorder" data-type="delete">Deletar</a>
                                            </li>
                                         </ul>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </th>
                           <th>Evento</th>
                           <th>Histórico</th>
                           <th>Detalhe</th>
                           <th></th>
                        </tr>
                     </thead>
                     <form id="changebulkForm" action="<?php echo site_url("admin/index/multi-action") ?>" method="post">
                       <tbody>
                         <?php if( !$logs ): ?>
                           <tr>
                             <td colspan="4"><center>Nenhum registro encontrado</center></td>
                           </tr>
                         <?php endif; ?>
                         <?php foreach($logs as $log): $extra = json_decode($log["servicealert_extra"],true); ?>
                          <tr>
                             <td><input type="checkbox" class="selectOrder" name="log[<?php echo $log["id"] ?>]" value="1" style="border:1px solid #fff"></td>
                             <td><?php echo $log["serviceapi_alert"] ?></td>
                             <td><?php echo date("H:i:s d.m.Y",strtotime($log["servicealert_date"]) ) ?></td>
                             <td><?php echo "Old Value: ".$extra["old"]." / New Value:".$extra["new"] ?></td>
                             <td> <a href="<?php echo site_url("admin/index/delete/".$log["id"]) ?>" style="font-size:12px">Deletar</a> </td>
                          </tr>
                        <?php endforeach; ?>
                       </tbody>
                       <input type="hidden" name="bulkStatus" id="bulkStatus" value="0">
                     </form>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal modal-center fade" id="confirmChange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
   <div class="modal-dialog modal-dialog-center" role="document">
      <div class="modal-content">
         <div class="modal-body text-center">
            <h4>Tem certeza de que deseja excluir?</h4>
            <div align="center">
               <a class="btn btn-primary" href="" id="confirmYes">Sim</a>
               <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include 'footer.php'; ?>

<!DOCTYPE html>
<html lang="tr">
<head><meta charset="big5">

  <base href="<?=site_url()?>">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$settings["site_name"]?></title>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/public/admin/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/public/admin/style.css">
    <link rel="stylesheet" type="text/css" href="/public/admin/toastDemo.css">
    <link rel="stylesheet" type="text/css" href="/public/datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" type="text/css" href="public/admin/tinytoggle.min.css" rel="stylesheet">

</head>
<body>
  <nav class="navbar navbar-default navbar-static-top ">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Alternar de navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left-block">
          <?php if( $user["access"]["admin_access"]  && $_SESSION["msmbilisim_adminlogin"]  ): ?>
            <li class="<?php if( route(1) == "index" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin") ?>"><i class="fa fa-home"></i> <span class="badge" style="background-color: #56beb4"><? echo $onlineUsers; ?></span></a></li>
            <li class="<?php if( route(1) == "clients" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/clients") ?>"><i class="fa fa-users"></i>  Membros</a></li>
			
			
                   <li class="<?php if( route(1) == "orders" ): echo 'active'; endif; ?>">
                                               
                                                                          <a href="<?php echo site_url("admin/orders") ?>"><i class="fa fa-cart-plus"></i>  Pedidos</a></li>
                             	<?php
			
			if(countRow(["table"=>"orders","where"=>["subscriptions_type"=>2]])>0){
			
			?>
			
			<li class="<?php if( route(1) == "subscriptions" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/subscriptions") ?>"><i class="	fa fa-refresh"></i> Cadastros</a></li>
			
			<?php
				
			}else{
				
			}
			
			?>

			<?php
			
			if(countRow(["table"=>"orders","where"=>["dripfeed"=>2]])>0){
			
			?>
			
			<li class="<?php if( route(1) == "dripfeeds" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/dripfeeds") ?>"><i class="fa fa-clock-o"></i> Drip-feed</a></li>
			
			<?php
				
			}else{
				
			}
			
			?>
			
			<li class="<?php if( route(1) == "subscriptions" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/subscriptions") ?>"><i class="	fa fa-refresh"></i> Cadastros</a></li>
    
			<li class="<?php if( route(1) == "dripfeeds" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/dripfeeds") ?>"><i class="fa fa-clock-o"></i> Drip-feed</a></li>   
    
			
		
            
            <li class="<?php if( route(1) == "services" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/services") ?>"><i class="fa fa-tasks"></i> Serviços</a></li>
            
                    <li class="" class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="	fa fa-shopping-basket"></i>Finaceiro<span class="badge" style="background-color: #92b844"><?=countRow(["table"=>"payments","where"=>["payment_method"=>4,"payment_status"=>1]]);?></span> <span class="caret"></span></a>
                                                                          <ul class="dropdown-menu dropdown-max-height">
                               <li class="<?php if( route(1) == "payments" && route(2) == "online" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/payments/online") ?>"><i class="fa fa-credit-card"></i>Pagamentos automáticos</a></li>
                                 <li class="<?php if( route(1) == "payments" && route(2) == "bank" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/payments/bank") ?>"><i class="fa fa-bank"></i> Notificações de pagamento <span class="badge" style="background-color: #f0ad4e"><?=countRow(["table"=>"payments","where"=>["payment_method"=>4,"payment_status"=>1]]);?></span></a></li>
                                          <li class="<?php if( route(1) == "kuponlar" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/kuponlar") ?>"><i class="	fa fa-gift"></i> Cupons</a></li>
                             <li class="<?php if( route(1) == "reports" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/reports") ?>"><i class="fa fa-bar-chart"></i> Estatisticas</a></li>       </ul>
            </li>
            
            <li class="<?php if( route(1) == "tickets" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/tickets") ?>"><i class="	fa fa-comments-o"></i> Suporte <span class="badge" style="background-color: #6d47bb"><?=countRow(["table"=>"tickets","where"=>["client_new"=>2]]);?></span> </a></li>

          <li class="<?php if( route(1) == "settings" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/settings") ?>"><i class="	fa fa-cog"></i> Configurações</a></li>

           

            <li class="<?php if( route(1) == "logs" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/logs") ?>"><i class="	fa fa-history"></i> logs</a></li>
                                                                                                      <li class="<?php if( route(1) == "proxy" ): echo 'active'; endif; ?>"><a href="<?php echo site_url("admin/proxy") ?>"><i class="fa fa-user-secret"></i> Proxy</a></li>
                                                                                                                 

        

        
          <?php endif; ?>
		 
		  </ul>  <ul class="nav navbar-nav navbar-right">
<li><a href="#" data-toggle="modal" data-target="#bilgiAl"><i class="	fa fa-question-circle"></i>Atualizações</a>  </li>
                      <li><a href="/logout">Sair</a></li>
                  
                  </ul>
      </div> 
    
    </div>
  </nav>
  
<!-- Yard覺m Al -->
  <div class="modal fade" id="bilgiAl" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Informações</h4>
        </div>
        <div class="modal-body">
    
            <div class="well">
                <div class="alert alert-danger"><h4>
                Você está usando a atualização mais recente do sistema, agora tudo está tranquilo e estável.<br>Se estiver recebendo um erro, ele é causado por você ou pelo seu host.
                </h4></div><hr>
                <h4>
                    <body>
    <p><br></p>
 
    <p><strong>Desenvolvido por : <a href="https://midiaspopular.com.br">Mídias Popular</a></strong></p>
<p><strong>WhatsApp <a href="https://wa.me/5562994561638?text=Adorei%20seu%20artigo">Verificar atualização</a></strong></p>
</body>
                </h4>
                <hr>
                
<h4>Endereços de devolução de gateways de pagamento</h4>
Endereço de retorno de Paytr: <code><?=site_url()?>payment/paytr</code><br>
Endereço de devolução do Paywant: <code><?=site_url()?>payment/paywant</code><br>
Endereço de devolução do comprador: <code><?=site_url()?>payment/buypayer</code><br>
Endereço de devolução do comprador: <code><?=site_url()?>payment/shopier</code><br>
<hr>
<h4>Endereços CRON e horários recomendados</h4>
<code>wget --spider -O - <?=site_url()?>crons/autolike.php >/dev/null 2>&1</code> - Pedidos automáticos - 1 Min<br>
<code>wget --spider -O - <?=site_url()?>crons/checkToAPI.php >/dev/null 2>&1</code> - Pedidos de API - 1 Min<br>
<code>wget --spider -O - <?=site_url()?>crons/dripfeed.php >/dev/null 2>&1</code> - Drip Feed - 1 Min<br>
<code>wget --spider -O - <?=site_url()?>crons/orders.php >/dev/null 2>&1</code> - Status do pedido - 5 Min<br>
<code>wget --spider -O - <?=site_url()?>crons/providers.php >/dev/null 2>&1</code> - Informações do provedor - 1 Min<br>
</div>
        </div>
		<div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
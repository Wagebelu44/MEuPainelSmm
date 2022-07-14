<div class="col-md-8">
  <div class="panel panel-default">
    <div class="panel-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <div class="row">
            <div class="col-md-10">
              <label for="preferenceLogo" class="control-label">Logotipo do site</label>
              <input type="file" name="logo" id="preferenceLogo">
            </div>
            <div class="col-md-2">
              <?php if( $settings["site_logo"] ):  ?>
                <div class="setting-block__image">
                      <img class="img-thumbnail" src="<?=$settings["site_logo"]?>">
                    <div class="setting-block__image-remove">
                      <a href="" data-toggle="modal" data-target="#confirmChange" data-href="<?=site_url("admin/settings/general/delete-logo")?>"><span class="fa fa-remove"></span></a>
                    </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-11">
              <label for="preferenceFavicon" class="control-label">Site Favicon</label>
              <input type="file" name="favicon" id="preferenceFavicon">
            </div>
            <div class="col-md-1">
              <?php if( $settings["favicon"] ):  ?>
                <div class="setting-block__image">
                    <img class="img-thumbnail" src="<?=$settings["favicon"]?>">
                    <div class="setting-block__image-remove">
                      <a href="" data-toggle="modal" data-target="#confirmChange" data-href="<?=site_url("admin/settings/general/delete-favicon")?>"><span class="fa fa-remove"></span></a>
                    </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
          <hr>
      
        <div class="form-group">
          <label class="control-label">Modo de manutenção</label>
          <select class="form-control" name="site_maintenance">
            <option value="2" <?= $settings["site_maintenance"] == 2 ? "selected" : null; ?> >Desativado</option>
            <option value="1" <?= $settings["site_maintenance"] == 1 ? "selected" : null; ?>>Ativado</option>
          </select>
          <hr>
        </div>  <div class="form-group">
          <label class="control-label">Nome do painel</label>
          <input type="text" class="form-control" name="name" value="<?=$settings["site_name"]?>">
        </div>
                      <div class="form-group">
          <label class="control-label">Moeda do Site</label>
          <select class="form-control" name="site_currency" selected>
              <option value="<?=$settings["site_currency"]?>">Moeda Ativa:  <?=$settings["site_currency"]?></option>
            <option value="INR">Rupees (INR)</option>
            <option value="TRY">T羹rk Liras覺 (TRY)</option>
            <option value="USD">Brasil (BRL)</option>
            <option value="EUR">Euro (EUR)</option>
          </select>
        </div>
           <div class="form-group">
          <label class="control-label">Subtema</label>
        
          <select class="form-control" name="site_theme_alt">
           	<option value="<?=$settings["site_theme_alt"]?>" selected>Subtema ativo:<?=$settings["site_theme_alt"]?></option>
																		<option value="Bootstrap" >Bootstrap</option>
																		<option value="Cerulean" >Cerulean</option>
																		<option value="Cosmo" >Cosmo</option>
																		<option value="Flatly" >Flatly</option>
																		<option value="Journal" >Journal</option>
																		<option value="Lumen" >Lumen</option>
																		<option value="Paper" >Paper</option>
																		<option value="Readable" >Readable</option>
																		<option value="Sandstone" >Sandstone</option>
																		<option value="Slate">Slate</option>
																		<option value="Solar" >Solar</option>
																		<option value="Spacelab" >Spacelab</option>
																		<option value="Spin" >Spin</option>
																		<option value="Superhero" >Superhero</option>
																		<option value="United" >United</option>
																		<option value="Yeti" >Yeti</option>
																		<option value="Lightblue" >Light Blue</option>
																		
          </select>
        </div>  <div class="row">
          <p class="col-md-12 help-block">
                <small><font style="vertical-align: inherit;"></font><code>Classic</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se você ativou o tema de </font><font style="vertical-align: inherit;">a seção do editor de tema, você </font><font style="vertical-align: inherit;">pode escolher um de </font><font style="vertical-align: inherit;">the </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sub-</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> temas</font><font style="vertical-align: inherit;">no topo </font></font><code>Classic</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">para ver as outras versões do tema.</font></font></small>
          </p>
          </div>
       
        <hr>

        <div class="form-group">
          <label class="control-label">Controle de robô<small>(Recaptcha)</small> </label>
          <select class="form-control" name="recaptcha">
            <option value="2" <?= $settings["recaptcha"] == 2 ? "selected" : null; ?> >Ativado</option>
            <option value="1" <?= $settings["recaptcha"] == 1 ? "selected" : null; ?>>Desativado</option>
          </select>
        </div>
        <div class="form-group">
          <label for="" class="control-label">Chave do site de recaptcha</label>
          <input type="text" class="form-control" name="recaptcha_key" value="<?=$settings["recaptcha_key"]?>">
        </div>
        <div class="form-group">
          <label for="" class="control-label">Chave secreta de recaptcha</label>
          <input type="text" class="form-control" name="recaptcha_secret" value="<?=$settings["recaptcha_secret"]?>">
        </div>
        <hr>
        <div class="row">
              <div class="col-md-12 form-group">
            <div class="alert alert-info"><strong>ATENÇÃO! </strong>As taxas de câmbio são atualizadas automaticamente, por favor, não interfira.</div>
            </div>
            <?php
 
// $connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
   
// $usd_selling = $connect_web->Currency[0]->BanknoteSelling;
// $euro_selling = $connect_web->Currency[3]->BanknoteSelling;
  
   ?>
          <div class="col-md-6 form-group">
            <label for="" class="control-label">Taxa de câmbio do dólar</label>
            <input type="text" class="form-control" name="dolar" value="<?=$settings["dolar_charge"]?>">
          </div>
          <div class="col-md-6 form-group">
            <label for="" class="control-label">Taxa de câmbio do euro</label>
            <input type="text" class="form-control" name="euro" value="<?=$settings["euro_charge"]?>">
          </div>
          <p class="col-md-12 help-block">
                <small>Taxas de câmbio a serem usadas no cálculo de receitas de pedidos.</small>
          </p>
        </div>
        <hr>
        		
		<div class="form-group">
          <label for="" class="control-label">Executivo</label>
          <input type="text" class="form-control" name="bronz_statu" value="<?=$settings["bronz_statu"]?>">
        </div>
		
		<div class="form-group">
          <label for="" class="control-label">Presidente</label>
          <input type="text" class="form-control" name="silver_statu" value="<?=$settings["silver_statu"]?>">
        </div>
		
		<div class="form-group">
          <label for="" class="control-label">Embaixador</label>
          <input type="text" class="form-control" name="gold_statu" value="<?=$settings["gold_statu"]?>">
        </div>
		
		<div class="form-group">
          <label for="" class="control-label">Distribuidor</label>
          <input type="text" class="form-control" name="bayi_statu" value="<?=$settings["bayi_statu"]?>">
        </div>
		 <p class="help block">
                <small>	Basta digitar o número para determinar a quantia que o membro deve gastar na classificação. Exemplo: 350</small>
          </p>
	
	<hr />
        <div class="row">	
          <div class="form-group col-md-4">
            <?php 
            if($settings["resetpass_page"] == "2"){
                $respass_active = "selected";
            }else{
                $respass_passive = "selected";
            } ?>  
            <label class="control-label">Esqueci a minha senhaﾠﾠﾠﾠﾠﾠﾠﾠﾠ</label>
            <select class="form-control" name="resetpass">
              <option value="2" <?= $respass_active ?> >Ativo</option>
              <option value="1" <?= $respass_passive ?>>Desativado</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <?php 
            if($settings["resetpass_sms"] == "2"){
                $ressms_active = "selected";
            }else{
                $ressms_passive = "selected";
            } ?>  
            <label class="control-label">Envie minha senha para o meu telefone</label>
            <select class="form-control" name="resetsms">
              <option value="2" <?= $ressms_active ?> >Ativo</option>
              <option value="1" <?= $ressms_passive ?>>Desativado</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <?php 
            if($settings["resetpass_email"] == "2"){
                $resemail_active = "selected";
            }else{
                $resemail_passive = "selected";
            } ?>
            <label class="control-label">Envie minha senha para o meu e-mail</label>
            <select class="form-control" name="resetmail">
              <option value="2" <?= $resemail_active ?> >Ativo</option>
              <option value="1" <?= $resemail_passive ?>>Desativado</option>
            </select>
          </div>
        </div>
        <hr>
        <div class="form-group">
            <?php 
            if($settings["ticket_system"] == "2"){
                $ticket_active = "selected";
            }else{
                $ticket_passive = "selected";
            } ?>
          <label class="control-label">Sistema de suporte</label>
          <select class="form-control" name="ticket_system">
            <option value="2" <?= $ticket_active ?> >Ativo</option>
            <option value="1" <?= $ticket_passive ?>>Desativado</option>
          </select>
        </div>
        <div class="form-group">
            <?php 
            if($settings["register_page"] == "2"){
                $reg_active = "selected";
            }else{
                $reg_passive = "selected";
            } ?>
          <label class="control-label">Página de registro</label>
          <select class="form-control" name="registration_page">
            <option value="2" <?= $reg_active ?> >Ativo</option>
            <option value="1" <?= $reg_passive ?>>Desativado</option>
          </select>
        </div>
        <div class="form-group">
            <?php 
            if($settings["service_list"] == "2"){
                $servlist_active = "selected";
            }else{
                $servlist_passive = "selected";
            } ?>
          <label class="control-label">Lista de Serviços</label>
          <select class="form-control" name="service_list">
            <option value="2" <?= $servlist_active ?> >Ativo para todos</option>
            <option value="1" <?= $servlist_passive ?>>Desativado para todos</option>
          </select>
        </div>
        <div class="form-group">
            <?php 
            if($settings["service_speed"] == "2"){
                $servspeed_active = "selected";
            }else{
                $servspeed_passive = "selected";
            } ?>
          <label class="control-label">Indicador de velocidade de serviço</label>
          <select class="form-control" name="service_speed">
            <option value="2" <?= $servspeed_active ?>>Ativado</option>
            <option value="1" <?= $servspeed_passive ?>>Desativado</option>
          </select>
        </div>
        <hr />
        <div class="form-group">
          <label class="control-label">Códigos de cabeçalho</label>
          <textarea class="form-control" rows="7" name="custom_header" placeholder='<style type="text/css">...</style>'><?=$settings["custom_header"]?></textarea>
        </div>
        <div class="form-group">
          <label>Códigos de rodapé</label>
          <textarea class="form-control" rows="7" name="custom_footer" placeholder='<script>...</script>'><?=$settings["custom_footer"]?></textarea>
        </div>
		<hr>
        <button type="submit" class="btn btn-primary">Atualizar configurações</button>
      </form>
    </div>
  </div>
</div>

<div class="modal modal-center fade" id="confirmChange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
 <div class="modal-dialog modal-dialog-center" role="document">
   <div class="modal-content">
     <div class="modal-body text-center">
       <h4>Tem certeza?</h4>
       <div align="center">
         <a class="btn btn-primary" href="" id="confirmYes">Sim</a>
         <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
       </div>
     </div>
   </div>
 </div>
</div>

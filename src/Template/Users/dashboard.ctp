<?php $title = "Dashboard"; 
$this->assign('title', $title);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-primary">
                                    <i class="now-ui-icons ui-2_chat-round"></i>
                                </div>
                                <h3 class="info-title"><?= $messages ?></h3>
                                <h6 class="stats-title">Mesajes de la semana</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="now-ui-icons business_money-coins"></i>
                                </div>
                                <h3 class="info-title"><?= $allMessages ?></h3>
                                <h6 class="stats-title">Total de Mensajes</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="now-ui-icons users_single-02"></i>
                                </div>
                                <h3 class="info-title"><?= $clients ?></h3>
                                <h6 class="stats-title">Clientes</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="statistics">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="now-ui-icons objects_support-17"></i>
                                </div>
                                <h3 class="info-title"><?= $prospects ?></h3>
                                <h6 class="stats-title">Prospectos</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <?php if (isset($lastMessages)): ?>
          <h3 class="title">Últimos mensajes</h3>
          <?php foreach ($lastMessages as $message): ?>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Mensaje de <?= $message['Clients']['name'] ?> | Fecha: <?= date('d-m-Y',strtotime($message['Messages']['created_at']))?></h4>
              </div>
              <div class="card-body">
                <p class="description" style="font-weight:400;color:#666">
                <b>Proyecto/Empresa:</b> <?= $message['Businesses']['name'] ?>
                </p>       
                <p class="description" style="font-weight:400;color:#666">
                <b>Ciudad:</b> <?= $message['Cities']['name'] ?>
                </p>       
                <p class="description" style="font-weight:400;color:#666">
                <b>Email:</b> <?= $message['Clients']['email'] ?>
                </p>       
                <p class="description" style="font-weight:400;color:#666">
                  <b>Mensaje:</b> <?= $message['Messages']['message'] ?>
                </p>
              </div>
            </div>
          <?php endforeach ?>
      <?php endif ?>
    </div>
  </div>
</div>
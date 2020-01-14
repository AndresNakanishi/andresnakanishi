<?php $title = "Mensajes"; 
$this->assign('title', $title);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="card">
    <div class="card-header d-flex justify-content-between">
      <h4 class="card-title">
        <?= $title; ?>
      </h4>
    </div>
    <div class="card-body">
      <div class="toolbar"></div>
      <div id="datatable_wrapper" class="dataTableswrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12">
            <table id="datatable" class="table table-striped table-bordered dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
              <thead>
                <tr role="row">
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Proyecto</th>
                    <th>Ciudad</th>
                    <th>Fecha</th>
                  <th class="disabled-sorting text-right sorting_desc">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($messages as $message): ?>
                  <tr role="row">
                    <td><?= $message['Clients']['name']; ?></td>
                    <td><?= $message['Clients']['email']; ?></td>
                    <td><?= $message['Businesses']['name']; ?></td>
                    <td><?= $message['Cities']['name']; ?></td>
                    <td><?= date('d-m-Y',strtotime($message['created_at'])); ?></td>
                    <td class="text-right">
                      <a onclick="system.showSwal('Eliminar','¿Eliminar el mensaje de '+'<?= $message['Clients']['name'] ?>'+' ?','delete', '<?= $this->Url->build('/', true) ?><?= strtolower($this->request->getParam('controller')) ?>/delete/<?= $message['id']; ?>')" class="btn btn-round btn-danger btn-icon btn-sm text-white" rel="tooltip" title="Eliminar" data-placement="left"><i class="fas fa-trash"></i></a>
                      <a href="<?= $this->Url->build('/', true) ?>messages/view/<?= $message['id']; ?>" class="btn btn-round btn-warning btn-icon btn-sm" rel="tooltip" title="Ver" data-placement="left"><i class="far fa-eye"></i></a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
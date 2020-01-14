<?php $title = "Clientes"; 
$this->assign('title', $title);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="card">
    <div class="card-header d-flex justify-content-between">
      <h4 class="card-title">
        <?= $title; ?>
      </h4>
      <a href="<?= $this->Url->build('/', true) ?>clients/add" class="btn btn-primary btn-round btn-icon" rel="tooltip" title="Agregar Cliente" data-placement="left"><i class="fas fa-plus"></i></a>
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
                    <th>Cliente</th>
                  <th class="disabled-sorting text-right sorting_desc">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($clients as $client): ?>
                  <tr role="row">
                    <td><?= $client->name; ?></td>
                    <td><?= $client->email; ?></td>
                    <td><?= $client->business->name; ?></td>
                    <td><?= $client->city->name; ?></td>
                    <td><span class="badge badge-primary"><?= $client->isClient; ?></span></td>
                    <td class="text-right">
                      <a onclick="system.showSwal('Eliminar','¿Eliminar la Cliente '+'<?= $client->name ?>'+' ?','delete', '<?= $this->Url->build('/', true) ?><?= strtolower($this->request->getParam('controller')) ?>/delete/<?= $client->id; ?>')" class="btn btn-round btn-danger btn-icon btn-sm text-white" rel="tooltip" title="Eliminar" data-placement="left"><i class="fas fa-trash"></i></a>
                      <a href="<?= $this->Url->build('/', true) ?>clients/edit/<?= $client->id; ?>" class="btn btn-round btn-warning btn-icon btn-sm" rel="tooltip" title="Editar" data-placement="left"><i class="fas fa-edit"></i></a>
                      <a href="<?= $this->Url->build('/', true) ?>clients/view/<?= $client->id; ?>" class="btn btn-round btn-info btn-icon btn-sm" rel="tooltip" title="Ver" data-placement="left"><i class="far fa-eye"></i></a>
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
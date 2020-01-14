<?php $title = "Empresas / Proyectos"; 
$this->assign('title', $title);?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="card">
    <div class="card-header d-flex justify-content-between">
      <h4 class="card-title">
        <?= $title; ?>
      </h4>
      <a href="<?= $this->Url->build('/', true) ?>businesses/add" class="btn btn-primary btn-round btn-icon" rel="tooltip" title="Agregar Empresa / Proyecto" data-placement="left"><i class="fas fa-plus"></i></a>
    </div>
    <div class="card-body">
      <div class="toolbar"></div>
      <div id="datatable_wrapper" class="dataTableswrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12">
            <table id="datatable" class="table table-striped table-bordered dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
              <thead>
                <tr role="row">
                    <th>Empresa / Proyecto</th>
                  <th class="disabled-sorting text-right sorting_desc">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($businesses as $business): ?>
                  <tr role="row">
                    <td><?= $business->name; ?></td>
                    <td class="text-right">
                      <a onclick="system.showSwal('Eliminar','¿Eliminar la Empresa / Proyecto '+'<?= $business->name ?>'+' ?','delete', '<?= $this->Url->build('/', true) ?><?= strtolower($this->request->getParam('controller')) ?>/delete/<?= $business->id; ?>')" class="btn btn-round btn-danger btn-icon btn-sm text-white" rel="tooltip" title="Eliminar" data-placement="left"><i class="fas fa-trash"></i></a>
                      <a href="<?= $this->Url->build('/', true) ?>businesses/edit/<?= $business->id; ?>" class="btn btn-round btn-warning btn-icon btn-sm" rel="tooltip" title="Editar" data-placement="left"><i class="fas fa-edit"></i></a>
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
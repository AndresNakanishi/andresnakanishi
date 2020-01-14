<?php 
$title = "Mensaje de ".$message['Clients']['name'];
$this->assign('title', $title);
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
	<div class="row">
		<div class="col-lg-10 ml-auto mr-auto">
			<div class="card">
			    <div class="card-header">
				    <h4 class="card-title"><?= $title ?> | Fecha: <?= date('d-m-Y',strtotime($message['created_at']))?></h4>
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
			    		<b>Mensaje:</b> <?= $message['message'] ?>
			    	</p>
			    </div>
			    <div class="card-footer">
			    	<a href="<?= $this->Url->build('/', true) ?><?= strtolower($this->request->getParam('controller')) ?>/" class="btn btn-fill btn-primary">Volver</a>
			    </div>
			</div>
		</div>
	</div>
</div>
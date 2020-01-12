<?php 
$title = "Contacto";
$this->assign('title', $title);
?>

<div class="page-header page-header-small" style="height:35vh;" filter-color="black">
    <div class="page-header-image" data-parallax="true" style="background-image: url('img/header.jpg');background-position:50% 30%;">
    </div>
</div>

<div class="contactus-1">

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title">¡Contáctame!</h2>
                <h4 class="description" style="font-weight:400;color:#666">¿Necesitas más información? En lo posible voy a sacarte de dudas, y si quieres contratar mi o nuestros servicios, en lo posible llegar a un acuerdo.</h4>
                <div class="info info-horizontal">
                    <div class="icon icon-primary">
                        <i class="now-ui-icons tech_mobile"></i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">¿Sos más directo?</h4>
                        <p class="description" style="font-weight:400;color:#666">
                            andresnakanishi@gmail.com<br>
                            +54 9 223 300 0563<br>
                            +52 1 715 136 9489<br>
                            Lun - Vie, 8:00-22:00
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-contact card-raised">
		            <?= $this->Form->create(null, ['id' => 'contact-form1', 'role' => 'form']) ?>
                        <div class="card-header text-center">
                            <h4 class="card-title">¿Prefieres una reunión?</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 pr-2">
                                    <label>Nombre</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-2">
                                    <div class="form-group">
                                        <label>Empresa / Proyecto</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="Empresa" aria-label="Empresa" name="project" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="place">Lugar</label>
                                <select class="form-control" id="place" name="place" required>
                                  <option>Videollamada</option>
                                  <option>Mar del Plata</option>
                                  <option selected>Miramar</option>
                                  <option>Morelia</option>
                                  <option>Zitácuaro</option>
                                </select>
                              </div>
                            <div class="form-group">
                                <label>Tu mensaje</label>
                                <textarea name="message" class="form-control" id="message" rows="6" required></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-round pull-right">Enviar</button>
                                </div>
                            </div>
                        </div>
		            <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$title = "Login";
$this->assign('title', $title);
?>
<div class="page-header header-filter" filter-color="black">
        <div class="page-header-image" style="background-image:url(img/header.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-5 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <?= $this->Form->create(null, ['class' => 'form', 'autocomplete' => 'off']); ?>
                            <div class="card-header text-center">
                                <div class="logo-container">
                                    <img src="img/icon-white.png" alt="Nakanishi">
                                </div>
                            </div>
                            <div class="card-body">
                              <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario" name="username">
                              </div>
                              <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                              </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Login</button>
                            </div>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
</div>
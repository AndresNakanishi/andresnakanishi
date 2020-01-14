<?php
$title = "Home";
$this->assign('title', $title);
?>
<div class="page-header header-filter" filter-color="black">
    <div class="page-header-image" data-parallax="true" style="background-image:url('img/header.jpg');">
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            <!-- Desktop -->
            <div class="col-md-9 text-left mr-auto d-none d-xl-block d-lg-block d-md-block">
                <h1 class="title">Haz crecer la empresa que amas</h1>
                <h4 class="ml-0 pl-0 col-md-9 description">Ayudamos a las compañías a desarrollar estrategias de transformación digital para poder navegar la incertidumbre de esta nueva era digital.</h4>
                <a href="<?= $this->Url->build('/', true) ?>contact" class="btn btn-info btn-lg mr-auto">
                    <b>QUIERO UNA REUNIÓN</b>
                </a>
            </div>
            <!-- Mobile -->
            <div class="col-md-12 text-center mr-auto d-block d-sm-block d-md-none">
                <h1 class="title">Haz crecer la empresa que amas</h1>
                <h4 class="ml-0 pl-0 col-md-10 description">Ayudamos a las compañías a desarrollar estrategias de transformación digital para poder navegar la incertidumbre de esta nueva era digital.</h4>
                <a href="<?= $this->Url->build('/', true) ?>contact" class="btn btn-info btn-lg">
                    <b>QUIERO UNA REUNIÓN</b>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
$title = "Sobre Mi";
$this->assign('title',$title);
?>
<div class="profile-page">
<div class="page-header clear-filter page-header-small" filter-color="primary">
    <div class="page-header-image" data-parallax="true" style="background-image:url('img/header.jpg');">
    </div>
    <div class="container">
        <div class="photo-container">
            <img src="img/profile.jpg" alt="">
        </div>
        <h3 class="title">Andrés Nakanishi</h3>
        <p class="category">Consultor - Desarrollador Web - Longlife Learner</p>
        <div class="content">
            <div class="social-description">
                <h2>+30</h2>
                <p>Cursos</p>
            </div>
            <div class="social-description">
                <h2>4</h2>
                <p>Premios</p>
            </div>
            <div class="social-description">
                <h2>+50</h2>
                <p>Proyectos</p>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="button-container">
            <a href="#button" class="btn btn-primary btn-round btn-lg btn-icon" rel="tooltip" title="Me puedes seguir en Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#button" class="btn btn-primary btn-round btn-lg btn-icon" rel="tooltip" title="También en Facebook">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#button" class="btn btn-primary btn-round btn-lg btn-icon" rel="tooltip" title="O puedes ver mi CV">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <h3 class="title">Un poco sobre mí</h3>
        <p class="description" style="font-weight:400;color:#666">Durante los últimos 7 años, he estado ayudando a distintas compañías y desarrollando aplicaciones web utilizando distintas tecnologías. Hago esto para vivir y me encanta lo que hago, ya que todos los días hay algo nuevo y emocionante que aprender.</p>
        <p class="description" style="font-weight:400;color:#666">Paso mucho tiempo aprendiendo nuevas técnicas, haciendo cursos en línea y cada vez que puedo ayudo a algunas personas a aprender sobre desarrollo web/marketing/diseño a través de grupos de ayuda.</p>
        <p class="description" style="font-weight:400;color:#666">En general amo resolver problemas de todo índole, esto me hace crecer personal y profesionalmente, ya que considero que este camino es uno donde nunca se tiene que parar de aprender.</p>
        <p class="description" style="font-weight:400;color:#666">A parte de todo esto, me encanta pasar tiempo con personas cercanas, para mi no hay nada mejor en la vida que una comida casera entre un par de amigos, donde luego se pueda jugar juegos de mesa, escuchar música donde en el medio hablemos de nuestras vidas con risas de infarto, en fin compartir momentos que valgan la pena ser vividos.</p>
        <p class="description" style="font-weight:400;color:#666">Mis objetivos a nivel profesional son simples, dar a mi socios lo que necesitan en términos de valor, que estén satisfechos porque el proyecto cumpla con todos los objetivos y en fin podamos tener una relación duradera.</p>


        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">
                    Más Información
                </h2>
            </div>
            <div class="col-lg-2 col-md-3">
                <ul class="nav nav-pills nav-pills-primary nav-pills-icons flex-column" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#link10" role="tablist">
                            <i class="fas fa-briefcase"></i>
                            Experiencia
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
                            <i class="fas fa-graduation-cap"></i>
                            Estudios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link12" role="tablist">
                            <i class="fas fa-pencil-ruler"></i>
                            Habilidades
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="link10">
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Autónomo | Argentina - México | 2017 - <?= date('Y') ?>
                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            En estos años he estado trabajando con distintos proyectos donde se ha aportado valor de distintos puntos a cada uno de nuestros socios, utilizando distintas tecnologías y herramientas para tener el mejor resultado al final del proyecto.
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            ASDRA (Asociación de Síndrome de Down Argentina) | Argentina | 2019
                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            ASDRA Task Manager. Es un sistema-plataforma de inserción laboral para personas con síndrome de down. Se llevó a cabo de 6 meses dónde se empezó a implementar tanto la web como la aplicación. Se usaron las siguientes tecnologías: Git + GitHub, Twitter Bootstrap, CakePHP, Javascript, Ionic y MySQL.
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Telecom (Cablevisión) | Argentina | 2018
                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body">
                                            Desarrollo completo de un proyecto de gestión de contratistas para Telecom bajo un acuerdo de confidencialidad (NDA), pero usando LAMP como stack y las siguientes tecnologías: Git + Bitbucket, Twitter Bootstrap, CakePHP, Javascript y MySQL.
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane" id="link11">
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                                <div class="card card-plain">
                                <div class="card-header" role="tab" id="headingFour">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Lic. en Gestión de Sistemas y Negocios | Mar del Plata, Bs. As., Argentina | Universidad CAECE | En curso
                                        <i class="now-ui-icons arrows-1_minimal-down"></i>
                                    </a>
                                </div>

                                <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="card-body">
                                    Ésta licenciatura es una carrera única en Argentina, que es la intersección entre conocimientos importantes en ambas disciplinas combinando las partes más importantes de Ingeniería de Software y Administración de Empresas, lo cual me permitió profundizar conocimientos desde dos puntos de vista que consolidan una base sólida en mi carrera profesional.
                                    </div>
                                </div>
                                </div>
                                <div class="card card-plain">
                                <div class="card-header" role="tab" id="headingFive">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        +30 Cursos | Online | Platzi, Udemy | 2016 - <?= date('Y') ?>
                                        <i class="now-ui-icons arrows-1_minimal-down"></i>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="card-body">
                                        A lo largo de estos años me he concentrado en desarrollar mi carrera profesional entendiendo que no basta con solo especializarte en una sola base de conocimientos, teniendo en cuenta otras disciplinas para mejorar y adquirir nuevas habilidades importantes para mejorar la calidad de mis proyectos, abarcando desde diseño, UX/UI, diseño de producto, desarrollo web/móvil, marketing y hasta inteligencia artificial (que es un tema muy importante y necesario para el futuro cercano). Lo importante de todos estos conocimientos es aplicarlos de forma correcta dedicandole tiempo a la resolución y análisis del problema.
                                    </div>
                                </div>
                                </div>
                                <div class="card card-plain">
                                <div class="card-header" role="tab" id="headingSix">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Técnico en Informática Personal y Profesional | EDET N° 1 - Julio Argentino Roca | Miramar, Bs. As., Argentina | 2017
                                        <i class="now-ui-icons arrows-1_minimal-down"></i>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane" id="link12">
                        <br>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Gestión y planificación de proyectos</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                    <span class="progress-value">85%</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Marketing, ventas y servicio al cliente.</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    <span class="progress-value">80%</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Desarrollo</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                    <span class="progress-value">95%</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Diseño</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span class="progress-value">75%</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Resolución de problemas</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    <span class="progress-value">100%</span>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

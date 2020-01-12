<?php
$title = "Webstudio";
$this->assign('title',$title);
?>
<div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('img/bg.jpg');background-position:50% 15%;">
    </div>
    <div class="content-center">
      <div class="container">
        <h1 class="title">Éste es nuestro estudio</h1>
      </div>
    </div>
</div>

<div class="section section-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">¿Quiénes somos?</h2>
                <h5 class="description" style="font-weight:400;color:#666">Somos pensadores e innovadores decididos a reimaginar la forma en que hacemos lo digital.</h5>
            </div>
        </div>
        <div class="separator separator-primary"></div>
        <div class="section-story-overview">
            <div class="row">
                <div class="col-md-6">
                    <!-- First image on the left side -->
                    <div class="image-container image-left d-none d-xl-block d-lg-block d-md-block" style="background-image: url('img/bg2.jpg');background-position:50% 40%;">
                        <p class="blockquote blockquote-primary">"<b>Sé un punto de referencia de calidad.</b> Algunas personas no están acostumbradas a un ambiente dónde la exelencia es aceptada."
                            <br>
                            <br>
                            <small>-Steve Jobs</small>
                        </p>
                    </div>
                    <!-- Second image on the left side of the article -->
                    <div class="image-container image-left-bottom d-none d-xl-block d-lg-block d-md-block" style="background-image: url('img/bg_equipo.jpg')"></div>
                </div>
                <div class="col-md-5">
                    <!-- First image on the right side, above the article -->
                    <div class="image-container image-right d-none d-xl-block d-lg-block d-md-block" style="background-image: url('img/bg_fer_naka.jpg')"></div>
                    <h3>¿Qué creemos?</h3>
                    <p style="font-weight:400;color:#666">Creemos que crear experiencias memorables es la mejor manera de conectarse con sus consumidores. Desde diseños web dinámicos hasta estrategias de marketing digital de vanguardia, creemos que las soluciones personalizadas que creamos hoy trascenderán las tendencias del mañana. No importa su producto o servicio, tiene una historia que contar. Y somos de los mejores estudios para contarlo.
                    </p>
                    <h3>¿Cómo trabajamos?</h3>
                    <p style="font-weight:400;color:#666">Nosotros nos regimos bajo un conjunto de buenas prácticas para trabajar colaborativamente, en equipo, y obtener el mejor resultado posible de un proyecto. Estas prácticas se apoyan unas a otras y su selección tiene origen en un estudio de la manera de trabajar de equipos altamente productivos.</p>
                    <p style="font-weight:400;color:#666">Dependiendo del tamaño del trabajo se realizan entregas parciales y regulares del producto final, priorizadas por el beneficio que aportan al receptor del proyecto. Pero también si el proyecto es más simple, hay revisiones con el cliente a lo largo de una o dos semanas y finalmente se realiza la entrega.</p>
                    <p style="font-weight:400;color:#666">Por último nos gusta mucho trabajar teniendo al cliente presente en el diseño/desarrollo, una serie de reuniónes nos basta para conocer mejor el modelo y estrategias de negocio para así dar un resultado que se enfoque a las métricas indicadas para el crecimiento del proyecto.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="subscribe-line subscribe-line-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="title mt-0">
                    ¿Quieres una reunión o llamada con nosotros?
                </h4>
                <p class="description" style="font-weight:400;color:#666">Perfecto, solo déjanos tu email y nos pondremos en contacto para resolver tus dudas y de si nosotros somos la mejor solución a tus problemas luego de escucharte.</p>
            </div>
            <div class="col-md-6">
                <div class="card card-plain card-form-horizontal">
                    <div class="card-body">
                        <?= $this->Form->create(null, ['id' => 'mail', 'role' => 'form']) ?>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-round btn-block">Hagámoslo!</button>
                                </div>
                            </div>
		                <?= $this->Form->end() ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="features-2 section-image" style="background-image: url('img/bg-meeting.jpg')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto">
                <h2 class="title">Somos de mucha ayuda</h2>
                <h4 class="description"><b>En la actualidad es necesario contar con una presencia digital debido al gran desarrollo competitivo de las redes. Las personas buscan información para comprar algún producto y/o solicitando servicios. Por lo tanto, día a día las características de los diseños que ofrecemos son creativos, intuitivos, responsivos, acorde al presupuesto.</b></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-success icon-circle">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                    <h4 class="info-title">Branding<br>Estratégia de Marca</h4>
                    <p class="description"><b>Es importante porque no solo es lo que causa una impresión memorable en sus clientes y que la misma sea adaptable a distintos entornos, tanto gráficos como digitales.</b></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-info icon-circle">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h4 class="info-title">Desarrollo Web<br>A Medida</h4>
                    <p class="description"><b>La estrategia de tener una presencia en línea le permite crecer su negocio en terminos de clientes, pero también es importante porque ayuda a establecer credibilidad.</b></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-danger icon-circle">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h4 class="info-title">Community Managing<br>Marketing Digital</h4>
                    <p class="description"><b>Las redes sociales lo pueden ayudar a conectarse con sus clientes, aumentar la conciencia sobre su marca, aumentar sus clientes potenciales y en definitiva, sus ventas.</b></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">WebStudio y su gente</h2>
                <h4 class="description"><b>Nuestro estudio web es una familia de profesionales dispersos por el mundo. Somos abiertos, utilizamos nuestra experiencia colectiva, diseño y experiencia técnica para crear contenido de valor y convincente para todos los medios. Aceptamos desafíos con el corazón abierto, el hambre de aprender y la pasión por resolver problemas en equipo.</b></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-image">
                                <a href="<?= $this->Url->build('/about', true); ?>" target="">
                                    <img class="img img-raised rounded" src="img/naka.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h4 class="card-title">Ricardo Andrés Nakanishi</h4>
                                <h6 class="category text-info">Consultor Web - Desarrollador Web</h6>

                                <p class="card-description" style="font-weight:400;color:#666">Suelo encargarme de la dirección de los proyectos, desarrollo, planeación y control de los mismos.</p>

                                <div class="card-footer">
                                    <a href="https://www.instagram.com/andresnakanishi" target="_blank" class="btn btn-icon btn-neutral btn-instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/andresnakanishi" target="_blank" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                                    <a href="https://www.linkedin.com/in/andresnakanishi" target="_blank" class="btn btn-icon btn-neutral btn-linkedin"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-image">
                                <a href="https://www.behance.net/galeanofeeb3f3" target="_blank">
                                    <img class="img img-raised rounded" src="img/fer.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h4 class="card-title">Fernando Galeano</h4>
                                <h6 class="category text-success">Diseñador Gráfico - Social Media Manager</h6>

                                <p class="card-description" style="font-weight:400;color:#666">Es el encargado de llevar a cabo la estratégia de marca a la perfección.</p>

                                <div class="card-footer">
                                    <a href="https://www.behance.net/galeanofeeb3f3" target="_blank" class="btn btn-icon btn-neutral btn-behance"><i class="fab fa-behance"></i></a>
                                    <a href="https://www.instagram.com/fer_witchwood/" target="_blank" class="btn btn-icon btn-neutral btn-instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-image">
                                <a>
                                    <img class="img img-raised rounded" src="img/marce.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h4 class="card-title">Marcelo Verón</h4>
                                <h6 class="category text-warning">Desarrollador Web - Community Manager</h6>
                                <p class="card-description" style="font-weight:400;color:#666">Marcelo es una persona muy lógica y precisa, indispensable en nuestro equipo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-image">
                                <a href="https://www.instagram.com/karol.the.mexican" target="_blank">
                                    <img class="img img-raised rounded" src="img/karol.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h4 class="card-title">Karol Esquivel Hernández</h4>
                                <h6 class="category text-danger">Ilustradora - Fotógrafa</h6>

                                <p class="card-description" style="font-weight:400;color:#666">
                                    Una de nuestras creativas, de la manera más tradicional.
                                </p>

                                <div class="card-footer">
                                    <a href="https://www.instagram.com/karol.the.mexican" target="_blank" class="btn btn-icon btn-neutral btn-instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

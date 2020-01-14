<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>
        Andrés Nakanishi |
        <?= $this->fetch('title') ?>
    </title>
    <link rel="canonical" href="https://www.andresnakanishi.com/" />
    <meta property="og:locale" content="es_ES" />
    <meta name="description" content="Ayudamos a las compañías a desarrollar estrategias de transformación digital para poder navegar la incertidumbre de esta nueva era digital." />
    <meta property="og:title" content="Andrés Nakanishi | Consultor Web" />
    <meta property="og:description" content="Ayudamos a las compañías a desarrollar estrategias de transformación digital para poder navegar la incertidumbre de esta nueva era digital." />
    <meta property="og:url" content="https://www.andresnakanishi.com/" />
    <meta property="og:site_name" content="Andrés Nakanishi" />
    <meta property="og:image" content="https://www.andresnakanishi.com/img/og/bg.jpg" />
    <meta property="og:image:secure_url" content="https://www.andresnakanishi.com/img/og/bg.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property='og:type' content='website' />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Ayudamos a las compañías a desarrollar estrategias de transformación digital para poder navegar la incertidumbre de esta nueva era digital." />
    <meta name="twitter:title" content="Andrés Nakanishi | Consultor Web" />
    <meta name="twitter:image" content="https://www.andresnakanishi.com/img/og/bg.jpg" />
    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156201048-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-156201048-1');
        </script>
    <!-- Google Analytics -->
    <!-- FAVICON -->
    <?= $this->Html->meta('icon', 'img/favicon.png', ['type' => 'image/png']) ?>
    <!-- CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <?= $this->Html->css('all.css') ?>
    <?= $this->Html->css('landing.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="index-page sidebar-collapse">
    <?= $this->element('landing-menu') ?>
    <!-- Content -->
    <div class="wrapper">
        <?= $this->fetch('content') ?>
        <?= $this->element('landing-footer') ?>
    </div>
    <!-- Javascript -->
    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('bootstrap-switch.js') ?>
    <?= $this->Html->script('nouislider.min.js') ?>
    <?= $this->Html->script('moment.js') ?>
    <?= $this->Html->script('bootstrap-notify.js') ?>
    <?= $this->Html->script('bootstrap-datepicker.js') ?>
    <?= $this->Html->script('landing.js') ?>
    <?= $this->Flash->render() ?>
</body>
</html>

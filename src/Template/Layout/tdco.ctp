<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>
        Amor en Pandemia || This is for you
    </title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <meta name="googlebot-news" content="nosnippet">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="https://andresnakanishi.com/img/favicon.png">
    <?= $this->Html->meta('icon', 'img/favicon.png', ['type' => 'image/png']) ?>
    <!-- CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <?= $this->Html->css('all.css') ?>
    <?= $this->Html->css('landing.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script>
        if (location.protocol != 'https:' && location.hostname !== "localhost")
        {
         location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
        }
    </script>
</head>
<body class="index-page sidebar-collapse">
    <!-- Content -->
    <div class="wrapper">
        <?= $this->fetch('content') ?>
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

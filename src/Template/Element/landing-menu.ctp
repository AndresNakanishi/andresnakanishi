<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="75">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="<?php echo $this->Url->build('/', true) ?>" title="Andrés Nakanishi" alt="Andrés Nakanishi">
        <img src="<?php echo $this->Url->build('/', true) ?>img/logo.png" height="50px" />
      </a>
      <button id="toggler" class="navbar-toggler navbar-toggler" type="button" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar top-bar"></span>
        <span class="navbar-toggler-bar middle-bar"></span>
        <span class="navbar-toggler-bar bottom-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end bg-primary" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>blog">
            Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>about">
            Sobre Mí
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>webstudio">
            WebStudio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>cases-of-study">
            Casos de Estudio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>contact">
            Contacto
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Si quieres puedes seguirme en Instagram" data-placement="bottom" href="https://www.instagram.com/andresnakanishi" target="_blank">
            <i class="fab fa-instagram"></i>
            <p class="d-lg-none d-xl-none">Instagram</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="También en Facebook" data-placement="bottom" href="https://www.facebook.com/andresnakanishi" target="_blank">
            <i class="fab fa-facebook-square"></i>
            <p class="d-lg-none d-xl-none">Facebook</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Aquí puedes ver mi CV" data-placement="bottom" href="https://twitter.com/andresnakanishi" target="_blank">
            <i class="fab fa-linkedin"></i>
            <p class="d-lg-none d-xl-none">Linkedin</p>
          </a>
        </li>
        <?php if (isset($authUser)): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->Url->build('/', true) ?>dashboard">
            <i class="fas fa-sign-in-alt"></i> Dashboard
          </a>
        </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>

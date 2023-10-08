<?php 
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
  ?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container"> 
            <div class="navbar-header">
                <a class="navbar-brand" href="inicio"><img src="assets/img/logosinbg.png" width="75" height="30" class="img-fluid"/>
                </a>
            </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="inicio">Inicio
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quienes_somos">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acercade">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formacion">Formación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">Loguearse</a>
              </li>
          <?php if (session()->perfil_id == 1): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
              <a href="">Administrador: <?php echo session('nombre');?></a>
            </div>
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="inicio">Inicio
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quienes_somos">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acercade">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formacion">Formación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">Loguearse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
              </li>
             
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="search" placeholder="...">
              <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
              
            </form>
          </div>
            <?php elseif(session()->perfil_id == 2):?>
            <div class="btn btn-info active btnUser btn-sm">
              <a href="">Cliente: <?php echo session('nombre');?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="inicio">Inicio
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quienes_somos">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acercade">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formacion">Formación</a>
              </li>
              <?php if(session()->get('perfil_id') == 1 || session()->get('perfil_id') == 2): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/logout'); ?>">Cerrar Sesión</a>
               </li>
<?php endif; ?>
        </div>     
           <?php endif;?>   
</nav>
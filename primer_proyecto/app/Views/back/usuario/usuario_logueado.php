<?php 
$session = session();
$nombre = $session->get('nombre');
?>



<!-- Pagina usuario logueado: -->

<div class="content py-3 my-3">
  <div class="container-fluid">
        <div class="row">
            <?php if (session()->getFlashData('msg')):?>
                <div class="alert alert-info" role="alert">
                    <?= session()-> getFlashdata('msg')?>
                </div>
            <?php endif;?>
            <br><br>
            <?php if(session()->perfil_id ==1): ?>
                    <div class="card" data-bs-theme="dark">
                        <div class="card-body">
                            <h5 class="card-title">Permisos Especiales</h5>
                            <p class="card-text">Bienvenido a nuestra pagina, <b><?php echo $nombre; ?></b> Tienes un perfil id = 1, por lo que se te admiten permisos de <b>Administrador</b></b></p>
                            <p class="card-text"><small class="text-body-secondary"> Devs: Geronimo Serial, Santiago Pruyas, Matias Pinat</small></p>
                        </div>
                        <img src="assets/img/loremAdmin.png" class="card-img-bottom" alt="...">
                        </div>
           </div>
      </div>
            </div>
            <?php elseif (session()->perfil_id == 2):?>
                        <div class="card" data-bs-theme="dark">
                        <div class="card-body">
                            <h5 class="card-title">Sesion Iniciada.</h5>
                            <p class="card-text">Bienvenido a nuestra pagina, <b><?php echo $nombre; ?></b></p>
                            <p class="card-text"><small class="text-body-secondary"> Devs: Geronimo Serial, Santiago Pruyas, Matias Pinat</small></p>
                        </div>
                        <img src="assets/img/lorem.jpg" class="card-img-bottom" alt="...">
                        </div>
           </div>
            <?php endif;?>
        
        </div>
        
       
    </div>
</div>
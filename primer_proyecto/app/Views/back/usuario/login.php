<div class="content py-3 my-3">
  <div class="container-fluid">
    <div class="row">
      <div class="login">
      <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg')?>
            </div>
        <?php endif;?>
        <form method="post" action="<?php echo base_url('/enviarlogin')?>" >
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartiremos tu direccion de correo electronico con nadie</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Mantener sesion iniciada</label>
          </div>
          <div class="mb-3">
            <a href="#">¿Has olvidado tu contraseña?</a>
            <a href="/registro">¿Deseas registrarte?</a>
          </div>
          <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</div>
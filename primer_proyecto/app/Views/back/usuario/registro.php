<div class="content py-3 my-3">
    <div class="container-fluid">
        <div class="row">
            <div class="registro">
            <?php $validation = \Config\Services::validation(); ?>
            <form method="post" action="<?php echo base_url('/enviar-form') ?>" class="row g-3 needs-validation" novalidate>
                <?= csrf_field();?>
                <?php if (!empty(session()->getFlashdata('fail'))): ?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('fail'); ?></div>
                <?php endif; ?>
                <?php if (!empty(session()->getFlashdata('success'))): ?>
                    <div class="alert alert-success"><?=session()->getFlashdata('success'); ?></div>
                <?php endif; ?>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nombre</label>
                    <input name = "nombre" type="text" class="form-control" id="validationCustom01" placeholder="Juan" required>
                    <div>
                        <!-- ERROR -->
                        <?php if ($validation->getError('nombre')): ?>
                            <div class="alert alert-danger mt-2">
                                <?= $error = $validation->getError('nombre'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                    <div class="col-md-4">
                      <label for="validationCustom02" class="form-label">Apellido</label>
                      <input name="apellido" type="text" class="form-control" id="validationCustom02" placeholder ="Perez" required>
                      <?php if ($validation->getError('apellido')): ?>
                            <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('apellido'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input name = "usuario" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <?php if ($validation->getError('usuario')): ?>
                            <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('usuario'); ?>
                            </div>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-md-6"> 
                      <label for="validationCustom03" class="form-label">Email</label>
                      <input name="email" type="email" class="form-control" id="validationCustom03" required>
                      <?php if ($validation->getError('email')): ?>
                            <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('email'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                      <label for="validationCustom04" class="form-label">Provincia</label>
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Elija...</option>
                        <option value="Buenos Aires">Buenos Aires</option>
                        <option value="Catamarca">Catamarca</option>
                        <option value="Chaco">Chaco</option>
                        <option value="Chubut">Chubut</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Corrientes">Corrientes</option>
                        <option value="Entre Ríos">Entre Ríos</option>
                        <option value="Formosa">Formosa</option>
                        <option value="Jujuy">Jujuy</option>
                        <option value="La Pampa">La Pampa</option>
                        <option value="La Rioja">La Rioja</option>
                        <option value="Mendoza">Mendoza</option>
                        <option value="Misiones">Misiones</option>
                        <option value="Neuquén">Neuquén</option>
                        <option value="Río Negro">Río Negro</option>
                        <option value="Salta">Salta</option>
                        <option value="San Juan">San Juan</option>
                        <option value="San Luis">San Luis</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Santa Fe">Santa Fe</option>
                        <option value="Santiago del Estero">Santiago del Estero</option>
                        <option value="Tierra del Fuego">Tierra del Fuego</option>
                        <option value="Tucumán">Tucumán</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor, ingrese una provincia.
                      </div>
                    </div>
                    <div class="col-md-3">
                      <label for="validationCustom05" class="form-label">Contraseña</label>
                      <input name ="pass" type="password" class="form-control" id="validationCustom05" required>
                      <?php if ($validation->getError('pass')): ?>
                            <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('pass'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Acepto los terminos y condiciones.
                        </label>
                        <div class="invalid-feedback">
                          Debes estar de acuerdo antes de registrarte.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary" type="submit">Registrarse</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
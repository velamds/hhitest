<h3><?=$titulo?> Cliente</h3>
<form action="?c=cliente&a=Guardar" method="POST" >
    <input name="id" type="hidden" value="<?=$cliente->getId()?>" >
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Sergio Munoz Vela" value="<?=$cliente->getNombre()?>">
  </div>
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="5667241" value="<?=$cliente->getTelefono()?>">
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle 6 #10-24" value="<?=$cliente->getDireccion()?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="sergio@correo.com" value="<?=$cliente->getEmail()?>">
  </div>

<?php if(!$cliente->getId()):?>
  <div class="form-group">
    <label for="contrasena">Password</label>
    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="" value="">
  </div>
<?php endif?>


  <div class="form-group float-right">
    <input type="submit" value="Guardar" class='btn btn-primary'>
  </div>
</form>
<h3><?=$titulo?> Producto</h3>
<form action="?c=producto&a=Guardar" method="POST" >
    <input name="id" type="hidden" value="<?=$producto->getId()?>" >
  <div class="form-group">
    <label for="referencia">Referencia</label>
    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="AX10" value="<?=$producto->getReferencia()?>">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Mouse" value="<?=$producto->getNombre()?>">
  </div>
  <div class="form-group">
    <label for="precio">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" placeholder="20000" value="<?=$producto->getPrecio()?>">
  </div>
  <div class="form-group float-right">
    <input type="submit" value="Guardar" class='btn btn-primary'>
  </div>
</form>
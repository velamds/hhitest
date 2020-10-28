<h3><?=$titulo?> Pedido</h3>
<form action="?c=pedido&a=Guardar" method="POST" >
    <input name="id" type="hidden" value="<?=$pedido->getId()?>" >
    <div class="form-group">
    <label for="clientes">Clientes</label>
    <select class="form-control" id="clientes" name="clientes" required>
        <option value="">Seleccione un cliente</option>
        <?php foreach($this->clientes->Listar() as $cliente): ?>
            <option value="<?=$cliente->getId()?>" 
            <?=$cliente->getId()==$pedido->getCliente() ? 'selected' : ''?> >
            <?=$cliente->getNombre()?> </option>
        <?php endforeach;?>
    </select>
  </div>
  <div class="form-group">
    <label for="productos">Productos</label>
    <select class="form-control" id="productos" name="productos" required>
        <option value="">Seleccione un producto</option>
        <?php foreach($this->productos->Listar() as $producto): ?>
            <option value="<?=$producto->getId()?>"
            <?=$producto->getId()==$pedido->getProducto() ? 'selected' : ''?> >
            <?=$producto->getNombre()?></option>
        <?php endforeach;?>
    </select>
  </div>
  <div class="form-group">
    <label for="cantidad">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="2" value="<?=$pedido->getCantidad()?>">
  </div>

  <div class="form-group float-right">
    <input type="submit" value="Guardar" class='btn btn-primary'>
  </div>
</form>
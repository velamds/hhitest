<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pedidos</h1>
        <a href="?c=pedido&a=Form" class="btn btn-success">Añadir</a>
</div>

<div class="table-responsive">
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio U.</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->model->Listar() as $pedido):?>
                <tr>
                    <td><?=$pedido->getId()?></td>
                    <td><?=$this->clientes->Obtener($pedido->getCliente())->getNombre()?></td>
                    <td><?=$this->productos->Obtener($pedido->getProducto())->getNombre()?></td>
                    <td><?=$pedido->getCantidad()?></td>
                    <td><?=number_format($this->productos->Obtener($pedido->getProducto())->getPrecio(), 0, ',', '.')?></td>
                    <td><?=number_format($this->productos->Obtener($pedido->getProducto())->getPrecio() * $pedido->getCantidad(), 0, ',', '.') ?></td>
                    <td>
                        <a href="?c=pedido&a=Form&id=<?=$pedido->getId()?>" class="btn btn-primary">Modificar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        
        </tbody>
    </table>
</div>

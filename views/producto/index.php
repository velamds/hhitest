<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Productos</h1>
        <a href="?c=producto&a=Form" class="btn btn-success">Añadir</a>
</div>

<div class="table-responsive">
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Referencia</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->model->Listar() as $producto):?>
                <tr>
                    <td><?=$producto->getId()?></td>
                    <td><?=$producto->getReferencia()?></td>
                    <td><?=$producto->getNombre()?></td>
                    <td><?=$producto->getPrecio()?></td>
                    <td>
                        <a href="?c=producto&a=Form&id=<?=$producto->getId()?>" class="btn btn-primary">Modificar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        
        </tbody>
    </table>
</div>

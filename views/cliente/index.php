<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
        <a href="?c=cliente&a=Form" class="btn btn-success">Añadir</a>
</div>

<div class="table-responsive">
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->model->Listar() as $cliente):?>
                <tr>
                    <td><?=$cliente->getId()?></td>
                    <td><?=$cliente->getNombre()?></td>
                    <td><?=$cliente->getTelefono()?></td>
                    <td><?=$cliente->getDireccion()?></td>
                    <td><?=$cliente->getEmail()?></td>
                    <td>
                        <a href="?c=cliente&a=Form&id=<?=$cliente->getId()?>" class="btn btn-primary">Modificar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        
        </tbody>
    </table>
</div>

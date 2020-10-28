
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Compras por Cliente</h1>
    <a href="?c=home" class="btn btn-primary">Volver</a>
</div>
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Compras</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($comprasCliente as $compra):?>
            <tr>
                <td><?=$compra->cliente?></td>
                <td><?=$compra->compra?></td>
            </tr>
            <?php endforeach;?>
        
        </tbody>
    
    </table>

</div>
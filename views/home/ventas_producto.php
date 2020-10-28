<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ventas por Producto</h1>
    <a href="?c=home" class="btn btn-primary">Volver</a>
</div>
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Ventas</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($ventas as $venta):?>
            <tr>
                <td><?=$venta->producto?></td>
                <td><?=$venta->venta?></td>
            </tr>
            <?php endforeach;?>
        
        </tbody>
    
    </table>

</div>
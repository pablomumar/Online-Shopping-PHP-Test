<h1 class="page-header">Lista deproductosen tienda</h1>


<a class="btn btn-primary pull-right" href="?c=productos&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
    <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">ID</th>
        <th style=" background-color: #5DACCD; color:#fff">Imagen</th>
        <th style=" background-color: #5DACCD; color:#fff">Nombre</th>
        <th style=" background-color: #5DACCD; color:#fff">Descripción</th>
        <th style=" background-color: #5DACCD; color:#fff">Precio</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->product_img_name; ?></td>
            <td><?php echo $r->product_name; ?></td>
            <td><?php echo $r->product_desc; ?></td>
            <td><?php echo $r->price; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=productos&a=Crud&id=<?php echo $r->id; ?>">Comprar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
<script  src="../assets/js/datatable.js">

</script>


</html>
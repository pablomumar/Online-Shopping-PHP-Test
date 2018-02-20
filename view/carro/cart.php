<h1 class="page-header">
    <?php echo $productos->id != null ? $productos->product_name : 'Nuevo Registro'; ?>
</h1>

<div id="frm-alumno" action="?c=producto&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $productos->id; ?>" />
    <div>
        <h5>Nombre</h5>
        <p><?php echo $productos->product_name; ?></p>
    </div>

    <div>
        <img src="<?php echo $productos->product_img_name; ?>">
    </div>

    <div>
        <h5>Descripcion</h5>
        <p><?php echo $productos->product_desc; ?></p>
    </div>

    <div>
        <p><?php echo $productos->price; ?></p>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
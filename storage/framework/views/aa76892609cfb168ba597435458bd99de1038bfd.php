Seccion para crear productos
<form action="<?php echo e(url('/almacen')); ?>" method="post" enctype="multipart/form-data">

<?php echo e(csrf_field()); ?>

<label for="Marca"><?php echo e('Marca'); ?></label>
<input type="text" name="Marca" id="Marca">
<br>

<label for="Nombre"><?php echo e('Nombre'); ?></label>
<input type="text" name="Nombre" id="Nombre">
<br>

<label for="Descripcion"><?php echo e('Descripcion'); ?></label>
<input type="text" name="Descripcion" id="Descripcion">
<br>

<label for="Fecha"><?php echo e('Fecha'); ?></label>
<input type="date" name="Fecha" id="Fecha">
<br>

<label for="Cantidad"><?php echo e('Cantidad'); ?></label>
<input type="number" name="Cantidad" id="Cantidad">
<br>

<label for="Precio"><?php echo e('Precio'); ?></label>
<input type="number" name="Precio" id="Precio">
<br>

<input type="submit" value="Agregar">

<a href="<?php echo e(url('almacen')); ?>">Regresar</a>
</form><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/create.blade.php ENDPATH**/ ?>
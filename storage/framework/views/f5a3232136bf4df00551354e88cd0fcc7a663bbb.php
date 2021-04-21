<form action="<?php echo e(url('/almacen/'.$producto->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PATCH')); ?>


<label for="Marca"><?php echo e('Marca'); ?></label>
<input type="text" name="Marca" id="Marca" value="<?php echo e($producto->Marca); ?>">
<br>

<label for="Nombre"><?php echo e('Nombre'); ?></label>
<input type="text" name="Nombre" id="Nombre" value="<?php echo e($producto->Nombre); ?>">
<br>

<label for="Descripcion"><?php echo e('Descripcion'); ?></label>
<input type="text" name="Descripcion" id="Descripcion" value="<?php echo e($producto->Descripcion); ?>">
<br>

<label for="Fecha"><?php echo e('Fecha'); ?></label>
<input type="date" name="Fecha" id="Fecha" value="<?php echo e($producto->Fecha); ?>">
<br>

<label for="Cantidad"><?php echo e('Cantidad'); ?></label>
<input type="number" name="Cantidad" id="Cantidad" value="<?php echo e($producto->Cantidad); ?>">
<br>

<label for="Precio"><?php echo e('Precio'); ?></label>
<input type="number" name="Precio" id="Precio" value="<?php echo e($producto->Precio); ?>">
<br>

<input type="submit" value="Realizar Cambios">

<a href="<?php echo e(url('almacen')); ?>">Regresar</a>

</form><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/edit.blade.php ENDPATH**/ ?>
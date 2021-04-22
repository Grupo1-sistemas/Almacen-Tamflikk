<form action="<?php echo e(url('/almacen/'.$almacen->id_almacen)); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PATCH')); ?>


<label for="marca"><?php echo e('Marca'); ?></label>
<input type="text" name="Marca" id="Marca" value="<?php echo e($almacen->marca); ?>">
<br>

<label for="nombre"><?php echo e('Nombre'); ?></label>
<input type="text" name="Nombre" id="Nombre" value="<?php echo e($almacen->nombre); ?>">
<br>

<label for="descripcion"><?php echo e('Descripcion'); ?></label>
<input type="text" name="Descripcion" id="Descripcion" value="<?php echo e($almacen->descripcion); ?>">
<br>

<label for="cantidad"><?php echo e('Cantidad'); ?></label>
<input type="number" name="Cantidad" id="Cantidad" value="<?php echo e($almacen->cantidad); ?>">
<br>

<label for="precio"><?php echo e('Precio'); ?></label>
<input type="number" name="Precio" id="Precio" value="<?php echo e($almacen->precio); ?>">
<br>

<label for="fecha"><?php echo e('Fecha'); ?></label>
<input type="date" name="Fecha" id="Fecha" value="<?php echo e($almacen->fecha); ?>">
<br>

<input type="submit" value="Realizar Cambios">

<a href="<?php echo e(url('almacen')); ?>">Regresar</a>

</form><?php /**PATH C:\xampp\htdocs\store\resources\views/almacens/edit.blade.php ENDPATH**/ ?>
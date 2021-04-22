<form action="<?php echo e(url('/almacen')); ?>" method="post" enctype="multipart/form-data">

<?php echo e(csrf_field()); ?>

<label for="marca"><?php echo e('Marca'); ?></label>
<input type="text" name="Marca" id="Marca">
<br>

<label for="nombre"><?php echo e('Nombre'); ?></label>
<input type="text" name="Nombre" id="Nombre">
<br>

<label for="descripcion"><?php echo e('Descripcion'); ?></label>
<input type="text" name="Descripcion" id="Descripcion">
<br>

<label for="cantidad"><?php echo e('Cantidad'); ?></label>
<input type="number" name="Cantidad" id="Cantidad">
<br>

<label for="precio"><?php echo e('Precio'); ?></label>
<input type="number" name="Precio" id="Precio">
<br>

<label for="fecha"><?php echo e('Fecha'); ?></label>
<input type="date" name="Fecha" id="Fecha">
<br>

<input type="submit" value="Agregar">

<a href="<?php echo e(url('almacen')); ?>">Regresar</a>
</form><?php /**PATH C:\xampp\htdocs\store\resources\views/almacens/create.blade.php ENDPATH**/ ?>
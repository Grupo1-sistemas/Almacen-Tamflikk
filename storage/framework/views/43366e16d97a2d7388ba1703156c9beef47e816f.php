<a href="<?php echo e(url('almacen/create')); ?>">Agregar</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>IdCompra</th>
            <th>Marca</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($producto->id); ?></td>
            <td><?php echo e($producto->Marca); ?></td>
            <td><?php echo e($producto->Nombre); ?></td>
            <td><?php echo e($producto->Fecha); ?></td>
            <td><?php echo e($producto->Cantidad); ?></td>
            <td><?php echo e($producto->Precio); ?></td>
            <td>
            
            <a href="<?php echo e(url('/almacen/'.$producto->id.'/edit')); ?>">Editar</a>
            
             | 
            
            <form method="post" action="<?php echo e(url('/almacen/'.$producto->id)); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" onclick="return confirm('Seguro que desea eliminar la fila?')">Eliminar</button>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/index.blade.php ENDPATH**/ ?>
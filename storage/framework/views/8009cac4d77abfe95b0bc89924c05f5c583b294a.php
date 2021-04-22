<a href="<?php echo e(url('/almacen/create')); ?>">Agregar</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>IdCompra</th>
            <th>Marca</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $almacens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $almacen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($almacen->id_almacen); ?></td>
            <td><?php echo e($almacen->marca); ?></td>
            <td><?php echo e($almacen->nombre); ?></td>
            <td><?php echo e($almacen->cantidad); ?></td>
            <td><?php echo e($almacen->precio); ?></td>
            <td><?php echo e($almacen->fecha); ?></td>
            <td>
            
            <a href="<?php echo e(url('/almacen/'.$almacen-> id_almacen .'/edit')); ?>">Editar</a>
            
             | 
            
            <form method="post" action="<?php echo e(url('/almacen/'.$almacen-> id_almacen )); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" onclick="return confirm('Seguro que desea eliminar la fila?')">Eliminar</button>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\store\resources\views/almacens/index.blade.php ENDPATH**/ ?>
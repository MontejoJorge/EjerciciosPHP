<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(!empty($zapas)): ?>
    <table border="1px">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        <?php $__currentLoopData = $zapas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($zapa->getMarca()); ?> </td>
                    <td><?php echo e($zapa->getModelo()); ?> </td>
                    <td><?php echo e($zapa->getTipo()); ?> </td>
                    <td><?php echo e($zapa->getPrecio()); ?> </td>
                </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php else: ?>
        <p>No hay zapatillas</p>
    <?php endif; ?>


</body>
</html><?php /**PATH /vagrant/EjerciciosPHP/07-motor-de-plantillas/e03/views/tienda.blade.php ENDPATH**/ ?>
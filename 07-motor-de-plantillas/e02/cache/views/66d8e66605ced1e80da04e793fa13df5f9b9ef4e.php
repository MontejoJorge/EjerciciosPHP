<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(!empty($zapa)): ?>
        <table border="1">
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Precio</th>
            </tr>
            <tr>
                <td><?php echo e($zapa->getMarca()); ?> </td>
                <td><?php echo e($zapa->getModelo()); ?> </td>
                <td><?php echo e($zapa->getTipo()); ?> </td>
                <td><?php echo e($zapa->getPrecio()); ?> </td>
            </tr>
        </table>
    <?php else: ?> 
            <p>No hay zapatillas</p>
    <?php endif; ?>
</body>
</html><?php /**PATH /vagrant/EjerciciosPHP/07-motor-de-plantillas/e02/views/tienda.blade.php ENDPATH**/ ?>
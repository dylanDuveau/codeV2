<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qrcode</title>
</head>
<body>

    <!-- Création du tableau -->

    <table style="width:100%">

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><img src="data:image/png;base64, <?php echo e($product->description); ?>" ><br/> <?php echo e($product->nom); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>



</body>
</html>
<?php /**PATH /var/www/html/testdd/resources/views/exportqr.blade.php ENDPATH**/ ?>
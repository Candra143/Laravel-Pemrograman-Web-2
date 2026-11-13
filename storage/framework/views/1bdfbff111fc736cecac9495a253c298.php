<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>

    <p><strong>Nama:</strong> <?php echo e($product->name); ?></p>
    <p><strong>Deskripsi:</strong> <?php echo e($product->description); ?></p>
    <p><strong>Harga:</strong> <?php echo e($product->price); ?></p>

    <a href="<?php echo e(route('products.index')); ?>">Kembali</a>
</body>
</html><?php /**PATH C:\xampp\htdocs\TOKOBUNGA\laravel-project\resources\views/products/show.blade.php ENDPATH**/ ?>
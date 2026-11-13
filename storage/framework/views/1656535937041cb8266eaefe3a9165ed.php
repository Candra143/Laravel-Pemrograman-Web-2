<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <?php if($errors->any()): ?>
        <ul style="color: red;">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <form action="<?php echo e(route('products.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <p>
            <label>Nama:</label><br>
            <input type="text" name="name" value="<?php echo e(old('name')); ?>">
        </p>
        <p>
            <label>Deskripsi:</label><br>
            <textarea name="description"><?php echo e(old('description')); ?></textarea>
        </p>
        <p>
            <label>Harga:</label><br>
            <input type="number" step="0.01" name="price" value="<?php echo e(old('price')); ?>">
        </p>
        <button type="submit">Simpan</button>
        <a href="<?php echo e(route('products.index')); ?>">Batal</a>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\TOKOBUNGA\laravel-project\resources\views/products/create.blade.php ENDPATH**/ ?>
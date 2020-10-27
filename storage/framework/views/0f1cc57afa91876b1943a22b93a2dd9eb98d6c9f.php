
<?php $__env->startSection('title','Barang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Hello, Barang <?php echo e($tipe); ?>!</h1>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mid\resources\views/barang.blade.php ENDPATH**/ ?>
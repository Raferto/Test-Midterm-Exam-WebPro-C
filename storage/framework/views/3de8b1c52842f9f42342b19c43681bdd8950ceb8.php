
<?php $__env->startSection('title','Barang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="mt-2">Daftar Barang</h1>

            <a href="/items/create" class="btn btn-primary my-3">Tambah Data Barang</a>

            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <ul class="list-group">
                
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo e($item->nama_barang); ?>

                    <a href="/items/<?php echo e($item->id); ?>"class="badge badge-info">detail</a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mid\resources\views/items/index.blade.php ENDPATH**/ ?>
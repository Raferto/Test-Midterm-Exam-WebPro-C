
<?php $__env->startSection('title','Barang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="mt-2">Detail Barang</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($item->nama_barang); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($item->jenis_barang); ?></h6>
                    <!-- <p class="card-text"><?php echo e($item->lain_lain); ?></p> -->

                    <a href="<?php echo e($item->id); ?>/edit" class="btn btn-primary">Edit</a>

                    <form action="/items/<?php echo e($item->id); ?>" method="post" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/items" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mid\resources\views/items/show.blade.php ENDPATH**/ ?>
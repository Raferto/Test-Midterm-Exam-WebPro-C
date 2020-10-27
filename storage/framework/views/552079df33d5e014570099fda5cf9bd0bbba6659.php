
<?php $__env->startSection('title','Form Ubah Data Barang'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Form Ubah Data Barang</h1>
            
            <form method="post" action="/items/<?php echo e($item->id); ?>">
            <?php echo method_field('patch'); ?>
            <!-- untuk keamanan tambahkan csrf -->
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="nama_barang">Nama</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['nama_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    id="nama_barang" placeholder="Masukkan Nama Barang" name="nama_barang" value="<?php echo e($item->nama_barang); ?>">
                    <?php $__errorArgs = ['nama_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"> <?php echo e($message); ?> </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis</label>
                    <!-- old value untuk tetap ada nilanya jika ada yang error -->
                    <input type="text" class="form-control <?php $__errorArgs = ['jenis_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    id="jenis_barang" placeholder="Masukkan Jenis Barang" name="jenis_barang"value="<?php echo e($item->jenis_barang); ?>">
                    <?php $__errorArgs = ['jenis_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"> <?php echo e($message); ?> </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mid\resources\views/items/edit.blade.php ENDPATH**/ ?>
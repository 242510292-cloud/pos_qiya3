

<?php $__env->startSection('title', 'Detail Produk'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<h2>Detail Produk</h2>

<div class="card">
    <div class="card-body">

        <?php if($produk->foto): ?>
            <img src="<?php echo e(asset('storage/'.$produk->foto)); ?>"
                 width="200"
                 class="img-thumbnail mb-3">
        <?php endif; ?>

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <td><?php echo e($produk->id); ?></td>
            </tr>

            <tr>
                <th>User</th>
                <td><?php echo e($produk->user->name); ?></td>
            </tr>

            <tr>
                <th>Nama</th>
                <td><?php echo e($produk->nama); ?></td>
            </tr>

            <tr>
                <th>Jenis</th>
                <td><?php echo e($produk->jenis); ?></td>
            </tr>

            <tr>
                <th>Harga Beli</th>
                <td>Rp <?php echo e(number_format($produk->harga_beli)); ?></td>
            </tr>

            <tr>
                <th>Harga Jual</th>
                <td>Rp <?php echo e(number_format($produk->harga_jual)); ?></td>
            </tr>

            <tr>
                <th>Stok</th>
                <td><?php echo e($produk->stok); ?></td>
            </tr>

            <tr>
                <th>Dibuat</th>
                <td><?php echo e($produk->created_at); ?></td>
            </tr>

            <tr>
                <th>Diupdate</th>
                <td><?php echo e($produk->updated_at); ?></td>
            </tr>

        </table>

        <a href="<?php echo e(route('produk.index')); ?>" class="btn btn-secondary">
            Kembali
        </a>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_qiya2-main\pos_qiya2-main\resources\views/produk/show.blade.php ENDPATH**/ ?>
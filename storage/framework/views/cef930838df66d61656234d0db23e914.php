<?php $__env->startSection('title', 'Dashboard'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->startSection('content'); ?>

<div class="text-center mb-5">
    <h1 class="fw-bold text-primary">
        Dashboard POS
    </h1>

    <h5 class="text-secondary">
        Ringkasan Hari Ini
    </h5>

    <p class="text-muted">
        <?php echo e($tanggalHariIni->translatedFormat('l, d F Y')); ?>

    </p>
</div>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\User::class)): ?>

<div class="row g-4 mb-5">

    <div class="col-12">
        <h3 class="text-primary fw-bold">Today's Sales</h3>
    </div>

    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-header bg-info text-white">
                Total Nilai Penjualan Hari Ini
            </div>

            <div class="card-body text-center">
                <h3 class="fw-bold text-primary">
                    Rp <?php echo e(number_format($ringkasan['total_penjualan'])); ?>

                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-header bg-info text-white">
                Jumlah Transaksi Hari Ini
            </div>

            <div class="card-body text-center">
                <h3 class="fw-bold text-primary">
                    <?php echo e($ringkasan['total_transaksi']); ?>

                </h3>
            </div>
        </div>
    </div>

</div>

<div class="row g-4 mb-5">

    <div class="col-12">
        <h3 class="text-primary fw-bold">
            Cash & Payment Status
        </h3>
    </div>

    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white">
                Total Pembayaran Tunai
            </div>

            <div class="card-body text-center">
                <h3 class="fw-bold text-success">
                    Rp <?php echo e(number_format($ringkasan['total_cash'])); ?>

                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white">
                Total Pembayaran Non Tunai
            </div>

            <div class="card-body text-center">
                <h3 class="fw-bold text-success">
                    Rp <?php echo e(number_format($ringkasan['total_non_tunai'])); ?>

                </h3>
            </div>
        </div>
    </div>

</div>

<?php endif; ?>

<div class="row g-4">

    <div class="col-12">
        <h3 class="text-primary fw-bold">
            Critical Inventory Status
        </h3>
    </div>

    <div class="col-md-6">

        <div class="card shadow border-0">

            <div class="card-header bg-warning text-dark">
                Produk Stok Rendah
            </div>

            <div class="card-body">

                <table class="table table-striped table-hover">

                    <thead class="table-primary">

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Stok</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $produkStokRendah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>

                            <td><?php echo e($produkStokRendah->firstItem() + $index); ?></td>

                            <td><?php echo e($produk->nama); ?></td>

                            <td>

                                <?php if($produk->stok <= 5): ?>

                                    <span class="">
                                        <?php echo e($produk->stok); ?>

                                    </span>

                                <?php else: ?>

                                    <span class="badge bg-warning text-dark">
                                        <?php echo e($produk->stok); ?>

                                    </span>

                                <?php endif; ?>

                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>
                            <td colspan="3" class="text-center text-muted">
                                Seluruh produk berada dalam kondisi stok aman.
                            </td>
                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

                <?php echo e($produkStokRendah->links()); ?>


            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card shadow border-0">

            <div class="card-header bg-danger text-white">
                Produk Habis Stok
            </div>

            <div class="card-body">

                <table class="table table-striped table-hover">

                    <thead class="table-primary">

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Stok</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $produkStokHabis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>

                            <td><?php echo e($produkStokHabis->firstItem() + $index); ?></td>

                            <td><?php echo e($produk->nama); ?></td>

                            <td>
                                <span class="badge bg-danger">
                                    <?php echo e($produk->stok); ?>

                                </span>
                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>
                            <td colspan="3" class="text-center text-muted">
                                Seluruh produk berada dalam kondisi stok aman.
                            </td>
                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

                <?php echo e($produkStokHabis->links()); ?>


            </div>

        </div>

    </div>

</div>

<div class="row mt-5">

    <div class="col-12">

        <div class="card shadow border-0">

            <div class="card-header bg-primary text-white">
                Best Seller Products
            </div>

            <div class="card-body">

                <table class="table table-striped table-hover">

                    <thead class="table-primary">

                        <tr>
                            <th>Nama Produk</th>
                            <th>Stok</th>
                            <th>Unit Terjual</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $produkTerlaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>

                            <td><?php echo e($produk->nama); ?></td>

                            <td><?php echo e($produk->stok); ?></td>

                            <td><?php echo e($produk->total_terjual); ?></td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>

                            <td colspan="3" class="text-center text-muted">
                                Belum ada data penjualan.
                            </td>

                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_qiya2-main\pos_qiya2-main\resources\views/dashboard.blade.php ENDPATH**/ ?>
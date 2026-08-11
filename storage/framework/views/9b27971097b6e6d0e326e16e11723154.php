<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
    <div class="container">

        <a class="navbar-brand fw-bold" href="<?php echo e(url('/dashboard')); ?>">
            POS
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="<?php echo e(route('admin.users')); ?>">
                       Users
                  </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/produk')); ?>">
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/penjualan')); ?>">
                        Penjualan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('jenis-produk.index')); ?>">
                        Jenis Produk
                    </a>
                </li>
             
                <li class="nav-item">
                   <a class="nav-link" href="<?php echo e(route('tentang')); ?>">
                         Tentang
                  </a>
               </li>
            </ul>

            <?php if(auth()->guard()->check()): ?>
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
               <button class="btn btn-info text-white">
                   Logout
              </button>
                </form>
            <?php endif; ?>

        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\pos_qiya2-main\pos_qiya2-main\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>
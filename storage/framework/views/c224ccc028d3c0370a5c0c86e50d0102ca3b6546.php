<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/dist/img/laravel.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SPPR</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="my-auto ml-3">
        <i class="nav-icon fas fa-user-circle fa-2x text-light"></i>
      </div>
      <div class="info">
        <a href="javascript:void(0)" class="d-block"><?php echo e(Auth::user()->username); ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('dashboard.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'dashboard' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('home.index')); ?>" class="nav-link <?php echo e(Request::segment(1) == 'home' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <?php endif; ?>
        
        <?php if(auth()->check() && auth()->user()->hasRole('petugas')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('home.index')); ?>" class="nav-link <?php echo e(Request::segment(1) == 'home' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <?php elseif(auth()->check() && auth()->user()->hasRole('siswa')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('home.index')); ?>" class="nav-link <?php echo e(Request::segment(1) == 'home' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <?php endif; ?>
        
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <li class="nav-header">MANAJEMEN DATA</li>
        <li class="nav-item">
          <a href="<?php echo e(route('siswa.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'siswa' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('pembayaran-spp.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'pembayaran-spp' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('kelas.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'kelas' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-school"></i>
            <p>
              Kelas
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('admin-list.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'admin-list' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Admin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('user.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'user' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('petugas.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'petugas' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Petugas
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('spp.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'spp' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              SPP
            </p>
          </a>
        </li>
        <?php endif; ?>
        
        <?php if(auth()->check() && auth()->user()->hasRole('petugas')): ?>
        <li class="nav-header">MANAJEMEN DATA</li>
        <li class="nav-item">
          <a href="<?php echo e(route('siswa.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'siswa' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('pembayaran-spp.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'pembayaran-spp' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('kelas.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'kelas' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-school"></i>
            <p>
              Kelas
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('spp.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'spp' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              SPP
            </p>
          </a>
        </li>
        <?php endif; ?>

        <?php if(auth()->check() && auth()->user()->hasRole('admin|petugas')): ?>
        <li class="nav-header">PEMBAYARAN</li>
        <li class="nav-item">
          <a href="<?php echo e(route('pembayaran.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'bayar' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-money-check"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('pembayaran.status-pembayaran')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'status-pembayaran' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              Status Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('pembayaran.history-pembayaran')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'history-pembayaran' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-history"></i>
            <p>
              History Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('pembayaran.laporan')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'laporan' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Laporan Pembayaran
            </p>
          </a>
        </li>
        <?php endif; ?>
        
        <?php if(auth()->check() && auth()->user()->hasRole('siswa')): ?>
        <li class="nav-header">PEMBAYARAN</li>
        <li class="nav-item">
          <a href="<?php echo e(route('siswa.pembayaran-spp')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'pembayaran-spp' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('siswa.history-pembayaran')); ?>" class="nav-link <?php echo e(Request::is('siswa/history-pembayaran') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-history"></i>
            <p>
              History Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('siswa.laporan-pembayaran')); ?>" class="nav-link <?php echo e(Request::is('siswa/laporan-pembayaran') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Laporan
            </p>
          </a>
        </li>
        <?php endif; ?>

        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <li class="nav-header">ROLES - PERMISSIONS</li>
        <li class="nav-item">
          <a href="<?php echo e(route('roles.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'roles' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Roles List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('permissions.index')); ?>" class="nav-link <?php echo e(Request::segment(2) == 'permissions' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-key"></i>
            <p>
              Permissions List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('role-permission.index')); ?>" 
          class="nav-link <?php echo e(Request::segment(2) == 'role-permission' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Role - Permission
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('user-role.index')); ?>" 
          class="nav-link <?php echo e(Request::segment(2) == 'user-role' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              User - Role
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('user-permission.index')); ?>" 
          class="nav-link <?php echo e(Request::segment(2) == 'user-permission' ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              User - Permission
            </p>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/layouts/backend/sidebar.blade.php ENDPATH**/ ?>
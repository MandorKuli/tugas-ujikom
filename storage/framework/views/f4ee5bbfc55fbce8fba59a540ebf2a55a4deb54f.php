
<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/chart.js/Chart.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content_title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?php echo e($total_siswa); ?></h3>

        <p>Siswa</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <a href="<?php echo e(route('siswa.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?php echo e($total_kelas); ?></h3>

        <p>Kelas</p>
      </div>
      <div class="icon">
        <i class="fas fa-school"></i>
      </div>
      <a href="<?php echo e(route('kelas.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?php echo e($total_petugas); ?></h3>

        <p>Petugas</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-tie"></i>
      </div>
      <a href="<?php echo e(route('petugas.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?php echo e($total_admin); ?></h3>

        <p>Admin</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-secret"></i>
      </div>
      <a href="<?php echo e(route('admin-list.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<!-- /.row -->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Siswa</div>
                <div class="card-body">
                    <canvas id="canvas" height="200" width="500"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script type="text/javascript" src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/chart.js/Chart.min.js"></script>
<script>
var ctx = document.getElementById("canvas").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Siswa Laki-laki", "Siswa Perempuan"],
      datasets: [{
        label: '',
        data: [
        <?php echo $siswa_laki_laki; ?>,
        <?php echo $siswa_perempuan; ?>,
        ],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
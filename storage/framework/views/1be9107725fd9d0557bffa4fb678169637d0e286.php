
<?php $__env->startSection('title', 'Data Pembayaran'); ?>
<?php $__env->startPush('css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_title', 'Pembayaran Tahun '.$spp->tahun); ?>
<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert','data' => []]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="<?php echo e(route('pembayaran.status-pembayaran.show',$siswa->nisn)); ?>" class="btn btn-danger btn-sm">
          <i class="fas fa-fw fa-arrow-left"></i> KEMBALI
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <?php if($pembayaran->count() > 0): ?>
        <table id="dataTable2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Nisn</th>
            <th>Tanggal Bayar</th>
            <th>Nama Petugas</th>
            <th>Untuk Bulan</th>
            <th>Untuk Tahun</th>
            <th>Nominal</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $pembayaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
          	<td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($row->siswa->nama_siswa); ?></td>
            <td><?php echo e($row->siswa->kelas->nama_kelas); ?></td>
            <td><?php echo e($row->nisn); ?></td>
            <td><?php echo e(\Carbon\Carbon::parse($row->tanggal_bayar)->format('d-m-Y')); ?></td>
            <td><?php echo e($row->petugas->nama_petugas); ?></td>
            <td><?php echo e($row->bulan_bayar); ?></td>
            <td><?php echo e($row->tahun_bayar); ?></td>
            <td><?php echo e($row->jumlah_bayar); ?></td>
            <td>
            	<a href="javascript:(0)" class="btn btn-success btn-sm"><i class=""></i> DIBAYAR</a>
            </td>
          </tr>
 		      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Data Pembayaran Tidak Tersedia!</h4>
          <p>Pembayaran Spp <?php echo e($siswa->nama_siswa); ?> di Tahun <?php echo e($spp->tahun); ?> tidak tersedia.</p>
        </div>
        <?php endif; ?>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="javascript:void(0)" class="btn btn-primary btn-sm">
          <i class="fas fa-fw fa-circle"></i> STATUS PEMBAYARAN
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <?php if($pembayaran->count() > 0): ?>
        <table id="" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Bulan</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = Universe::bulanAll(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($value['nama_bulan']); ?></td>
            <td>
              <?php if(Universe::statusPembayaran($siswa->id, $spp->tahun, $value['nama_bulan']) == 'DIBAYAR'): ?>
                <a href="javascript:(0)" class="btn btn-success btn-sm"><i class=""></i> 
                  <?php echo e(Universe::statusPembayaran($siswa->id, $spp->tahun, $value['nama_bulan'])); ?>

                </a>
              <?php else: ?>
                <a href="javascript:(0)" class="btn btn-danger btn-sm"><i class=""></i> 
                  <?php echo e(Universe::statusPembayaran($siswa->id, $spp->tahun, $value['nama_bulan'])); ?>

                </a>
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Data Status Pembayaran Tidak Tersedia!</h4>
          <p>Status Pembayaran Spp <?php echo e($siswa->nama_siswa); ?> di Tahun <?php echo e($spp->tahun); ?> tidak tersedia.</p>
        </div>
        <?php endif; ?>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<!-- DataTables  & Plugins -->
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $('#dataTable2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/pembayaran/status-pembayaran-show.blade.php ENDPATH**/ ?>
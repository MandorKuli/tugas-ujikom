
<?php $__env->startSection('title', 'Data Pembayaran'); ?>
<?php $__env->startPush('css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- Sweetalert 2 -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/sweetalert2/sweetalert2.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_title', 'Data Pembayaran'); ?>
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
        <a href="<?php echo e(route('pembayaran.index')); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus fa-fw"></i> Tambah Pembayaran</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
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
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          </tbody>
        </table>
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
<!-- Sweetalert 2 -->
<script type="text/javascript" src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
 $(function () {
  
  var table = $("#dataTable2").DataTable({
      processing: true,
      serverSide: true,
      "responsive": true,
      ajax: "<?php echo e(route('pembayaran-spp.index')); ?>",
      columns: [
          {data: 'DT_RowIndex' , name: 'id'},
          {data: 'siswa.nama_siswa', name: 'siswa.nama_siswa'},
          {data: 'siswa.kelas.nama_kelas', name: 'siswa.kelas.nama_kelas'},
          {data: 'nisn', name: 'nisn'},
          {data: 'tanggal_bayar', name: 'tanggal_bayar'},
          {data: 'petugas.nama_petugas', name: 'petugas.nama_petugas'},
          {data: 'bulan_bayar', name: 'bulan_bayar'},
          {data: 'tahun_bayar', name: 'tahun_bayar'},
          {data: 'jumlah_bayar', name: 'jumlah_bayar'},
          {data: 'action', name: 'action', orderable: false, searchable: true},
      ]
  });

}); 

// delete
$("body").on('click', '.btn-delete', function() {
  var id = $(this).attr("id")

  Swal.fire({
    title: 'Yakin hapus data ini?',
    // text: "You won't be able to revert",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "/admin/pembayaran-spp/"+id,
        method: "DELETE",
        success: function(response) {
          $('#dataTable2').DataTable().ajax.reload()
          Swal.fire(
            '',
            response.message,
            'success'
          )
        }
      })
    }
  })
})
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/admin/pembayaran/index.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title', 'Role Permission'); ?>
<?php $__env->startPush('css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_title', 'Role Permission'); ?>
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
      	<a href="javascript:void(0)" class="btn btn-primary btn-sm">
          <i class="fas fa-user-tie fa-fw"></i> Role List
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="dataTable2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Role Name</th>
            <th>Permission</th>
          </tr>
          </thead>
          <tbody>
        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
          	<td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($row->name); ?></td>
            <td>
            	<div class="row mx-auto">
            		<a href="<?php echo e(route('role-permission.create', $row->id)); ?>" class="btn btn-primary btn-sm">
                  <i class="fas fa-edit fa-fw"></i> Handle
                </a>
            	</div>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<script>
  $(function () {
    $("#dataTable1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/admin/role-permission/index.blade.php ENDPATH**/ ?>
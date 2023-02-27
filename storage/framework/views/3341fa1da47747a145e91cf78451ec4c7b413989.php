
<?php $__env->startSection('title', 'User Role'); ?>
<?php $__env->startPush('css'); ?>
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_title', 'User Handle Role'); ?>
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
        <a href="<?php echo e(route('user-role.index')); ?>" class="btn btn-danger btn-sm">
          <i class="fas fa-window-close fa-fw"></i> BACK TO LIST
        </a>
        <a href="javascript:void(0)" class="btn btn-primary btn-sm">
          <i class="fas fa-user-tie fa-fw"></i> USERNAME : <?php echo e($user->username); ?>

        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="POST" action="<?php echo e(route('user-role.store', $user->id)); ?>">
          <?php echo csrf_field(); ?>
          <div class="form-group select2-purple">
            <label>Roles:</label>
            <select class="select2" required="" name="role[]" multiple="multiple" data-dropdown-css-class="select2-purple" data-placeholder="Select a Roles" style="width: 100%;">
              <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($user->hasAnyRole($row->name)): ?>
                    <option selected="" value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
                  <?php else: ?>
                    <option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
                  <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-save fa-fw"></i> SIMPAN
            </button>
          </div>
        </form>
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
<!-- Select2 -->
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript">
  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/admin/user-role/create.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content_title', 'Home'); ?>
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
	<div class="col-lg">
		<div class="jumbotron">
		<?php if(auth()->check() && auth()->user()->hasRole('admin|petugas')): ?>
		  <h1 class="display-4">Hello, <?php echo e(Universe::petugas()->nama_petugas); ?>!</h1>
		<?php endif; ?>

		<?php if(auth()->check() && auth()->user()->hasRole('siswa')): ?>
		  <h1 class="display-4">Hello, <?php echo e(Universe::siswa()->nama_siswa); ?>!</h1>
		<?php endif; ?>
		  <p class="lead">Selamat datang di WEB SPPR.</p>
		  <hr class="my-4">
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/home.blade.php ENDPATH**/ ?>
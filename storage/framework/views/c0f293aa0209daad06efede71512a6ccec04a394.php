
<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('content_title', 'Profile'); ?>
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
<?php if(auth()->check() && auth()->user()->hasRole('admin|petugas')): ?>
<div class="row">
<div class="col-lg">
	<div class="card">
		<div class="card-header">
			Profil
		</div>
		<div class="card-body">		
			<div class="row">
				<div class="col-lg-4">
					<div class="form-group">
						<label for="">Nama Petugas:</label>
						<input type="" name="" value="<?php echo e(Universe::petugas()->nama_petugas); ?>" readonly="" id="" class="form-control">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="">Kode Petugas:</label>
						<input type="" name="" value="<?php echo e(Universe::petugas()->kode_petugas); ?>" readonly="" id="" class="form-control">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="">Username Login:</label>
						<input type="" name="" value="<?php echo e(Auth::user()->username); ?>" readonly="" id="" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php endif; ?>

<?php if(auth()->check() && auth()->user()->hasRole('siswa')): ?>
<div class="row">
<div class="col-lg">
	<div class="card">
		<div class="card-header">
			Profil
		</div>
		<div class="card-body">		
			<div class="row">
				<div class="col-lg-4">
					<div class="form-group">
						<label for="username">Nama Siswa:</label>
						<input type="" name="" value="<?php echo e(Universe::siswa()->nama_siswa); ?>" readonly="" id="" class="form-control">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="username">Kelas:</label>
						<input type="" name="" value="<?php echo e(Universe::siswa()->kelas->nama_kelas); ?>" readonly="" id="" class="form-control">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="username">Nisn:</label>
						<input type="" name="" value="<?php echo e(Universe::siswa()->nisn); ?>" readonly="" id="" class="form-control">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="username">Nis:</label>
						<input type="" name="" value="<?php echo e(Universe::siswa()->nis); ?>" readonly="" id="" class="form-control">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="username">Username Login:</label>
						<input type="" name="" value="<?php echo e(Auth::user()->username); ?>" readonly="" id="" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-lg-5">
		<div class="card">
			<div class="card-header">
				Ubah Password Login
			</div>
			<form method="POST" action="<?php echo e(route('profile.update')); ?>">
			<?php echo csrf_field(); ?>
			<?php echo method_field('patch'); ?>
			<div class="card-body">
				<div class="form-group">
					<label for="old_password">Password Sekarang:</label>
					<input type="password" name="old_password" required="" id="old_password" class="form-control">
					<?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<span class="text-danger">
							<?php echo e($message); ?>

						</span>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group">
					<label for="new_password">Password Baru:</label>
					<input type="password" name="new_password" required="" id="new_password" class="form-control">
					<?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<span class="text-danger">
							<?php echo e($message); ?>

						</span>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save fa-fw"></i> 
						UBAH PASSWORD
					</button>
				</div>
			</form>
			</div>
		</div>
	</div>

	<div class="col-lg-7">
    	<div class="callout callout-danger">
	        <h5>Pemberitahuan!</h5>
	        <p>Password default / Password bawaan dari WEB SPPR adalah : <b>sppr2021</b></p>
      </div>
  	</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spp\spp\resources\views/profile.blade.php ENDPATH**/ ?>
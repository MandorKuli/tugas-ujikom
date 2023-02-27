
<?php $__env->startSection('title', 'Pembayaran Spp '.$siswa->nama_siswa); ?>
<?php $__env->startSection('content_title', 'Pembayaran Spp '.$siswa->nama_siswa); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-6">
    	<div class="callout callout-success">
	        <h5>Info Siswa:</h5>

	        <p>	
	        	Nama Siswa : <b><?php echo e($siswa->nama_siswa); ?></b><br>
		        Nisn : <b><?php echo e($siswa->nisn); ?></b><br>
		        Kelas : <b><?php echo e($siswa->kelas->nama_kelas); ?></b>
	    	</p>
      	</div>
      	<div class="callout callout-danger">
	        <h5>Pemberitahuan!</h5>

	        <p>Garis biru pada list tahun menandakan tahun aktif / tahun sekarang.</p>
      	</div>
  	</div>

  	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<a href="javascript:void(0)" class="btn btn-primary btn-sm">
					<i class="fas fa-circle fa-fw"></i> PILIH TAHUN
				</a>
				<a href="<?php echo e(route('pembayaran.status-pembayaran')); ?>" class="btn btn-danger btn-sm">
					<i class="fas fa-window-close fa-fw"></i> BACK TO LIST
				</a>
			</div>
			<div class="card-body">
				<div class="list-group">
				  <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  	<?php if($row->tahun == date('Y')): ?>
				  	<a href="<?php echo e(route('pembayaran.status-pembayaran.show-status', [$siswa->nisn,$row->tahun])); ?>" class="list-group-item list-group-item-action active">
				  		<?php echo e($row->tahun); ?>

				  	</a>
				  	<?php else: ?>
				  	<a href="<?php echo e(route('pembayaran.status-pembayaran.show-status', [$siswa->nisn,$row->tahun])); ?>" class="list-group-item list-group-item-action">
				  		<?php echo e($row->tahun); ?>

				  	</a>
				  	<?php endif; ?>
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/pembayaran/status-pembayaran-tahun.blade.php ENDPATH**/ ?>
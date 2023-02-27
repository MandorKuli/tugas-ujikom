
<?php $__env->startSection('title', 'Data Pembayaran'); ?>
<?php $__env->startPush('css'); ?>
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_title', 'Tambah Pembayaran'); ?>
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
		<div class="card">
			<div class="card-header">
				<a href="<?php echo e(route('pembayaran.index')); ?>" class="btn btn-danger btn-sm">
				<i class="fas fa-window-close fa-fw"></i> 
			      BATALKAN
			    </a>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('pembayaran.proses-bayar', $siswa->nisn)); ?>">
					<?php echo csrf_field(); ?>
					<div class="row">
						<div class="col-lg-3">
							<div class="form-group">
								<label for="nama_siswa">Nama Siswa:</label>
								<input required="" type="hidden" name="siswa_id" value="<?php echo e($siswa->id); ?>" readonly id="siswa_id" class="form-control">
								<input required="" type="text" name="nama_siswa" value="<?php echo e($siswa->nama_siswa); ?>" readonly id="nama_siswa" class="form-control">
								<?php $__errorArgs = ['nama_siswa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<small class="text-danger"><?php echo e($message); ?></small>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="nisn">Nisn</label>
								<input required="" type="text" name="nisn" value="<?php echo e($siswa->nisn); ?>" readonly id="nisn" class="form-control">
								<?php $__errorArgs = ['nisn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<small class="text-danger"><?php echo e($message); ?></small>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="nis">Nis:</label>
								<input required="" type="text" name="nis" value="<?php echo e($siswa->nis); ?>" readonly id="nis" class="form-control">
								<?php $__errorArgs = ['nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<small class="text-danger"><?php echo e($message); ?></small>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="kelas">Kelas:</label>
								<input required="" type="text" name="kelas" value="<?php echo e($siswa->kelas->nama_kelas); ?>" readonly id="kelas" class="form-control">
								<?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<small class="text-danger"><?php echo e($message); ?></small>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-lg-3">
							<div class="form-group">
								<label for="tahun_bayar">Untuk Tahun:</label>
								<select required="" name="tahun_bayar" id="tahun_bayar" class="form-control select2bs4">
										<option disabled="" selected="">- PILIH TAHUN -</option>
									<?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($row->tahun); ?>"><?php echo e($row->tahun); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="jumlah_bayar" id="nominal_spp_label">Nominal Spp:</label>
								<input type="" name="nominal" readonly="" id="nominal" class="form-control">
								<input required="" type="hidden" name="jumlah_bayar" readonly="" id="jumlah_bayar" class="form-control">
								<?php $__errorArgs = ['jumlah_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
									<small class="text-danger"><?php echo e($message); ?></small>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group select2-purple">
								<label for="bulan_bayar">Untuk Bulan:</label>
								<select required="" name="bulan_bayar[]" id="bulan_bayar" class="select2" multiple="multiple" data-dropdown-css-class="select2-purple" data-placeholder="Pilih Bulan" style="width: 100%;">
									<?php $__currentLoopData = Universe::bulanAll(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bulan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($bulan['nama_bulan']); ?>"><?php echo e($bulan['nama_bulan']); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>	
						<div class="col-lg-3">
							<div class="form-group">
								<label for="total_bayar">Total Bayar:</label>
								<input required="" type="" name="total_bayar" readonly="" id="total_bayar" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary"><i class="fas fa-save fa-fw"></i> 
							KONFIRMASI
						</button>
					</div>						
				</form>
			</div>
		</div>	
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<!-- Select2 -->
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2/js/select2.full.min.js"></script>
<script>
	//Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    function rupiah(number) {
    	var formatter = new Intl.NumberFormat('ID', {
    		style: 'currency',
    		currency: 'idr',
    	})

    	return formatter.format(number)
    }

    $(document).on("change", "#tahun_bayar", function(){
    	var tahun = $(this).val()

    	$.ajax({
    		url: "/pembayaran/spp/"+tahun,
    		method: "GET",
    		success:function(response){
    			$("#nominal_spp_label").html(`Nominal Spp Tahun `+tahun+':')
    			$("#nominal").val(response.nominal_rupiah)
    			$("#jumlah_bayar").val(response.data.nominal)
    		}
    	})
    })

    $(document).on("change", "#bulan_bayar", function(){
    	var bulan = $(this).val()
    	var total_bulan = bulan.length
    	var total_bayar = $("#jumlah_bayar").val()
    	var hasil_bayar = (total_bulan * total_bayar)

    	var formatter = new Intl.NumberFormat('ID', {
    		style: 'currency',
    		currency: 'idr',
    	})

    	$("#total_bayar").val(formatter.format(hasil_bayar))
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MY BLOG LARA\EXPERIMEN\web-spp\resources\views/pembayaran/bayar.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title', 'Laporan'); ?>
<?php $__env->startSection('content_title', 'Laporan'); ?>
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
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">Laporan Pembayaran</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('pembayaran.print-pdf')); ?>">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label for="tanggal_mulai">Tanggal Mulai</label>
						<input type="date" name="tanggal_mulai" required="" class="form-control" id="tanggal_mulai">
					</div>
					<div class="form-group">
						<label for="tanggal_selesai">Tanggal Selesai</label>
						<input type="date" name="tanggal_selesai" required="" class="form-control" id="tanggal_selesai">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger btn-sm">
							<i class="fas fa-print fa-fw"></i> PRINT
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
	$(document).on("click", "#preview", function(){
		var tanggal_mulai = $("#tanggal_mulai").val()
		var tanggal_selesai = $("#tanggal_selesai").val()

		$.ajax({
			url: "/pembayaran/laporan/preview-pdf",
			method: "GET",
			data: {
				tanggal_mulai: tanggal_mulai,
				tanggal_selesai: tanggal_selesai,
			},
			success:function(){
				window.open('/pembayaran/laporan/preview-pdf')
			}
		})
	})
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spp\spp\resources\views/pembayaran/laporan.blade.php ENDPATH**/ ?>
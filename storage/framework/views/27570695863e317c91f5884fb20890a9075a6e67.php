
<?php $__env->startSection('title', 'Data Siswa'); ?>
<?php $__env->startPush('css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- Sweetalert 2 -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/sweetalert2/sweetalert2.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content_title', 'Data Siswa'); ?>
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
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-siswa')): ?>
      	<a href="javascript:void(0)" class="btn btn-primary btn-sm" 
        data-toggle="modal" data-target="#createModal">
          <i class="fas fa-plus fa-fw"></i> Tambah Data
        </a>
      <?php endif; ?>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="dataTable2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Nisn</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>No Telepon</th>
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

<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="store">
      <div class="modal-body">
          <div class="alert alert-danger print-error-msg" style="display: none;">
            <ul></ul>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <label for="nama_siswa">Nama Siswa:</label>
                <input required="" type="text" name="nama_siswa" id="nama_siswa" class="form-control">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="username">Username:</label>
                <input required="" type="text" name="username" id="username" class="form-control">  
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="nisn">Nisn</label>
                <input required="" type="text" name="nisn" id="nisn" class="form-control">  
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="nis">Nis:</label>
                <input required="" type="text" name="nis" id="nis" class="form-control">  
              </div>
            </div>  
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select required="" name="jenis_kelamin" id="jenis_kelamin" class="form-control select2bs4">
                    <option disabled="" selected="">- PILIH JENIS KELAMIN -</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input required="" type="text" name="alamat" id="alamat" class="form-control">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="no_telepon">No Telepon:</label>
                <input required="" type="text" name="no_telepon" id="no_telepon" class="form-control">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="kelas_id">Kelas:</label>
                <select required="" name="kelas_id" id="kelas_id" class="form-control select2bs4">
                  <option disabled="" selected="">- PILIH KELAS -</option>
                  <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($row->id); ?>"><?php echo e($row->nama_kelas); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>  
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save fa-fw"></i> SIMPAN
        </button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Create Modal -->

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="update">
      <div class="modal-body">
          <div class="alert alert-danger print-error-msg" style="display: none;">
            <ul></ul>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="nama_siswa_edit">Nama Siswa:</label>
                <input type="hidden" name="id_edit" id="id_edit" class="form-control" readonly="">
                <input required="" type="text" name="nama_siswa" id="nama_siswa_edit" class="form-control">
              </div>
            </div>  
            <div class="col-lg-6">
              <div class="form-group">
                <label for="alamat_edit">Alamat:</label>
                <input required="" type="text" name="alamat" id="alamat_edit" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="jenis_kelamin_edit">Jenis Kelamin:</label>
                <select required="" name="jenis_kelamin" id="jenis_kelamin_edit" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="no_telepon_edit">No Telepon:</label>
                <input required="" type="text" name="no_telepon" id="no_telepon_edit" class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="kelas_id_edit">Kelas:</label>
                <select required="" name="kelas_id" id="kelas_id_edit" class="form-control">
                  <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($row->id); ?>"><?php echo e($row->nama_kelas); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>  
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save fa-fw"></i> UPDATE
        </button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Edit Modal -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<!-- DataTables  & Plugins -->
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Sweetalert 2 -->
<script type="text/javascript" src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('templates/backend/AdminLTE-3.1.0')); ?>/plugins/select2/js/select2.full.min.js"></script>
<?php echo $__env->make('admin.siswa.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spp\spp\resources\views/admin/siswa/index.blade.php ENDPATH**/ ?>
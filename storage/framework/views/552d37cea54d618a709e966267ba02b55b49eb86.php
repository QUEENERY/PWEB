

<?php $__env->startSection('content'); ?>

	<h3 class="mb-5">Tambah Produk</h3>

	<div class="col-6">
		<form action="/products" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
			<div class="mb-3">
				<label for="judul-produk" class="form-label">Judul Produk</label>
				<input type="text" name="judulproduk" id="judulproduk" class="form-control" required>
                <?php $__errorArgs = ['judulproduk'];
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

			<div class="mb-3">
				<label for="judul-produk" class="form-label">Deskripsi Produk</label>
				<textarea rows="5" name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                <?php $__errorArgs = ['deskripsi'];
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

			<div class="mb-3">
				<label for="harga" class="form-label">Harga Produk</label>
				<input type="number" name="harga" id="harga" class="form-control" required>
                <?php $__errorArgs = ['harga'];
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

			<div class="mb-3">
				<label for="gambar" class="form-label">Gambar Produk</label>
				<input type="file" name="gambar" id="gambar" class="form-control" required>
                <?php $__errorArgs = ['gambar'];
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

			<button type="submit" class="btn btn-custom">Simpan</button>
		</form>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\piah lsp-web-pbo\project-properti\resources\views/pages/produk/tambah.blade.php ENDPATH**/ ?>
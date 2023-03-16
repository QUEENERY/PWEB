

<?php $__env->startSection('content'); ?>
<h3 class="mb-5">Halaman Kelola Data Produk</h3>

<a href="/products/create" class="btn btn-md btn-dark mb-3">Tambah Produk</a>

<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php echo e(session('success')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id Produk</th>
        <th>Nama Produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($show->id); ?></td>
          <td><?php echo e($show->judulproduk); ?></td>
          <td><?php echo e($show->deskripsi); ?></td>
          <td>Rp. <?php echo e(number_format($show->harga, '0', ',', ',')); ?></td>
          <td><img src="<?php echo e(Storage::url($show->gambar)); ?>" alt="<?php echo e($show->judulproduk); ?>" width="100" class="img-thumbnail"></td>
          <td>
            <a href="/products/<?php echo e($show->id); ?>/edit" class="btn btn-sm btn-warning">Edit</a>
            <form action="/products/<?php echo e($show->id); ?>" method="POST" class="d-inline">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\piah lsp-web-pbo\project-properti\resources\views/pages/produk/index.blade.php ENDPATH**/ ?>
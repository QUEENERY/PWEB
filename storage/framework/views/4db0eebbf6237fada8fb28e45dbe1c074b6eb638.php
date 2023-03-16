

<?php $__env->startSection('content'); ?>

<h4 class="text-center mb-5">𝚂𝚎𝚕𝚊𝚖𝚊𝚝 𝚍𝚊𝚝𝚊𝚗𝚐 𝚍𝚒 𝚑𝚊𝚕𝚊𝚖𝚊𝚗 𝚍𝚊𝚜𝚑𝚋𝚘𝚊𝚛𝚍</h4>

<div class="row">
  <div class="col-lg-3 col-sm-12">
    <p class="text-center">Jumlah Data Produk</p>
    <div class="card">
      <div class="card-body text-center">
        <h5><?php echo e($total); ?></h5>
        <span>Produk</span>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\piah lsp-web-pbo\project-properti\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>
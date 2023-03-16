<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Properti</title>
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>

  <div class="container-fluid">
    <div class="row flex-nowrap">

      <!-- Sidebar -->
      <?php echo $__env->make('pages.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End Sidebar -->

      <!-- Main Content -->
      <div class="col py-3">
        <div class="container">
          
            <?php echo $__env->yieldContent('content'); ?>
         
        </div>
      </div>
      <!-- End Main Content -->
    </div>
  </div>

  <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH D:\piah lsp-web-pbo\project-properti\resources\views/pages/main.blade.php ENDPATH**/ ?>
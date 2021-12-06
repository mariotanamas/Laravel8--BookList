<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS Nicholas Mario Tanamas - 2301898512</title>
  <meta charset="utf-8">
  <link href="<?php echo asset('../css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>
<script src="<?php echo asset('../js/bootstrap.bundle.min.js'); ?>"></script>

  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>HAPPY BOOK STORE</h1>
  </div>

  <div class="container">
    <div class="nav justify-content-center">
      <div class="nav-item">
        <a class="tombol" href="<?php echo e(url('/../home')); ?>">Home</a>
    </div>

    <div class="category">
        <a class=" tombol dropdown-toggle" dropdown1="dropdown" href="">Category</a>
        <div class="dropdown-menu">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="dropdown-item" href="/<?php echo e($Category ->id); ?>"><?php echo e($Category->category); ?></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    <div class="nav-item">
        <a class="tombol" href="<?php echo e(url('/contact')); ?>">Contact</a>
    </div>
  </div>
  <div class="container mt-3">
    <div class="row">
      <div class="col">
      </div>
      <div class="col-sm-8 p-1">
        <h4 class ="bg-warning p-2 font-"><?php echo e($bekas -> category); ?></h4>
        <div class="container mt-2">
        <table class="table table-bordered mb-2">
            <thead>
                <tr class="table-success">
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><a class= "d-block p-2 text-decoration-none" href="/detail/<?php echo e($Book ->id); ?>"><?php echo e($Book->title); ?></a></th>
                    <td><?php echo e($Book->detail->author); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class ="gap-2 d-flex justify-content-end">
        <?php echo e($books->links()); ?>

  </div>
  </div>
</div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-2 p-1">
      <h4 class = "bg-warning p-2">Category</h4>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="d-block p-2 text-decoration-none" href="/<?php echo e($Category ->id); ?>"><?php echo e($Category->category); ?></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      </div>

  <div class="container p-1 mt-5 bg-primary text-white text-center">
    <small>&copy Happy Book Store <?php echo date("Y"); ?> </small>
  </div>
 
</body>
</html><?php /**PATH /Users/nicholasmario/utsmario/resources/views/category.blade.php ENDPATH**/ ?>
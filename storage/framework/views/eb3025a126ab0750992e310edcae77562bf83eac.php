<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-info">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(url('/')); ?>">Liens</a>
            </li>
            <a class="nav-link" href="<?php echo e(url('/')); ?>">BDD</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(url('/')); ?>">Liens</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(url('/')); ?>">Témoignages</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(url('/')); ?> ">Formulaires</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(url('/')); ?>">Email</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(url('/')); ?>">Références</a>
          </li>
        </ul>
        <form action="search" method="get" class="form-inline">
          <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Je cherche...">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Chercher</button>
            </span>
          </div>
        </form>
      </nav>

      <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\dev_mse\resources\views/layouts/navi.blade.php ENDPATH**/ ?>
<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item><?php echo e(__('Home')); ?></a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $page ? $page->getContent() : ''; ?>

<h1><?php echo e(__('Special Week')); ?></h1>
<a-row :gutter="15">
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a-col :span="6" class="product-cards-list">
        <?php echo $__env->make('category.card.product', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </a-col>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</a-row>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-ecommerce\resources\views/home.blade.php ENDPATH**/ ?>
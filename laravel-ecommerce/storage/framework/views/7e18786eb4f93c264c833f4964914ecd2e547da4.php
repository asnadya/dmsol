<?php $__env->startSection('breadcrumb'); ?>
      
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        <?php echo e($category->name); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<category-page
  current-url="<?php echo e(request()->url()); ?>"
  :filter-prop="<?php echo e(json_encode(request()->all())); ?>"
  inline-template>
  
  <a-row :gutter="15" >
    <a-col :span="6">
      <?php echo $__env->make('category.card.filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </a-col>
    <a-col :span="18">
      <a-row :gutter="15" justify="center" >
        <?php $__currentLoopData = $categoryProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a-col :xs="24" :sm="12" :md="8">
              <?php echo $__env->make('category.card.product', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </a-col>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </a-row>
    </a-col>
  </a-row>
</category-page>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-ecommerce\resources\views/category/show.blade.php ENDPATH**/ ?>
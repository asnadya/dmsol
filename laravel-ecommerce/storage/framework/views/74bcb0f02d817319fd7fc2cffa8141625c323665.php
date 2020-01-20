<div>
    <a-carousel class="carousel" vertical>
        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div class="banner-<?php echo e($banner->id); ?>">
                <a href="<?php echo e(asset($banner->url)); ?>">
                    <img 
                        style="width:100%"
                        src="<?php echo e('/storage/' . $banner->image_path); ?>"
                        alt="<?php echo e($banner->alt_text); ?>" />
                </a>
            </div>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </a-carousel>
</div>
<?php /**PATH D:\laravel-ecommerce\modules\avored\banner\src/../resources/views/widget/index.blade.php ENDPATH**/ ?>
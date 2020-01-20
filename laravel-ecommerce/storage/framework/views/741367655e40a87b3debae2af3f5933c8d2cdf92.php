<?php $__currentLoopData = $categoryFilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryFilter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
    <a-card class="mt-1" title="<?php echo e($categoryFilter->filter->name); ?>"> 
        
        <?php if($categoryFilter->type == 'PROPERTY' && $categoryFilter->filter->use_for_category_filter): ?>
            <?php if(
                $categoryFilter->filter->field_type === "SELECT" &&
                $categoryFilter->filter->dropdown !== null &&
                $categoryFilter->filter->dropdown->count() > 0
            ): ?>
                <?php $__currentLoopData = $categoryFilter->filter->dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dropdownOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p>
                     
                    <a-checkbox
                        <?php if(request()->get('p___' . $categoryFilter->filter->slug) !== null &&
                            in_array($dropdownOption->id, request()->get('p___' . $categoryFilter->filter->slug))
                        ): ?>
                            default-checked
                        <?php endif; ?>
                        @change="filterCheckboxChange(
                            $event,
                            '<?php echo e($categoryFilter->filter->slug); ?>',
                            '<?php echo e($dropdownOption->id); ?>',
                            '<?php echo e($categoryFilter->type); ?>')">
                        <?php echo e($dropdownOption->display_text); ?>

                    </a-checkbox>
                </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($categoryFilter->type == 'ATTRIBUTE'): ?>
        
            <?php if(
                $categoryFilter->filter->dropdown !== null &&
                $categoryFilter->filter->dropdown->count() > 0
            ): ?>
                <?php $__currentLoopData = $categoryFilter->filter->dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dropdownOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p>
                     
                    <a-checkbox
                        <?php if(request()->get('a___' . $categoryFilter->filter->slug) !== null &&
                            in_array($dropdownOption->id, request()->get('a___' . $categoryFilter->filter->slug))
                        ): ?>
                            default-checked
                        <?php endif; ?>
                        @change="filterCheckboxChange(
                            $event,
                            '<?php echo e($categoryFilter->filter->slug); ?>',
                            '<?php echo e($dropdownOption->id); ?>',
                            'ATTRIBUTE')">
                        <?php echo e($dropdownOption->display_text); ?>

                    </a-checkbox>
                </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endif; ?>
    </a-card>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\laravel-ecommerce\resources\views/category/card/filters.blade.php ENDPATH**/ ?>
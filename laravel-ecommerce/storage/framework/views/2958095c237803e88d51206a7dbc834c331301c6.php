<?php $__env->startSection('meta_title'); ?>
    <?php echo e(__('avored::catalog.product.index.title')); ?>: AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('avored::catalog.product.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" class="mb-1" justify="end">
    <a-col>
        <a 
            href="<?php echo e(route('admin.product.create')); ?>"
            class="ant-btn ant-btn-primary">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('avored::system.btn.create')); ?>

        </a>
    </a-col>
</a-row>
<a-row type="flex" justify="center">
    <a-col :span="24">        
        <product-table inline-template base-url="<?php echo e(asset(config('avored.admin_url'))); ?>">
            <a-table :columns="columns" row-key="id" :data-source="<?php echo e($products); ?>">
                <span slot="action" slot-scope="text, record">
                    
                    <a :href="getEditUrl(record)">
                        <a-icon type="edit"></a-icon>
                    </a>
                    <a :href="getDeleteUrl(record)" v-on:click.prevent="deleteProduct(record)">
                        <a-icon type="delete"></a-icon>
                    </a>
                </span>
            </a-table>
        </product-table>
    </a-col>
</a-row>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-ecommerce\vendor\avored\framework\src/../resources/views/catalog/product/index.blade.php ENDPATH**/ ?>
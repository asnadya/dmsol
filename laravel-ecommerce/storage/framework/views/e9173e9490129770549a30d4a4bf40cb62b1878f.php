<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        <?php echo e(__('Checkout')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <checkout-page 
    :items="<?php echo e(Cart::toArray()); ?>"
    :addresses="<?php echo e($addresses); ?>"
    inline-template>
    <div>
    <h1><?php echo e(__('Checkout Page')); ?></h1>
    <a-form :form="form" @submit.prevent="handleSubmit" id="checkout-form"  method="post" action="<?php echo e(route('order.place')); ?>">
      <?php echo csrf_field(); ?>          
      <a-row :gutter="15">
        <a-col :span="12">
         
              <?php echo $__env->make('checkout.cards.personal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
          
              <?php echo $__env->make('checkout.cards.shipping-address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('checkout.cards.billing-address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        </a-col>
        <a-col :span="12">
              <?php echo $__env->make('checkout.cards.shipping-option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
              <?php echo $__env->make('checkout.cards.payment-option', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
              <?php echo $__env->make('checkout.cards.cart-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
              <a-form-item class="mt-1">
                <a-button
                    type="primary"
                    :loading="submitStatus"
                    html-type="submit">
                    PlaceOrder
                </a-button>
            </a-form-item>
           
        </a-col>
      </a-row>

      
    </a-form>
    </div>
  </checkout-page>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-ecommerce\resources\views/checkout/show.blade.php ENDPATH**/ ?>
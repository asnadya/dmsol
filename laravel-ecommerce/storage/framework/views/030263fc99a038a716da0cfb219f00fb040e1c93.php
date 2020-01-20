<?php
$product->main_image_url = $product->main_image_url;
?>

<product-card 
    :product="<?php echo e($product); ?>"
    add-to-cart-url="<?php echo e(route('add.to.cart')); ?>"
    add-to-wishlist="<?php echo e(route('wishlist.store')); ?>"
    :user-wishlists="<?php echo e($wishlists); ?>"
    remove-from-wishlist="<?php echo e(route('wishlist.destroy')); ?>"
    product-page-url="<?php echo e(route('product.show', $product->slug)); ?>"
    currency="<?php echo e(session()->get('default_currency')->symbol); ?>">
</product-card>
<?php /**PATH D:\laravel-ecommerce\resources\views/category/card/product.blade.php ENDPATH**/ ?>
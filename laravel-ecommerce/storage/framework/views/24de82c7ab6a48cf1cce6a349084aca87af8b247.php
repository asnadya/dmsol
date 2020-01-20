<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="shortcut icon" href="/dmsol.png">
    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <div id="app">
        <avored-layout inline-template>
            <div>
                <a-layout id="components-layout-demo-top" class="layout">
                    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <a-layout-content style="padding: 0 50px">
                    <?php echo $__env->make('partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div :style="{ background: '#fff', padding: '24px', minHeight: '280px' }">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    </a-layout-content>
                    
                    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a-layout>
            </div>
        </avored-layout>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/review.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\laravel-ecommerce\resources\views/layouts/app.blade.php ENDPATH**/ ?>
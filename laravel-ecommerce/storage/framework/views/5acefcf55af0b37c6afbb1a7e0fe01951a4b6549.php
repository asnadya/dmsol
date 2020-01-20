<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('meta_title', 'AvoRed E commerce'); ?></title>

    <script defer src="<?php echo e(asset('avored-admin/js/app.js')); ?>"></script>
    
    <!-- Styles -->
    <link href="<?php echo e(asset('avored-admin/css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <login-fields loginpost="<?php echo e(route('admin.login.post')); ?>" inline-template>
            <div>
                <a-row type="flex" align="middle">
                    <a-col :span="12">
                        <a-row type="flex">
                        <a-col :span="20" :offset="2">
                            <a-card title="<?php echo e(__('avored::system.login-card')); ?>">
                                <a-form
                                    :form="loginForm"
                                    method="post"
                                    action="<?php echo e(route('admin.login.post')); ?>"
                                    @submit="handleSubmit"
                                >
                                    <?php echo csrf_field(); ?>
                                    <a-form-item
                                        <?php if($errors->has('email')): ?>
                                            validate-status="error"
                                            help="<?php echo e($errors->first('email')); ?>"
                                        <?php endif; ?>
                                        label="<?php echo e(__('avored::system.email')); ?>">
                                    <a-input
                                        :auto-focus="true"
                                        name="email"
                                        v-decorator="[
                                        'email',
                                        {
                                            rules: [
                                                {   required: true, 
                                                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'email'])); ?>' 
                                                }
                                            ]
                                        }
                                        ]"
                                    />
                                    </a-form-item>
                                    
                                    <a-form-item 
                                        <?php if($errors->has('password')): ?>
                                            validate-status="error"
                                            help="<?php echo e($errors->first('password')); ?>"
                                        <?php endif; ?>
                                        label="<?php echo e(__('avored::system.password')); ?>">
                                        <a-input
                                            name="password"
                                            type="password"
                                            v-decorator="[
                                            'password',
                                            {rules: [{ required: true, message: '<?php echo e(__('avored::validation.required', ['attribute' => 'password'])); ?>' }]}
                                            ]"
                                        />
                                    </a-form-item>
                                    
                                    <a-form-item>
                                        <a-button
                                            type="primary"
                                            :loading="loadingSubmitBtn"
                                            html-type="submit"
                                        >
                                            <?php echo e(__('avored::system.login')); ?>

                                        </a-button>

                                        <a class="ml-1" href="<?php echo e(route('admin.password.request')); ?>">Forgot password?</a>
                                    </a-form-item>
                                </a-form>
                            </a-card>
                        </a-col>
                        </a-row>
                    </a-col>
               
                    <a-col :span="12">
                     <a-row type="flex" align="middle" class="h-100 text-center">
                      <a-col :span="24">
                            <img 
                                class="height-100"
                                src="<?php echo e(asset('avored-admin/images/avored_admin_login.svg')); ?>" 
                                width="55%" alt="AvoRed Admin Login" />
                        </a-col>
                        </a-row>
                    </a-col>
                </a-row>
            </div>
         
        </login-fields>
    </div>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\laravel-ecommerce\vendor\avored\framework\src/../resources/views/system/login/form.blade.php ENDPATH**/ ?>
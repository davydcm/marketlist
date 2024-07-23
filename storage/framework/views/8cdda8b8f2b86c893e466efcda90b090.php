<?php $__env->startSection('conteudo'); ?>

<div class='container'>
    <div class='row justify-content-center align-items-center vh-100'>
        <div class="col-auto">
            <div class='row'>
                <img src='<?php echo e(url('/public/assets/logo.png')); ?>'>
            </div>
            <div class='row'>
                <a class='text-center btn btn-lg btn-success' href='<?php echo e(route('mylist')); ?>'>ACESSAR LISTA</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\compras\resources\views/home.blade.php ENDPATH**/ ?>
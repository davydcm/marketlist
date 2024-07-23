

<?php $__env->startSection('conteudo'); ?>

<div class='container p-4'>
    <div class='row justify-content-center'>
        <div class="col-auto">
            <div class='row'>
                <img src='<?php echo e(url('/public/assets/logosmall.png')); ?>'>
            </div>
        </div>
    </div>
</div>

<div class='container p-4 text-white'>
    <form action='<?php echo e(route('add')); ?>' method="POST">
        <?php echo csrf_field(); ?>
        <div class='row'>
            <div class="form-group col-8">
                <input name='produto' class="form-control form-control-lg" type="text" placeholder="Produto">
            </div>
            <div class="form-group col-2">
                <input name='qtd' class="form-control form-control-lg" type="number" placeholder="Qtd" min='1'>
            </div>
            <div class="form-group col-2">
                <button type='submit' class='btn btn-success btn-lg'><i class="bi bi-plus-lg"></i></button>
            </div>
        </div>
    </form>
</div> 

<div class='container p-4'>
    <div class='row justify-content-center'>
        <div class="col">
            <div class='row'>
                <div class='row text-white'>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                            <th class="col-md-10">Produto</th>
                            <th class="col-md-1">Qtd</th>
                            <th class="col-md-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(array_key_exists('1',$i)): ?> 
                                    <tr>
                                        <td><?php echo e($i['0']); ?></td>
                                        <td><?php echo e($i['1']); ?></td>
                                        <td><a class='btn btn-danger btn-small' href='<?php echo e(url("/remove/".$i['linha'])); ?>'><i class="bi bi-trash"></i></a></td>
                                    </tr>                                    
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\compras\resources\views/lista/mylist.blade.php ENDPATH**/ ?>
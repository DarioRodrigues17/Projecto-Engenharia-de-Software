<?php $__env->startSection('content'); ?>
<div style="text-align: center; align-right;" >
    <br>

        <form method="POST" <?php echo e(route('menu.show')); ?>>
            <?php echo csrf_field(); ?>
            <br>
            <h1 class="h3 mb-3 fw-normal">O Nosso Menu</h1>
            <form style="text-align: center; align-right;" >
            <table class="table table-striped">
                <tr>
                    <th class="col-3" style="border: 2px solid #000000">Nome: </th>
                    <th class="col-2" style="border: 2px solid #000000">Categoria: </th>
                    <th class="col-2" style="border: 2px solid #000000">Preco: </th>
                    <th class="col-5" style="border: 2px solid #000000">Descricao: </th>
                </tr>

                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style=>
                        <td style="border: 1px solid #000000"><?php echo e($men->nome); ?></td>
                        <td style="border: 1px solid #000000"><?php echo e($men->nomeCategoria->nome); ?></td>
                        <td style="border: 1px solid #000000"><?php echo e($men->preco); ?></td>
                        <td style="border: 1px solid #000000"><?php echo e($men->descricao); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <br>
            <div>
                <input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/menu-client/show.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('dish.create')); ?>">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<br>
<h1 class="h3 mb-3 fw-normal">Pratos:</h1>
<div style="text-align: center; align-right;" >
<body style="margin: 50px;">
    <table class="table table-striped">
        <tr>
            <th class="col-3" style="border: 2px solid #000000">Nome</th>
            <th class="col-3" style="border: 2px solid #000000">Categoria</th>
            <th class="col-3" style="border: 2px solid #000000">Preço</th>
            <th class="col-3" style="border: 2px solid #000000">Descrição </th>
            <th class="col-3"></th>
        </tr>
        <?php $__currentLoopData = $Menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="">
            <td style="border: 1px solid #000000"><?php echo e($Menu->nome); ?></td>
            <td style="border: 1px solid #000000"><?php echo e($Menu->nomeCategoria->nome); ?></td>
            <td style="border: 1px solid #000000"><?php echo e($Menu->preco); ?></td>
            <td style="border: 1px solid #000000"><?php echo e($Menu->descricao); ?></td>
            <td><a href="<?php echo e(route('dish.edit', $Menu->id)); ?>" class="btn btn-light" >Alterar</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
    <br>
    <div>
        <a href="<?php echo e(route('dish.create')); ?>" class="btn btn-primary" >Adicionar Pratos</a>
    </div>
    <br>
    <div>
        <a href="/puser-func" class="btn btn-primary" >Voltar</a>
    </div>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/dish/show.blade.php ENDPATH**/ ?>
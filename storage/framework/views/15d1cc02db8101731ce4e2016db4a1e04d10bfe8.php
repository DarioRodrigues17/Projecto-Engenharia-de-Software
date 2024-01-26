<?php $__env->startSection('content'); ?>
<div style="text-align: center; align-right;" >
    <br>

    <div  style="text-align: right">
        <a  class="btn btn-outline-danger" href="/index">Logout</a>
    </div>
    <form method="POST" <?php echo e(route('messages.createc')); ?>>
        <?php echo csrf_field(); ?>
        <br>
        <h1 class="h3 mb-3 fw-normal">Mensagens</h1>
        <form style="text-align: center; align-right;" >
        <table class="table table-striped">
            <tr>
                <th class="col-2" style="border: 2px solid #000000">Nome: </th>
                <th class="col-10" style="border: 2px solid #000000">Mensagem: </th>
            </tr>

            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style=>
                    <td style="border: 1px solid #000000"><?php echo e($mes->clienteNome->nome); ?></td>
                    <td style="border: 1px solid #000000"><?php echo e($mes->mensagem); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <br>
        <div>
            <a href="/puser-func" class="btn btn-primary">Voltar</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master-no-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/messages-func/show.blade.php ENDPATH**/ ?>
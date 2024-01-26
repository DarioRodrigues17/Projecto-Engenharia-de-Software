<?php $__env->startSection('content'); ?>
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<br>
<h1 class="h3 mb-3 fw-normal">As tuas reservas</h1>
<div style="text-align: center; align-right;" >
    <table>
        <tr>
            <th class="col-3" style="border: 2px solid #000000"> Nome</th>
            <th class="col-1" style="border: 2px solid #000000">Nº Pessoas</th>
            <th class="col-3" style="border: 2px solid #000000">Data</th>
            <th class="col-2" style="border: 2px solid #000000">Hora </th>
            <th class="col-1" style="border: 2px solid #000000">Mesa </th>
            <th class="col-3" style="border: 2px solid #000000">Estado </th>
            <th class="col-3"></th>
        </tr>
        <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style=>
            <td style="border: 1px solid #000000"><?php echo e($res->clienteNome->nome); ?></td>
            <td style="border: 1px solid #000000"><?php echo e($res->n_pessoas); ?></td>
            <td style="border: 1px solid #000000"><?php echo e($res->data_reserva); ?></td>
            <td style="border: 1px solid #000000"><?php echo e($res->horario); ?></td>
            <td style="border: 1px solid #000000"><?php echo e($res->mesa); ?></td>
            <td style="border: 1px solid #000000"><?php switch($res->estado):
                case (0): ?>
                <span class="status">Pendente</span>
                <?php break; ?>

                <?php case (1): ?>
                <span class="status">Aceite</span>
                <?php break; ?>

                <?php default: ?>
                <span class="status">Recusado</span>
                <?php endswitch; ?>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <br>
    <div>
        <a href="<?php echo e(route('reservations.create')); ?>" class="btn btn-primary" >Efetuar nova reserva</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/reservations-client/show.blade.php ENDPATH**/ ?>
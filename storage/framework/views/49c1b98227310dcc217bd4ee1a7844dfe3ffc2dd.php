<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('reservations-func.update', $reservations->id)); ?>">
    <?php echo method_field('patch'); ?>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <input type="hidden" name="id" value="<?php echo e($reservations->id); ?>">
    <br>
    <h1 class="h3 mb-3 fw-normal" style="text-align: center">Alterar reserva</h1>
    <div>
        <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Nome: <?php echo e($reservations->cliente); ?></label>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Número de pessoas: <?php echo e($reservations->n_pessoas); ?></label>
                </div>
        </div>
        <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Data da reserva: <?php echo e($reservations->data_reserva); ?></label>
                </div>
        </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Hora: <?php echo e($reservations->horario); ?></label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Mesa</label>
                        <div class="form-group">
                          <select class="custom-select" name="mesa" id="mesa">
                            <option value="0" selected >Escolher Mesa</option>
                            <option value="1">Mesa 1</option>
                            <option value="2">Mesa 2</option>
                            <option value="3">Mesa 3</option>
                            <option value="4">Mesa 4</option>
                            <option value="5">Mesa 5</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Estado da reserva </label>
                        <div class="form-group">
                          <select class="custom-select" required name="estado" id="estado">
                            <option value="0">Pendente</option>
                            <option value="1">Aceite</option>
                            <option value="2">Recusada</option>
                          </select>
                        </div>
                </div>
            </div>
        <br>
        <div>
            <button class="btn btn-primary" type="submit">Alterar</button>
            <a href="/reservations-func" class="btn btn-light" >Voltar</a>
        </div>
</form>
        <br>
        <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/reservations-func/edit.blade.php ENDPATH**/ ?>
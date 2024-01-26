<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('messages.storec')); ?>">
    <?php echo csrf_field(); ?>
    <div class="bg-light p-5 rounded" style="margin:10px;">

        <?php if(auth()->guard()->guest()): ?>
            <h1>Enviar mensagem</h1>
        <?php endif; ?>

        <div>
            <div class="form-row">
                <div class="col-sm-8">
                    <label for="validationServer01">ID de Cliente:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nome" value="" required>
                </div>
                <br>
                
                <div class="col-sm-8 form-group">
                    <label for="validationServer01">
                        Mensagem:</label>
                    <textarea class="form-control" type="textarea" id="mensagem" name="mensagem" placeholder="Inserir os seus contactos no fim da mensagem" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <br>
        <div>
            <input type="submit" class="btn btn-primary" name="Enviar" value="Enviar">
        </div>
    </div>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/messages-client/create.blade.php ENDPATH**/ ?>
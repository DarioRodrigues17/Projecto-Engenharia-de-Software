<?php if(isset($errors) && count($errors)>0): ?>
<div class="alert alert-warning" role="alert">
    <ul class="list-unstyled">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php if(Session::get('sucess',false)): ?>
    <?php $data=Session::get('sucess');?>
    <?php if(is_array($data)): ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-check"></i><?php echo e($msg); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-check"></i><?php echo e($data); ?>

        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/layouts/partials/messages.blade.php ENDPATH**/ ?>
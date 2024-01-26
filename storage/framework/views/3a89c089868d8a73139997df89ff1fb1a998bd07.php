<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded" style="margin:10px;">

        <div  style="text-align: right">
            <a  class="btn btn-outline-danger" href="/">Logout</a>
        </div>

        <?php if(auth()->guard()->guest()): ?>
            <h1>Restaurante ES</h1>
        <?php endif; ?>
        <h3>Login efetuado com sucesso como <b>funcionario</b>!</h3>
        <br>
        <br>

        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/dish">Pratos</a></h6>
        </div>
        <br>
        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/reservations-func">Reservas</a></h6>
        </div>
        <br>
        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/categories">Categorias</a></h6>
        </div>
        <br>
        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/messages-func">Mensagens</a></h6>
        </div>
        <br>
        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/images">Imagens</a></h6>
        </div>
    </div>

    <br>
    <br>

    <div style="text-align: left">
        <p>Em caso de dúvidas ou problemas contacte o seu gestor informático, obrigado.</p>
        <p><b>Contacto:</b> +351 965 542 351 - Aurélio Silva - IT Manager</p>
    </div>

    <br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-master-no-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/puser-func/show.blade.php ENDPATH**/ ?>
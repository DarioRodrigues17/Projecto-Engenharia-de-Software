<?php $__env->startSection('content'); ?>
<div class="bg-light p-5 rounded" style="margin:10px;">
    <?php if(auth()->guard()->check()): ?>
        <h1>Dashboard</h1>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
        <h2>Restaurante ES</h2>
        <div class="row">
            <div style="text-align: left" class="col-sm-6">
                <img src="https://s2.glbimg.com/TLSi-Skh-SyW_zL3qXKaqas1NNA=/620x413/smart/e.glbimg.com/og/ed/f/original/2021/09/02/predio-tombado-de-1940-em-sao-paulo-recebe-novo-restaurante-italiano_5.jpg" width="500" height="400">
            </div>
            <div style="text-align: right" class="col-sm-6">
                <h4 style="text-align: right"><b>Morada: </b> Avenida Rodrigues de Freitas, nº1, 4300-456 Porto</h4>
                <h5 style="text-align: right"><b>Telefone: </b> 225 376 708</h5>
                <h5 style="text-align: right"><b>Email: </b> restauranteES@es.pt</h5>
                <h5 style="text-align: right"><b>Horário: </b>Segunda a Sábado: 12h às 1h30 Domingos e Feriados: 12h às 23h30</h5>
            </div>
        </div>
        <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/puser-client/show.blade.php ENDPATH**/ ?>
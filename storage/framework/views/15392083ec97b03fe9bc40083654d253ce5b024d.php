<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Restaurante ES</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/menu-client">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/aboutus-client">Sobre nós</a>
                </li>
            </ul>
        </div>
        <?php if(auth()->guard()->guest()): ?>
        <div class="text-end">
            <a href="/puser-client" class="btn btn-outline-warning">Login</a>
            <a href="/puser-func" class="btn btn-outline-danger">Registar</a>
        </div>
    <?php endif; ?>

    </div>
</nav>
<?php /**PATH E:\EngenhariaSoftware\restaurante\resources\views/layouts/partials/navbar-homepage.blade.php ENDPATH**/ ?>
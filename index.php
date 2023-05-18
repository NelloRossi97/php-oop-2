<?php
include __DIR__ . '/data/db.php';
?>

<?php include __DIR__ . '/partials/template/head.php' ?>

<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <div class="logo me-5">
                <img class="bme-2" src="https://static.zoomalia.com/images/logos/it.svg?28"></img>
            </div>


            <ul class="nav col-12 col-lg-auto mx-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Cani</a></li>
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Gatti</a></li>
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Roditori</a></li>
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Altro</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/2048px-User-avatar.svg.png"
                        alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Carrello</a></li>
                    <li><a class="dropdown-item" href="#">Impostazioni</a></li>
                    <li><a class="dropdown-item" href="#">Profilo</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Esci</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card position-relative">
                        <div class="card-img-top">
                            <img src="<?= $product->image ?>" alt="<?= $product->name ?>" class="w-100 h-100">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h4>
                                <?= $product->name ?>
                            </h4>
                            <span>
                                <?= $product->description ?>
                            </span>
                            <span class="text-success fw-bold">Prezzo:
                                <?= $product->price ?>
                            </span>
                            <span class="text-warning fw-bold">Disponibilità:
                                <?= $product->pieces ?>
                            </span>
                            <span>Categoria:
                                <?= $product->getCategory() ?>
                            </span>
                            <span id="label"
                                class="rounded-5 bg-primary d-flex justify-content-center align-items-center position-absolute"
                                style="width: 30px; height: 30px; top: 10px;right: 10px;">
                                <i class="<?= $product->getType() ?>"></i>
                            </span>
                            <span>
                                <?= $product->weight ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</main>

<?php include __DIR__ . '/partials/template/foot.php' ?>
<?php
$api = file_get_contents("http://localhost/VaporStore_web/api/games.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>

<?php
$apiOriginals = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php");
$dadosApiOriginals = json_decode($apiOriginals);

foreach ($dadosApiOriginals as $jogoOriginals) {
}
?>

<?php
$apiPromo = file_get_contents("http://localhost/VaporStore_web/api/games_lancamentos.php");
$dadosApiPromo = json_decode($apiPromo);

foreach ($dadosApiPromo as $jogoPromo) {
}
?>

<!-- <h1 class="text-center">Loja</h1> -->

<div class=" containerCarrousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <?php
            foreach ($dadosApi as $jogo) {
            ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $jogo->id ?>" aria-label="<?= $jogo->title ?>"></button>
            <?php
            }
            ?>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1500">

                <img src="http://localhost/VaporStore_web/img/banners/banner_welcome.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bem Vindo</h5>
                    <p>Aventure-se em nosso catalogo de jogos</p>
                </div>
            </div>

            <?php
            foreach ($dadosApi as $jogo) {
            ?>

                <div class="carousel-item" data-bs-interval="4000">

                    <a href="gamesPage/<?= $jogo->id ?>"><img src="<?= $jogo->banner02 ?>" class="d-block w-100" alt="<?= $jogo->title ?>"></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?= $jogo->title ?></h5>
                        <p><?= $jogo->description ?></p>
                    </div>
                </div>


            <?php
            }
            ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden" alt="Foto Anterior">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden" alt="Proxima Foto">Proximo</span>
        </button>
    </div>
</div>


<!-- <div class="container-cards row row-cols-1 row-cols-md-6 g-4"> -->


<h2 class="titleDestaque text-center mt-5 mb-0">Originais Vapor Store</h2>


<div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4 g-4 x-4">

    <?php
    foreach ($dadosApiOriginals as $jogoOriginals) {
    ?>
        <div class="col">
            <div class="card" data-aos="fade-up" data-aos-duration="500">
                <span class=" <?= $jogoOriginals->promoLabel ?> promoLabel-none">Promocao</span>
                <a href="gamesPage/<?= $jogoOriginals->id ?>"><img src="<?= $jogoOriginals->banner01 ?>" class="card-img-top" alt="<?= $jogoOriginals->title ?>"></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $jogoOriginals->title ?></h5>
                    <p class="card-text"><?= $jogoOriginals->description ?></p>
                    <div class="car-btn">
                        <a href="gamesPage/<?= $jogoOriginals->id ?>" class="btn btn-light">Pagina do Jogo</a>
                        <div>
                            <span class="card-price"><?= $jogoOriginals->price ?></span>
                            <span class="card-promo"><?= $jogoOriginals->promo ?></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>






<h2 class="titleDestaque text-center mt-5 mb-5">Lançamentos</h2>



<div>
    <img src="http://localhost/VaporStore_web/img/banner2.jpg" class="bannerPromo" alt="..." data-aos="fade-up" data-aos-duration="500">

</div>

<div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4 g-4 x-4">
    <?php
    foreach ($dadosApiPromo as $jogoPromo) {
    ?>
        <div class="col">
            <div class="card" data-aos="fade-up" data-aos-duration="500">
                <span class=" <?= $jogoPromo->promoLabel ?> promoLabel-none">Promocao</span>
                <a href="games_lancamentos/<?= $jogoPromo->id ?>"><img src="<?= $jogoPromo->banner01 ?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $jogoPromo->title ?></h5>
                    <p class="card-text"><?= $jogoPromo->description ?></p>
                    <div class="car-btn">
                        <a href="games_lancamentos/<?= $jogoPromo->id ?>" class="btn btn-light">Pagina do Jogo</a>
                        <div>
                            <span class="card-price"><?= $jogoPromo->price ?></span>
                            <span class="card-promo"><?= $jogoPromo->promo ?></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>






<h2 class="titleDestaque text-center mt-5 mb-0">Jogos de Terceiros</h2>

<!-- <div class="container-cards row row-cols-1 row-cols-md-6 g-4"> -->

<div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4 g-4 x-4">
    <?php
    foreach ($dadosApi as $jogo) {
    ?>
        <div class="col">
            <div class="card" data-aos="fade-up" data-aos-duration="500">
                <span class=" <?= $jogo->promoLabel ?> promoLabel-none">Promocao</span>
                <a href="games_ThirdParty/<?= $jogo->id ?>"><img src="<?= $jogo->banner01 ?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $jogo->title ?></h5>
                    <p class="card-text"><?= $jogo->description ?></p>
                    <div class="car-btn">
                        <a href="games_ThirdParty/<?= $jogo->id ?>" class="btn btn-light">Pagina do Jogo</a>
                        <div>
                            <span class="card-price"><?= $jogo->price ?></span>
                            <span class="card-promo"><?= $jogo->promo ?></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
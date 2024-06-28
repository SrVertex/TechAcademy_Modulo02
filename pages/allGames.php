<?php
$apiOriginals = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php");
$dadosApiOriginals = json_decode($apiOriginals);

foreach ($dadosApiOriginals as $jogoOriginals) {
}
?>

<?php
$apiLancamentos = file_get_contents("http://localhost/VaporStore_web/api/games_lancamentos.php");
$dadosApiLancamentos = json_decode($apiLancamentos);

foreach ($dadosApiLancamentos as $jogoLancamentos) {
}
?>

<?php
$api = file_get_contents("http://localhost/VaporStore_web/api/games.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>

<h2 class="titleDestaque text-center mt-5 mb-0">Todos Jogos</h2>

<div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4 g-4 x-4">
    <?php
    foreach ($dadosApiOriginals as $jogoOriginals) {
    ?>
        <div class="col">
            <div class="card mb-3" data-aos="fade-up" data-aos-duration="500">
                <a href="gamesPage/<?= $jogoOriginals->id ?>"><img src="<?= $jogoOriginals->banner01 ?>" class="card-img-top" alt="<?= $jogoOriginals->title ?>"></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $jogoOriginals->title ?></h5>
                    <p class="card-text"><?= $jogoOriginals->description ?></p>
                    <div class="car-btn">
                        <a href="gamesPage/<?= $jogoOriginals->id ?>" class="btn btn-light">Pagina do Jogo</a>
                        <span class="card-price"><?= $jogoOriginals->price ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <?php
    foreach ($dadosApiLancamentos as $jogoLancamentos) {
    ?>
        <div class="col">
            <div class="card mb-3" data-aos="fade-up" data-aos-duration="500">
                <a href="games_lancamentos/<?= $jogoLancamentos->id ?>"><img src="<?= $jogoLancamentos->banner01 ?>" class="card-img-top" alt="<?= $jogoLancamentos->title ?>"></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $jogoLancamentos->title ?></h5>
                    <p class="card-text"><?= $jogoLancamentos->description ?></p>
                    <div class="car-btn">
                        <a href="games_lancamentos/<?= $jogoLancamentos->id ?>" class="btn btn-light">Pagina do Jogo</a>
                        <span class="card-price"><?= $jogoLancamentos->price ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


    <?php
    foreach ($dadosApi as $jogo) {
    ?>
        <div class="col">
            <div class="card mb-3" data-aos="fade-up" data-aos-duration="500">
                <a href="games_ThirdParty/<?= $jogo->id ?>"><img src="<?= $jogo->banner01 ?>" class="card-img-top" alt="<?= $jogo->title ?>"></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $jogo->title ?></h5>
                    <p class="card-text"><?= $jogo->description ?></p>
                    <div class="car-btn">
                        <a href="games_ThirdParty/<?= $jogo->id ?>" class="btn btn-light">Pagina do Jogo</a>
                        <span class="card-price"><?= $jogo->price ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<div class="spacing"></div>
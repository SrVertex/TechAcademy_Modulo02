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


<div class="container-fluid">

    <h1 class="titleDestaque text-center">Jogos em Destaque</h1>
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
            <div class="carousel-item active">
                <img src="http://localhost/VaporStore_web/img/banner_welcome.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>

            <?php
            foreach ($dadosApi as $jogo) {
            ?>

                <div class="carousel-item">
                    <a href="gamesPage/<?= $jogo->id ?>"><img src="<?= $jogo->banner01 ?>" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
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

<h2 class="titleDestaque text-center mt-5">Jogos em Destaque</h2>

<!-- <div class="container-cards row row-cols-1 row-cols-md-6 g-4"> -->

<div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-4 g-4">
    <?php
    foreach ($dadosApi as $jogo) {
    ?>
        <div class="col">
            <div class="card">
                <a href=""><img src="<?= $jogo->banner01 ?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $jogo->title ?></h5>
                    <p class="card-text"><?= $jogo->description ?></p>
                    <div class="car-btn">
                        <a href="gamesPage/<?= $jogo->id ?>" class="btn btn-light">Pagina do Jogo</a>
                        <span class="card-price"><?= $jogo->price ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>







<h2 class="titleDestaque text-center mt-3">Jogos em Destaque</h2>



<div class="container-fluid">
    <img src="http://localhost/VaporStore_web/img/banner2.jpg" class="bannerPromo" alt="...">

</div>








<?php
echo "<p>{$jogo->id} - {$jogo->title}</p>";



?>
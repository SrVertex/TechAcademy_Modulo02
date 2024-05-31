<?php

$api = file_get_contents("http://localhost/VaporStore_web/api/games.php");
$dadosApi = json_decode($api);

?>

<?php
foreach ($dadosApi as $jogo) {
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
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $jogo->id?>" aria-label="<?= $jogo->title?>"></button>
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
                    <a href="gamesPage/<?=$jogo->id?>"><img src="<?=$jogo->banner01?>" class="d-block w-100" alt="..."></a>
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












<?php
echo "<p>{$jogo->id} - {$jogo->title}</p>";



?>
<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php/");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>

<div class="containerHeader">
    <div>
        <a href="home">Jogos > <a href="<?= $jogo->categoryLink ?>"><?= $jogo->category ?> ></a> <a href="gamesPage/<?= $jogo->id ?>"><?= $jogo->title ?> ></a> </a>

        <h3><?= $jogo->title ?></h3>
    </div>

    <a href="login" class="btn btn-light btnCreator">Pagina do Criador</a>


</div>







<div class="containerStore">
    <div class="containerStore-base">
        <div class="containerStore-base-carousel">



            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <img src="<?= $jogo->screenShot01 ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="<?= $jogo->screenShot02 ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="<?= $jogo->screenShot03 ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="<?= $jogo->screenShot04 ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Voltar</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Proxima</span>
                </button>





                <div class="carousel-indicators">
                    <button type="button" class="active" data-bs-target="#carouselExampleFade" data-bs-slide-to="0">
                        <img src="<?= $jogo->screenShot01 ?>" alt="">
                    </button>

                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1">
                        <img src="<?= $jogo->screenShot02 ?>" alt="">
                    </button>

                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2">
                        <img src="<?= $jogo->screenShot03 ?>" alt="">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3">
                        <img src="<?= $jogo->screenShot04 ?>" alt="">
                    </button>
                </div>

            </div>

        </div>











        <div class="containerStore-base-info">
            <div>
                <img src="<?= $jogo->banner01 ?>"" alt=" <?= $jogo->title ?>">
                <p class="gameDescription"><?= $jogo->description ?></p>
            </div>
            <a class="fuctions" href="">
                <span class="titleFuncion">TODAS AS ANÁLISES: </span>
                <span class="descriptionFuncion analiseBoa"><?= $jogo->analisesBoa ?> </span>
                <span class="descriptionFuncion analiseNeutra"><?= $jogo->analisesNeutra ?> </span>
                <span class="descriptionFuncion analiseRuim"><?= $jogo->analisesRuim ?> </span>
            </a>
            <div class="fuctions">
                <span class="titleFuncion">DATA DE LANÇAMENTO: </span>
                <span class="creatorLink"><?= $jogo->realeaseDate ?></span>
            </div>
            <div class="fuctions">
                <span class="titleFuncion">DESENVOLVEDOR: </span>
                <a class="creatorLink" href="creatorPage"><?= $jogo->creator ?></a>
                <span></span>
            </div>
            <div class="fuctions">
                <span class="titleFuncion">DISTRIBUIDORA: </span>
                <a class="creatorLink" href="<?= $jogo->distributorSite ?>"><?= $jogo->distributor ?></a>
                <span></span>
            </div>
        </div>
    </div>
</div>
<div class="containerStore-main">
    <div class="containerStore-main-left">
        <p>tecte</p>
    </div>
    <div class="containerStore-main-right">
        <p>tecte</p>
    </div>
</div>

<div class="containerStore-main">
    <div class="containerStore-main-left">
        <p>tecte</p>
    </div>
    <div class="containerStore-main-right">
        <p>tecte</p>
    </div>
</div>


<div class="containerStore-footer">
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
        <div class="areaBuy">
            <h3>Comprar <?= $jogo->title ?></h3>
            <div class="buttonBuy">
                <span><?= $jogo->price ?></span>

                <a href="<?= $jogo->gameLink ?>" class="buy">Comprar</a>
            </div>
        </div>

        <div class="sobre">
            <div class="divider"></div>
            <h5>SOBRE ESTE JOGO</h5>
            <p><?= $jogo->descriptionFull ?></p>
        </div>
        <div class="sobre">
            <div class="divider"></div>
            <h5>REQUISITOS DE SISTEMA</h5>
            <div class="cardRequisitos">
                <div class="cardRequisitos-Left">
                    <p><span>MINIMOS:</span></p>
                    <p><span>Requer um processador e sistema operacional de 64 bits</span></p>
                    <p>SO: <span><?= $jogo->SO_Min ?></span> </p>
                    <p>Processador: <span><?= $jogo->CPU_Min ?></span></p>
                    <p>Memória: <span><?= $jogo->memory_Min ?></span> </p>
                    <p>Placa e video: <span><?= $jogo->GPU_Min ?></span></p>
                    <p>Armazenamento: <span><?= $jogo->storage_Min ?></span></p>
                    <p>Outras Observações: <span><?= $jogo->OBS_Min ?></span> </p>

                </div>
                <div class="cardRequisitos-Right">
                    <p><span>RECOMENDADOS:</span></p>
                    <p><span>Requer um processador e sistema operacional de 64 bits</span></p>
                    <p>SO: <span><?= $jogo->SO_Recomendate ?></span> </p>
                    <p>Processador: <span><?= $jogo->CPU_Recomendate ?></span></p>
                    <p>Memória: <span><?= $jogo->memory_Recomendate ?></span> </p>
                    <p>Placa e video: <span><?= $jogo->GPU_Recomendate ?></span></p>
                    <p>Armazenamento: <span><?= $jogo->storage_Recomendate ?></span></p>
                    <p>Outras Observações: <span><?= $jogo->OBS_Recomendate ?></span> </p>

                </div>
            </div>
        </div>
        <div class="sobre">
            <div class="divider"></div>
            <h5>POLITICA DE PRIVACIDADE</h5>
            <a class="creatorLink" href="<?= $jogo->privacity ?>"><?= $jogo->privacity ?></a>
        </div>
        <div class="sobre">
            <div class="divider"></div>
            <h5>ACORDO DE USUARIO</h5>
            <a class="creatorLink" href="<?= $jogo->userAccept ?>"><?= $jogo->userAccept ?></a>
        </div>
        <div class="sobre">
            <div class="divider"></div>
            <h5>PLATAFORMA: </h5>
            <p class="creatorLink"><?= $jogo->plataform ?></p>
        </div>
        <div class="sobre">
            <div class="divider"></div>
            <h5>ANALISES DE USUARIOS</h5>
            <div class="analises">

                <!-- analises01 -->

                <div class="cardAnalises">
                    <div class="cardAnalises-user">
                        <img src="<?= $jogo->analise1_img ?>" alt="">
                        <span><?= $jogo->analise1_userName ?></span>
                    </div>
                    <div class="cardAnalises-description">

                        <div class="likeCard">
                            <?= $jogo->analise1_recomendacaoBoa ?>
                            <?= $jogo->analise1_recomendacaoRuim ?>
                            <p><?= $jogo->analise1_recomendacao ?></p>
                            <p><?= $jogo->analise1_naoRecomendacao ?></p>
                        </div>
                        <div>
                            <span>PUBLICADA: <?= $jogo->analise1_data ?></span>
                            <p class="analiseDescricao"><?= $jogo->analise1_descricao ?></p>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>

                <!-- analises02 -->

                <div class="divider"></div>

                <div class="cardAnalises">
                    <div class="cardAnalises-user">
                        <img src="<?= $jogo->analise2_img ?>" alt="">
                        <span><?= $jogo->analise2_userName ?></span>
                    </div>
                    <div class="cardAnalises-description">

                        <div class="likeCard">
                            <?= $jogo->analise2_recomendacaoBoa ?>
                            <?= $jogo->analise2_recomendacaoRuim ?>
                            <p><?= $jogo->analise2_recomendacao ?></p>
                            <p><?= $jogo->analise2_naoRecomendacao ?></p>
                        </div>
                        <div>
                            <span>PUBLICADA: <?= $jogo->analise2_data ?></span>
                            <p class="analiseDescricao"><?= $jogo->analise2_descricao ?></p>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>

                <!-- analises03 -->

                <div class="divider"></div>

                <div class="cardAnalises">
                    <div class="cardAnalises-user">
                        <img src="<?= $jogo->analise3_img ?>" alt="">
                        <span><?= $jogo->analise3_userName ?></span>
                    </div>
                    <div class="cardAnalises-description">

                        <div class="likeCard">
                            <?= $jogo->analise3_recomendacaoBoa ?>
                            <?= $jogo->analise3_recomendacaoRuim ?>
                            <p><?= $jogo->analise3_recomendacao ?></p>
                            <p><?= $jogo->analise3_naoRecomendacao ?></p>
                        </div>
                        <div>
                            <span>PUBLICADA: <?= $jogo->analise3_data ?></span>
                            <p class="analiseDescricao"><?= $jogo->analise3_descricao ?></p>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>

                <!-- analises04 -->

                <div class="divider"></div>

                <div class="cardAnalises">
                    <div class="cardAnalises-user">
                        <img src="<?= $jogo->analise4_img ?>" alt="">
                        <span><?= $jogo->analise4_userName ?></span>
                    </div>
                    <div class="cardAnalises-description">

                        <div class="likeCard">
                            <?= $jogo->analise4_recomendacaoBoa ?>
                            <?= $jogo->analise4_recomendacaoRuim ?>
                            <p><?= $jogo->analise4_recomendacao ?></p>
                            <p><?= $jogo->analise4_naoRecomendacao ?></p>
                        </div>
                        <div>
                            <span>PUBLICADA: <?= $jogo->analise4_data ?></span>
                            <p class="analiseDescricao"><?= $jogo->analise4_descricao ?></p>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <div class="containerStore-main-right">
        <section>
            <div class="jogoFunctions">
                <div class="jogoFunctions_layer">
                    <i class="bi bi-person-fill"></i>
                    <span><?= $jogo->modoJogo ?></span>
                </div>
                <div class="jogoFunctions_layer">
                    <i class="bi bi-people-fill"></i>
                    <span><?= $jogo->multiplayer ?></span>
                </div>
                <div class="jogoFunctions_layer">
                    <i class="bi bi-controller"></i>
                    <span><?= $jogo->controls ?></span>
                </div>
                <div class="jogoFunctions_layer">
                    <i class="bi bi-tags-fill"></i>
                    <span><?= $jogo->category ?></span>
                </div>
            </div>
        </section>
        <section>
            <div class="idiomas">
                <h6>CLASSIFICACAO INDICATIVA:</h6>
                <div><?= $jogo->pegiInfo ?></div>
            </div>
        </section>
        <section>
            <div class="containerStore-base-info">
                <div class="fuctions">
                    <span class="titleFuncion">TITULO: </span>
                    <a class="creatorLink" href=""><?= $jogo->title ?></a>
                </div>
                <div class="fuctions">
                    <span class="titleFuncion">GENERO: </span>
                    <a class="creatorLink" href="categoryLink"><?= $jogo->category ?></a>
                </div>
                <div class="fuctions">
                    <span class="titleFuncion">DESENVOLVEDOR: </span>
                    <a class="creatorLink" href="creatorPage"><?= $jogo->creator ?></a>
                </div>
                <div class="fuctions">
                    <span class="titleFuncion">DISTRIBUIDORA: </span>
                    <a class="creatorLink" href="<?= $jogo->distributorSite ?>"><?= $jogo->distributor ?></a>
                </div>
                <div class="fuctions">
                    <span class="titleFuncion">LANÇAMENTO: </span>
                    <a class="creatorLink" href=""><?= $jogo->realeaseDate ?></a>
                </div>
            </div>
        </section>
        <section>

        </section>
    </div>
    
</div>




<div class="containerStore-footer">
</div>
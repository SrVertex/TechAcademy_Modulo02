<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php/");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>

<h1 class="text-center">Pagina do criador</h1>



<div class="creatorPage">
    <div class="sobre">

        <h5><?= $jogo->creator ?></h5>
        <div class="cardRequisitos">
            <div class="cardRequisitos-Left">
                <img src="<?= $jogo->creatorImg ?>" alt="<?= $jogo->creator ?>">
            </div>
            <div class="cardRequisitos-Right">
                <p><span>Estudante de Analise e Desenvolvimento de Sistemas 2024</span></p>
                <p>Nome: <span><?= $jogo->creatorName ?></span> </p>
                <p>Idade: <span><?= $jogo->creatorDate ?></span></p>
                <p>Nome Fantasia: <span><?= $jogo->creator ?></span> </p>
                <p>Formacao: <span><?= $jogo->creatorFormation ?></span></p>
            </div>
        </div>
    </div>
</div>


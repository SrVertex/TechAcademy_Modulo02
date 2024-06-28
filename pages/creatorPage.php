<?php
$id = $p[1] ?? NULL;
$dadosApi = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php/");
$dadosApi = json_decode($dadosApi);
$jogo = $dadosApi->$id;
?>

<?php
$id = $p[1] ?? NULL;
$dadosApiPromo = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php/");
$dadosApiPromo = json_decode($dadosApiPromo);
$jogoPromo = $dadosApiPromo->$id;
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

<div class="creatorPage">
    <div class="sobre">
        <h5><?= $jogoPromo->creator ?></h5>
        <div class="cardRequisitos">
            <div class="cardRequisitos-Left">
                <img src="<?= $jogoPromo->creatorImg ?>" alt="<?= $jogoPromo->creator ?>">
            </div>
            <div class="cardRequisitos-Right">
                <p><span>Estudante de Analise e Desenvolvimento de Sistemas 2024</span></p>
                <p>Nome: <span><?= $jogoPromo->creatorName ?></span> </p>
                <p>Idade: <span><?= $jogoPromo->creatorDate ?></span></p>
                <p>Nome Fantasia: <span><?= $jogoPromo->creator ?></span> </p>
                <p>Formacao: <span><?= $jogoPromo->creatorFormation ?></span></p>
            </div>
        </div>
    </div>
</div>
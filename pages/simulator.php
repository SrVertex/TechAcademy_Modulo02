<h1 class="text-center">Jogos de Simulação</h1>
<div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4  x-4">
    <?php
    $apiOriginals = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php");
    $dadosApiOriginals = json_decode($apiOriginals);

    foreach ($dadosApiOriginals as $jogoOriginals) {
        if ($jogoOriginals->categoryLink == 'simulator') {
            echo '<div class="col">';
            echo '<div class="card mb-3" data-aos="fade-up" data-aos-duration="500">';
            echo '<a href="gamesPage/' . $jogoOriginals->id . '"><img src="' . $jogoOriginals->banner01 . '" class="card-img-top" alt="' . $jogoOriginals->title . '"></a>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $jogoOriginals->title . '</h5>';
            echo '<p class="card-text">' . $jogoOriginals->description . '</p>';
            echo '<div class="car-btn">';
            echo '<a href="gamesPage/' . $jogoOriginals->id . '" class="btn btn-light">Pagina do Jogo</a>';
            echo '<span class="card-price">' . $jogoOriginals->price . '</span>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>

    <?php
    $apiLancamentos = file_get_contents("http://localhost/VaporStore_web/api/games_lancamentos.php");
    $dadosApiLancamentos = json_decode($apiLancamentos);

    foreach ($dadosApiLancamentos as $jogoLancamentos) {
        if ($jogoLancamentos->categoryLink == 'simulator') {
            echo '<div class="col">';
            echo '<div class="card mb-3" data-aos="fade-up" data-aos-duration="500">';
            echo '<a href="games_lancamentos/' . $jogoLancamentos->id . '"><img src="' . $jogoLancamentos->banner01 . '" class="card-img-top" alt="' . $jogoLancamentos->title . '"></a>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $jogoLancamentos->title . '</h5>';
            echo '<p class="card-text">' . $jogoLancamentos->description . '</p>';
            echo '<div class="car-btn">';
            echo '<a href="games_lancamentos/' . $jogoLancamentos->id . '" class="btn btn-light">Pagina do Jogo</a>';
            echo '<span class="card-price">' . $jogoLancamentos->price . '</span>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>


    <?php
    $api = file_get_contents("http://localhost/VaporStore_web/api/games.php");
    $dadosApi = json_decode($api);

    foreach ($dadosApi as $jogo) {
        if ($jogo->categoryLink == 'simulator') {
            echo '<div class="col">';
            echo '<div class="card mb-3" data-aos="fade-up" data-aos-duration="500">';
            echo '<a href="games_ThirdParty/' . $jogo->id . '"><img src="' . $jogo->banner01 . '" class="card-img-top" alt="' . $jogo->title . '"></a>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $jogo->title . '</h5>';
            echo '<p class="card-text">' . $jogo->description . '</p>';
            echo '<div class="car-btn">';
            echo '<a href="games_ThirdParty/' . $jogo->id . '" class="btn btn-light">Pagina do Jogo</a>';
            echo '<span class="card-price">' . $jogo->price . '</span>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>

<div class="spacing"></div>
<h1 class="text-center">Jogos de Plataforma</h1>
    <div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4  x-4">
        <?php
        $apiOriginals = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php");
        $dadosApiOriginals = json_decode($apiOriginals);

        foreach ($dadosApiOriginals as $jogoOriginals) {
            if ($jogoOriginals->categoryLink == 'plataform') {
                echo '<div class="col">';
                echo '<div class="card" data-aos="fade-up" data-aos-duration="500">';
                echo '<a href="gamesPage/' . $jogoOriginals->id . '"><img src="' . $jogoOriginals->banner01 . '" class="card-img-top" alt="' . $jogoOriginals->title . '"></a>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $jogoOriginals->title . '</h5>';
                echo '<p class="card-text">' . $jogoOriginals->description . '</p>';
                echo '<div class="car-btn">';
                echo '<a href="gamesPage/' . $jogoOriginals->id . '" class="btn btn-light">Pagina do Jogo</a>';
                echo '<span class="card-price">' . $jogoOriginals->price . '</span>';
                echo '</div>'; // End of car-btn
                echo '</div>'; // End of card-body
                echo '</div>'; // End of card
                echo '</div>'; // End of col
            }
        }
        ?>
    </div> 
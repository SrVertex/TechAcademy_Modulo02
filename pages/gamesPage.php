<div>

    <?php

    $id = $p[1] ?? NULL;

    $dadosApi = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php/");

    $dadosApi = json_decode($dadosApi);

    $jogo = $dadosApi->$id;

    ?>


    <div class="carousel-container">
        <div class="carousel">
            <img src="img1.jpg" alt="Imagem 1">
            <img src="img2.jpg" alt="Imagem 2">
            <img src="img3.jpg" alt="Imagem 3">
            <img src="img4.jpg" alt="Imagem 4">
        </div>
        <button class="carousel-button prev" onclick="prevImage()">&#10094;</button>
        <button class="carousel-button next" onclick="nextImage()">&#10095;</button>
    </div>













    <div class="containerStore">
        <div class="containerStore-base">
            <div class="containerStore-base-carousel">

            </div>
            <div class="containerStore-base-info">

            </div>
        </div>
        <div class="containerStore-main">

        </div>
        <div class="containerStore-footer">

        </div>
        <p><?php echo $jogo->title ?></p>
    </div>

</div>


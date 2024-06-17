<?php
$apiOriginals = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php");
$dadosApiOriginals = json_decode($apiOriginals);

foreach ($dadosApiOriginals as $jogo) {
}
?>

<?php
$apiPromo = file_get_contents("http://localhost/VaporStore_web/api/games_lancamentos.php");
$dadosApiPromo = json_decode($apiPromo);

foreach ($dadosApiPromo as $jogoPromo) {
}
?>


<!-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Link with href
</a>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  Button with data-bs-target
</button>

<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div> -->



<div class="bibliotecaBase">
    <div class="bibliotecaBase-left">
        <h1>Biblioteca</h1>
        <div>
            <ul>
                <?php
                foreach ($dadosApiOriginals as $jogo) {
                ?>
                    <li>
                        <div> <img src="<?= $jogo->logoGame01 ?>" alt="<?= $jogo->title ?>"> <a class="bibliotecaBase-gameTitle" href="<?= $jogo->gameLink ?>"><?= $jogo->title ?></a></div> <a href="<?= $jogo->gameLink ?>" class="btn btn-light">Iniciar Jogo</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>



    </div>


    <div class="bibliotecaBase-right">
    <h1>Lista de Desejos</h1>

    <div>
            <ul>
                <?php
                foreach ($dadosApiOriginals as $jogoPromo) {
                ?>
                    <li>
                        <div> <img src="<?= $jogoPromo->logoGame01 ?>" alt="<?= $jogoPromo->title ?>"> <a class="bibliotecaBase-gameTitle" href="games_lancamentos/<?= $jogoPromo->id ?>"><?= $jogoPromo->title ?></a></div> <a href="games_lancamentos/<?= $jogoPromo->id ?>" class="btn btn-light">Comprar Jogo</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>




</div>



<h2 class="jogadosRecentemente">Jogados Recentemente</h2>

<div class=" containerCarrousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <?php
            foreach ($dadosApiOriginals as $jogoOriginals) {
            ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $jogoOriginals->id ?>" aria-label="<?= $jogoOriginals->title ?>"></button>
            <?php
            }
            ?>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1500">

                <img src="http://localhost/VaporStore_web/img/banners/banner_welcome.jpg" class="d-block w-100" alt="...">

            </div>

            <?php
            foreach ($dadosApiOriginals as $jogoOriginals) {
            ?>

                <div class="carousel-item" data-bs-interval="4000">

                    <a href="gamesPage/<?= $jogoOriginals->id ?>"><img src="<?= $jogoOriginals->banner02 ?>" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?= $jogoOriginals->title ?></h5>
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




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vapor Store</title>
    <link rel="shortcut icon" href="img/logoTipo02_low.png" type="image/x-icon">
    <base href="http://localhost/VaporStore_web/">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<?php

$api = file_get_contents("http://localhost/VaporStore_web/api/games.php");
$dadosApi = json_decode($api);

?>

<?php
foreach ($dadosApi as $jogo) {
    
}
?>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home"><img class="navbar-brand-Logo" src="img/logoTipo02_low.png" alt="Vapor Store"></a>
                <a href="home" class="siteTitle">Vapor Store</a>
                <div class="divisorIcon divisorIcon-Nav">
                    <span>|</span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link navText" aria-current="page" href="home">Loja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navText" href="biblioteca">Biblioteca</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active navTextActive dropdown-toggle" id="buttonActive" onclick="toggleNav()" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="action">Ação</a></li>
                                <li><a class="dropdown-item" href="plataform">Plataforma</a></li>
                                <li><a class="dropdown-item" href="RPG">RPG</a></li>
                                <li><a class="dropdown-item" href="simulator">Simulação</a></li>
                                <li><a class="dropdown-item" href="survival">Sobrevivencia</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="allGames">Todos</a></li>
                            </ul>

                        </li>
                    </ul>

                    <a href="login" class="btn btn-light">Login</a>









                    <!-- <div class="dropdown">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            Login
                        </button>
                        <div class="dropdown-menu">
                            <form class="px-4 py-3">
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@exemplo.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormPassword1" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Digite sua senha">
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Lembrar-me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-light">Login</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">É novo por aqui? Cadastre-se</a>
                            <a class="dropdown-item" href="#">Esqueceu sua senha?</a>
                        </div>
                    </div> -->
                
                
                
                </div>
            </div>
        </nav>















    </header>


    <main>
        <!-- Comeco PHP BASE -->
        <?php
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "games") {
            $pagina = "games/{$jogo}.php";
        } else {
            $pagina = "pages/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }
        ?>
        <!-- Final PHP BASE -->



















    </main>





    <footer>
        <div class="footerBox">
        <div class="footerBase">
            <a href="home"><img class="logoFooter" src="img/logoTipo02_low.png" alt="Vapor Store"></a>
            <p>© 2024 SrVertex Corporation. Todos os direitos reservados. Todas as marcas comerciais são propriedade dos respetivos proprietários nos E.U.A. e outros países.
                IVA incluído em todos os preços onde aplicável.</p>
        </div>
        <div class="footerDown">
            <div class="groupFooter">
                <a href="#">Parceiros</a>
            </div>
            <div class="groupFooter">
                <span>|</span>
            </div>
            <div class="groupFooter">
                <a href="#">Contato</a>
            </div>
            <div class="groupFooter">
                <span>|</span>
            </div>
            <div class="groupFooter">
                <i class="bi bi-facebook"></i>
                <a href="#">SrVertex</a>
            </div>
            <div class="groupFooter">
                <span>|</span>
            </div>
            <div class="groupFooter">
                <i class="bi bi-instagram"></i>
                <a href="#">@sr.vertex</a>
            </div>
            <div class="groupFooter">
                <span>|</span>
            </div>
            <div class="groupFooter">
                <i class="bi bi-github"></i>
                <a href="#">SrVertex</a>
            </div>
        </div>
        </div>

    </footer>








    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="fslightbox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    














    <?php

    if (isset($_GET["param"])) {
        $param = $_GET["param"];  
        // serapar o parametro por /
        $p = explode("/", $param);
        //print_r($p);
    }

    $page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;

    if ($page == "jogo") {
        $pagina = "jogo/{$jogo}.php";

    } else {
        $pagina = "paginas/{$page}.php";
    }   

    if (file_exists($pagina)) {
        include $pagina;
    } else {
        include "paginas/erro.php";
    }

    ?>



</body>
</html>
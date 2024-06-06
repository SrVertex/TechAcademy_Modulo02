<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $original[1] = array(
        "id" => 1,
        "title" => "Rocket On The Rocks",
        "description" => "Ghost of Tsushima é um jogo de ação e aventura da Sucker Punch Productions, ambientado no Japão feudal durante a invasão mongol.",
        "banner01" => "http://localhost/VaporStore_web/img/banner_GhostOfTsushima.png",

        "screenShot01" => "http://localhost/VaporStore_web/img/banner_Cyberpunk.png",
        "screenShot02" => "http://localhost/VaporStore_web/img/banner_ResidentEvil.png",
        "screenShot03" => "http://localhost/VaporStore_web/img/banner_GhostOfTsushima.png",
        "screenShot04" => "http://localhost/VaporStore_web/img/banner_ResidentEvil.png",
        "video01" => "BASE",
        "category" => "Ação",
        "categoryLink" => "action",

        "CPU_Min" => "i5 1156 ou Phenom II",
        "GPU_Min" => "Intel HD Graffics ou GT210",
        "storage_Min" => "200mb",
        "memory_Min" => "2gb RAM",
        "SO_Min" => "Win 7",

        "CPU_Recomendate" => "BASE",
        "GPU_Recomendate" => "BASE",
        "storage_Recomendate" => "BASE",
        "memory_Recomendate" => "BASE",
        "SO_Recomendate" => "BASE",

        "price" => "R$21,99",
        "plataform" => "PC",
        "analisesBoa" => "Muito Positivas", 
        "analisesNeutra" => "",  
        "analisesRuim" => "",  

        "rating" => "4.8 / 5 (63)",
        "realeaseDate" => "21/03/2024",
        "distributor" => "SrVertex",
        "distributorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
        "creator" => "Teste",
        "creatorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
        "descriptionCreator" => "Desde 2019, conquistamos diversos Fãs pelo mundo, que apreciam nossos trabalhos e aclamam todos nossos Modelos, 3ds, e trabalhos de conteudo adicional Para Farming Simulator."

    
    );

    $original[2] = array(
        "id" => 2,
        "title" => "Rocket On The Rocks",
        "description" => "Ghost of Tsushima é um jogo de ação e aventura da Sucker Punch Productions, ambientado no Japão feudal durante a invasão mongol.",
        "banner01" => "http://localhost/VaporStore_web/img/banner_ResidentEvil.png",
        "screenShot01" => "img/gta-v.jpg",
        "screenShot02" => "BASE",
        "screenShot03" => "BASE",
        "screenShot04" => "BASE",
        "video01" => "BASE",
        "category" => "Ação",

        "CPU_Min" => "i5 1156 ou Phenom II",
        "GPU_Min" => "Intel HD Graffics ou GT210",
        "storage_Min" => "200mb",
        "memory_Min" => "2gb RAM",
        "SO_Min" => "Win 7",

        "CPU_Recomendate" => "BASE",
        "GPU_Recomendate" => "BASE",
        "storage_Recomendate" => "BASE",
        "memory_Recomendate" => "BASE",
        "SO_Recomendate" => "BASE",

        "price" => "R$21,99",
        "plataform" => "PC",

        "analisesBoa" => "Muito Positivas", 
        "analisesNeutra" => "Neutras",  
        "analisesRuim" => "Muito Negativas",  

        "rating" => "4.8 / 5 (63)",
        "realeaseDate" => "21/03/2024",
        "creator" => "SrVertex",
        "creatorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
        "descriptionCreator" => "Desde 2019, conquistamos diversos Fãs pelo mundo, que apreciam nossos trabalhos e aclamam todos nossos Modelos, 3ds, e trabalhos de conteudo adicional Para Farming Simulator."
    );

    $original[3] = array(
        "id" => 3,
        "title" => "Rocket On The Rocks",
        "description" => "Ghost of Tsushima é um jogo de ação e aventura da Sucker Punch Productions, ambientado no Japão feudal durante a invasão mongol.",
        "banner01" => "http://localhost/VaporStore_web/img/banner_Cyberpunk.png",
        "screenShot01" => "img/gta-v.jpg",
        "screenShot02" => "BASE",
        "screenShot03" => "BASE",
        "screenShot04" => "BASE",
        "video01" => "BASE",
        "category" => "Ação",

        "CPU_Min" => "i5 1156 ou Phenom II",
        "GPU_Min" => "Intel HD Graffics ou GT210",
        "storage_Min" => "200mb",
        "memory_Min" => "2gb RAM",
        "SO_Min" => "Win 7",

        "CPU_Recomendate" => "BASE",
        "GPU_Recomendate" => "BASE",
        "storage_Recomendate" => "BASE",
        "memory_Recomendate" => "BASE",
        "SO_Recomendate" => "BASE",

        "price" => "R$21,99",
        "plataform" => "PC",
        "rating" => "4.8 / 5 (63)",
        "realeaseDate" => "21/03/2024",
        "creator" => "SrVertex",
        "creatorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
        "descriptionCreator" => "Desde 2019, conquistamos diversos Fãs pelo mundo, que apreciam nossos trabalhos e aclamam todos nossos Modelos, 3ds, e trabalhos de conteudo adicional Para Farming Simulator.",
    );


















    echo json_encode($original);



?>


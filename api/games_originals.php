<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$path = "http://localhost/VaporStore_web/";

$original[1] = array(
    "id" => 1,
    "apiKey1" => "01010011 01110010 01010110 01100101 01110010 01110100 01100101 01111000",
    "apiKey2" => "srventerrtenterx lenterobernairdober",
    "title" => "Rocket On The Rocks",
    "description" => "Apertem os cintos e se prepare para um universo cheio de historias e aventuras, explorando novos mundos...",
    "descriptionMid" => "Apertem os cintos e se prepare para um universo cheio de historias e aventuras, explorando novos mundos, personagens e possibilidades. Momentos epicos e adrenalina podem lhe esperar a cada fase, a cada inimigo derrotado.",
    "descriptionFull" => "Apertem os cintos e se prepare para um universo cheio de historias e aventuras, explorando novos mundos, personagens e possibilidades. Momentos epicos e adrenalina podem lhe esperar a cada fase, a cada inimigo derrotado. O jogador é recem contratado para fazer parte da companhia espacial. A companhia esta sempre a busca de jovens aventureiros que estao a busca de novos desafios e jornadas agitadas. Em sua primeira aventura, voce é levado a investigar uma area sombria no meio de um cinturão de asteroides. Segundo os relatos, muitas naves foram enviadas, mas nao tiveram retornos, e cabe a voce investigar. Apos coletar algumas estrelas, o jogador consegue avancar alem das rochas. Em seu radio a ultima captura registrada é...",

    "logoGame01" => "{$path}img/banners/rocketOnTheRocks/logoGame01.jpg",
    "banner01" => "{$path}img/banners/rocketOnTheRocks/banner01.jpg",
    "banner02" => "{$path}img/banners/rocketOnTheRocks/banner02.jpg",
    "screenShot01" => "{$path}img/banners/rocketOnTheRocks/screenshot01.jpg",
    "screenShot02" => "{$path}img/banners/rocketOnTheRocks/screenshot02.jpg",
    "screenShot03" => "{$path}img/banners/rocketOnTheRocks/screenshot03.jpg",
    "screenShot04" => "{$path}img/banners/rocketOnTheRocks/screenshot04.jpg",
    "video01" => "",
    "category" => "Plataforma",
    "categoryLink" => "plataform",
    "modoJogo" => "Um jogador",
    "multiplayer" => "Sem suporte a on-line",
    "controls" => "Teclado",

    "CPU_Min" => "2 Ghz",
    "GPU_Min" => "256 mb video memory, shader model 3.0+",
    "storage_Min" => "500 MB",
    "memory_Min" => "2 RAM",
    "SO_Min" => "Windows 10 64-bit",
    "OBS_Min" => "",

    "CPU_Recomendate" => "2 Ghz",
    "GPU_Recomendate" => "512 mb video memory, shader model 3.0+",
    "storage_Recomendate" => "1 GB",
    "memory_Recomendate" => "4gb RAM",
    "SO_Recomendate" => "Windows 10 64-bit",
    "OBS_Recomendate" => "",

    "price" => "GRATUITO",
    "promo" => "",
    "promoLabel" => "",
    "plataform" => "PC, WEB",
    "analisesBoa" => "",
    "analisesNeutra" => "",
    "analisesRuim" => "Extremamente Negativas",
    "privacity" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "userAccept" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "pegiInfo" => "+10",

    "analise1_img" => "{$path}img/analise01.jpg",
    "analise1_userName" => "Joao",
    "analise1_recomendacao" => "",
    "analise1_naoRecomendacao" => "Nao recomendado",
    "analise1_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
    "analise1_recomendacaoBoa" => "",
    "analise1_data" => "3 DE JUNHO",
    "analise1_descricao" => "É muito dificil de desviar das pedras",

    "analise2_img" => "{$path}img/analise02.jpg",
    "analise2_userName" => "Lucas",
    "analise2_recomendacao" => "Recomendado",
    "analise2_naoRecomendacao" => "",
    "analise2_recomendacaoRuim" => "",
    "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise2_data" => "4 DE JUNHO",
    "analise2_descricao" => "Uma otima mecanica e muito desafiador",

    "analise3_img" => "{$path}img/analise03.jpg",
    "analise3_userName" => "Patrick",
    "analise3_recomendacao" => "Recomendado",
    "analise3_naoRecomendacao" => "",
    "analise3_recomendacaoRuim" => "",
    "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise3_data" => "5 DE JUNHO",
    "analise3_descricao" => "Muito bom, uma pena a fase do BOSS ser muito facil",

    "analise4_img" => "{$path}img/analise04.jpg",
    "analise4_userName" => "Caio",
    "analise4_recomendacao" => "",
    "analise4_naoRecomendacao" => "Nao recomendado",
    "analise4_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
    "analise4_recomendacaoBoa" => "",
    "analise4_data" => "6 DE JUNHO",
    "analise4_descricao" => "PRATICAMENTE UM SOLKS LIKE DO ESPACO, HORRIVEL",

    "gameLink" => "https://srvertex.github.io/TechAcadenySite/html/game01/index.html",
    "realeaseDate" => "06/mai./2024",
    "distributor" => "SrVertex",
    "distributorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "creator" => "SrVertex GameStudios",
    "creatorName" => "Leonardo Nunes Decaris",
    "creatorDate" => "22/12/2002",
    "creatorFormation" => "Designer 3d e Analista de Sistemas",
    "creatorImg" => "{$path}img/banners/rocketOnTheRocks/creatorLogo.jpg",
    "creatorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/"
);
$original[2] = array(
    "id" => 2,
    "apiKey1" => "01010011 01110010 01010110 01100101 01110010 01110100 01100101 01111000",
    "apiKey2" => "srventerrtenterx lenterobernairdober",
    "title" => "Cowboy in a DreamLand",
    "description" => "Em um dia nosso herói acorda em uma área devastada pelos mortos vivos. Apenas com breves lembranças...",

    "descriptionMid" => "Em um dia nosso herói acorda em uma área devastada pelos mortos vivos. Apenas com breves lembranças de seu passado ele define seu destino: Salvar a garota que aparece em seus sonhos.",
    "descriptionFull" => "Em um dia nosso herói acorda em uma área devastada pelos mortos vivos.
Apenas com breves lembranças de seu passado ele define seu destino:
Salvar a garota que aparece em seus sonhos. Jesterino conseguirá? Ajude nosso herói em sua jornada.
Nosso herói não sabe se tudo isso é real",

    "logoGame01" => "{$path}img/banners/cowBoy_dream/logoGame01.jpg",
    "banner01" => "{$path}img/banners/cowBoy_dream/banner01.jpg",
    "banner02" => "{$path}img/banners/cowBoy_dream/banner02.jpg",
    "screenShot01" => "{$path}img/banners/cowBoy_dream/screenshot01.jpg",
    "screenShot02" => "{$path}img/banners/cowBoy_dream/screenshot02.jpg",
    "screenShot03" => "{$path}img/banners/cowBoy_dream/screenshot03.jpg",
    "screenShot04" => "{$path}img/banners/cowBoy_dream/screenshot04.jpg",
    "video01" => "",
    "category" => "Plataforma",
    "categoryLink" => "plataform",
    "modoJogo" => "Um jogador",
    "multiplayer" => "Sem suporte a on-line",
    "controls" => "Teclado",

    "CPU_Min" => "2 Ghz",
    "GPU_Min" => "256 mb video memory, shader model 3.0+",
    "storage_Min" => "500 MB",
    "memory_Min" => "2 RAM",
    "SO_Min" => "Windows 10 64-bit",
    "OBS_Min" => "",

    "CPU_Recomendate" => "2 Ghz",
    "GPU_Recomendate" => "512 mb video memory, shader model 3.0+",
    "storage_Recomendate" => "1 GB",
    "memory_Recomendate" => "4gb RAM",
    "SO_Recomendate" => "Windows 10 64-bit",
    "OBS_Recomendate" => "",

    "price" => "GRATUITO",
    "promo" => "",
    "promoLabel" => "",
    "plataform" => "PC, WEB",
    "analisesBoa" => "Extremamente Positivas",
    "analisesNeutra" => "",
    "analisesRuim" => "",
    "privacity" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "userAccept" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "pegiInfo" => "LIVRE",

    "analise1_img" => "{$path}img/analise01.jpg",
    "analise1_userName" => "Joao",
    "analise1_recomendacao" => "Recomendado",
    "analise1_naoRecomendacao" => "",
    "analise1_recomendacaoRuim" => "",
    "analise1_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise1_data" => "3 DE JUNHO",
    "analise1_descricao" => "Lembra muito aqueles jogos antigos da epoca o SNES, muito bom.",

    "analise2_img" => "{$path}img/analise02.jpg",
    "analise2_userName" => "Lucas",
    "analise2_recomendacao" => "Recomendado",
    "analise2_naoRecomendacao" => "",
    "analise2_recomendacaoRuim" => "",
    "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise2_data" => "4 DE JUNHO",
    "analise2_descricao" => "Achei meio travada a movimentacao, mas é um otimo jogo",

    "analise3_img" => "{$path}img/analise03.jpg",
    "analise3_userName" => "Patrick",
    "analise3_recomendacao" => "Recomendado",
    "analise3_naoRecomendacao" => "",
    "analise3_recomendacaoRuim" => "",
    "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise3_data" => "5 DE JUNHO",
    "analise3_descricao" => "Muito desafiador quando chega o tanto de hordas de bicho kkk",

    "analise4_img" => "{$path}img/analise04.jpg",
    "analise4_userName" => "Caio",
    "analise4_recomendacao" => "",
    "analise4_naoRecomendacao" => "Nao recomendado",
    "analise4_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
    "analise4_recomendacaoBoa" => "",
    "analise4_data" => "6 DE JUNHO",
    "analise4_descricao" => "Achei meio dificil de jogar quando junta varios monstros, mas de resto o jogo é legal.",

    "gameLink" => "{$path}games/game04_cowBoy_dreamland/index.html",
    "realeaseDate" => "04/jun./2024",
    "distributor" => "SrVertex",
    "distributorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "creator" => "Emanuel Paiva",
    "creatorName" => "Emanuel Ramos Paiva",
    "creatorDate" => "08/12/2005",
    "creatorFormation" => "Estudante do Centro Universitario Integrado",
    "creatorImg" => "{$path}img/banners/cowBoy_dream/creatorLogo.jpg",
    "creatorSite" => "http://cowboyinadreamland.x10.mx/index.html"
);
$original[3] = array(
    "id" => 3,
    "apiKey1" => "01010011 01110010 01010110 01100101 01110010 01110100 01100101 01111000",
    "apiKey2" => "srventerrtenterx lenterobernairdober",
    "title" => "Tommy Adventure",
    "description" => "O jogo de plataforma Tommy's Adventure é inspirado em jogos estilo Endless Runner que são ...",

    "descriptionMid" => "O jogo de plataforma Tommy's Adventure é inspirado em jogos estilo Endless Runner que são jogos de corrida intermináveis, como exemplo o Dino T-Rex, o famoso dinossauro do Google que aparece quando a internet cai.",
    "descriptionFull" => "O jogo de plataforma Tommy's Adventure é inspirado em jogos estilo Endless Runner que são jogos de corrida intermináveis, como exemplo o Dino T-Rex, o famoso dinossauro do Google que aparece quando a internet cai.
No Tommy's Adventure, o jogador iniciará a partida já em movimento e deverá seguir a diante tomando cuidado com os obstáculos e trajetos incompletos que implicarão direto no resultado do jogo.",

    "logoGame01" => "{$path}img/banners/tommyAdventure/logoGame01.jpg",
    "banner01" => "{$path}img/banners/tommyAdventure/banner01.jpg",
    "banner02" => "{$path}img/banners/tommyAdventure/banner02.jpg",
    "screenShot01" => "{$path}img/banners/tommyAdventure/screenshot01.jpg",
    "screenShot02" => "{$path}img/banners/tommyAdventure/screenshot02.jpg",
    "screenShot03" => "{$path}img/banners/tommyAdventure/screenshot03.jpg",
    "screenShot04" => "{$path}img/banners/tommyAdventure/screenshot04.jpg",
    "video01" => "",
    "category" => "Plataforma",
    "categoryLink" => "plataform",
    "modoJogo" => "Um jogador",
    "multiplayer" => "Sem suporte a on-line",
    "controls" => "Mouse",

    "CPU_Min" => "2 Ghz",
    "GPU_Min" => "256 mb video memory, shader model 3.0+",
    "storage_Min" => "500 MB",
    "memory_Min" => "2 RAM",
    "SO_Min" => "Windows 10 64-bit",
    "OBS_Min" => "",

    "CPU_Recomendate" => "2 Ghz",
    "GPU_Recomendate" => "512 mb video memory, shader model 3.0+",
    "storage_Recomendate" => "1 GB",
    "memory_Recomendate" => "4gb RAM",
    "SO_Recomendate" => "Windows 10 64-bit",
    "OBS_Recomendate" => "",

    "price" => "GRATUITO",
    "promo" => "",
    "promoLabel" => "",
    "plataform" => "PC, WEB",
    "analisesBoa" => "",
    "analisesNeutra" => "Neutras",
    "analisesRuim" => "",
    "privacity" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "userAccept" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "pegiInfo" => "LIVRE",

    "analise1_img" => "{$path}img/analise01.jpg",
    "analise1_userName" => "Joao",
    "analise1_recomendacao" => "",
    "analise1_naoRecomendacao" => "Nao recomendado",
    "analise1_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
    "analise1_recomendacaoBoa" => "",
    "analise1_data" => "3 DE JUNHO",
    "analise1_descricao" => "AS vezes é dificil de ver a plataforma, mas me diverti",

    "analise2_img" => "{$path}img/analise02.jpg",
    "analise2_userName" => "Lucas",
    "analise2_recomendacao" => "Recomendado",
    "analise2_naoRecomendacao" => "",
    "analise2_recomendacaoRuim" => "",
    "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise2_data" => "4 DE JUNHO",
    "analise2_descricao" => "Mt divertido, recomendo",

    "analise3_img" => "{$path}img/analise03.jpg",
    "analise3_userName" => "Patrick",
    "analise3_recomendacao" => "Recomendado",
    "analise3_naoRecomendacao" => "",
    "analise3_recomendacaoRuim" => "",
    "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise3_data" => "5 DE JUNHO",
    "analise3_descricao" => "Muito massa o jogo, recomendo",

    "analise4_img" => "{$path}img/analise04.jpg",
    "analise4_userName" => "Caio",
    "analise4_recomendacao" => "Recomendado",
    "analise4_naoRecomendacao" => "",
    "analise4_recomendacaoRuim" => "",
    "analise4_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise4_data" => "6 DE JUNHO",
    "analise4_descricao" => "Adoro jogos Endless Runner",

    "gameLink" => "{$path}games/game02_TommyAdventure/index.html",
    "realeaseDate" => "23/mai./2024",
    "distributor" => "SrVertex",
    "distributorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "creator" => "Tainá Trindade",
    "creatorName" => "Tainá Trindade",
    "creatorDate" => "27/12/2002",
    "creatorFormation" => "Estudante do Centro Universitario Integrado",
    "creatorImg" => "{$path}img/banners/tommyAdventure/creatorLogo.jpg",
    "creatorSite" => "FALTA"
);
$original[4] = array(
    "id" => 4,
    "apiKey1" => "01010011 01110010 01010110 01100101 01110010 01110100 01100101 01111000",
    "apiKey2" => "srventerrtenterx lenterobernairdober",
    "title" => "Curse Game",
    "description" => "Entre no mundo perigoso e cheio de ação de Rua do Samurai, um jogo de combate intenso...",

    "descriptionMid" => "Entre no mundo perigoso e cheio de ação de Rua do Samurai, um jogo de combate intenso onde você assume o papel de um samurai solitário, determinado a livrar sua cidade da ameaça de bandidos implacáveis",
    "descriptionFull" => "Entre no mundo perigoso e cheio de ação de Rua do Samurai, um jogo de combate intenso onde você assume o papel de um samurai solitário, determinado a livrar sua cidade da ameaça de bandidos implacáveis. Com sua espada afiada e habilidades de luta excepcionais, você enfrentará ondas de inimigos em batalhas de rua eletrizantes. Defenda os inocentes, restabeleça a ordem e prove seu valor como o verdadeiro guardião da justiça neste jogo de ação imersivo e dinâmico. Prepare-se para duelos épicos e combates corpo a corpo que testarão sua habilidade e honra de samurai.",

    "logoGame01" => "{$path}img/banners/curseGame/logoGame01.jpg",
    "banner01" => "{$path}img/banners/curseGame/banner01.jpg",
    "banner02" => "{$path}img/banners/curseGame/banner02.jpg",
    "screenShot01" => "{$path}img/banners/curseGame/screenshot01.jpg",
    "screenShot02" => "{$path}img/banners/curseGame/screenshot02.jpg",
    "screenShot03" => "{$path}img/banners/curseGame/screenshot03.jpg",
    "screenShot04" => "{$path}img/banners/curseGame/screenshot04.jpg",
    "video01" => "",
    "category" => "Plataforma",
    "categoryLink" => "plataform",
    "modoJogo" => "Um jogador",
    "multiplayer" => "Sem suporte a on-line",
    "controls" => "Teclado",

    "CPU_Min" => "2 Ghz",
    "GPU_Min" => "256 mb video memory, shader model 3.0+",
    "storage_Min" => "500 MB",
    "memory_Min" => "2 RAM",
    "SO_Min" => "Windows 10 64-bit",
    "OBS_Min" => "",

    "CPU_Recomendate" => "2 Ghz",
    "GPU_Recomendate" => "512 mb video memory, shader model 3.0+",
    "storage_Recomendate" => "1 GB",
    "memory_Recomendate" => "4gb RAM",
    "SO_Recomendate" => "Windows 10 64-bit",
    "OBS_Recomendate" => "",

    "price" => "GRATUITO",
    "promo" => "",
    "promoLabel" => "",
    "plataform" => "PC, WEB",
    "analisesBoa" => "Muito Positivas",
    "analisesNeutra" => "",
    "analisesRuim" => "",
    "privacity" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "userAccept" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "pegiInfo" => "LIVRE",

    "analise1_img" => "{$path}img/analise01.jpg",
    "analise1_userName" => "Joao",
    "analise1_recomendacao" => "",
    "analise1_naoRecomendacao" => "Nao recomendado",
    "analise1_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
    "analise1_recomendacaoBoa" => "",
    "analise1_data" => "3 DE JUNHO",
    "analise1_descricao" => "Tive muitas dificuldades de jogar",

    "analise2_img" => "{$path}img/analise02.jpg",
    "analise2_userName" => "Lucas",
    "analise2_recomendacao" => "Recomendado",
    "analise2_naoRecomendacao" => "",
    "analise2_recomendacaoRuim" => "",
    "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise2_data" => "4 DE JUNHO",
    "analise2_descricao" => "Muito dificil e divertido",

    "analise3_img" => "{$path}img/analise03.jpg",
    "analise3_userName" => "Patrick",
    "analise3_recomendacao" => "Recomendado",
    "analise3_naoRecomendacao" => "",
    "analise3_recomendacaoRuim" => "",
    "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise3_data" => "5 DE JUNHO",
    "analise3_descricao" => "Gostei muito da animacao dos personagens",

    "analise4_img" => "{$path}img/analise04.jpg",
    "analise4_userName" => "Caio",
    "analise4_recomendacao" => "Recomendado",
    "analise4_naoRecomendacao" => "",
    "analise4_recomendacaoRuim" => "",
    "analise4_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise4_data" => "6 DE JUNHO",
    "analise4_descricao" => "Muito massa, lembra o jogo das tartarugas ninja de Nintendo",

    "gameLink" => "{$path}games/game03_cursed/index.html",
    "realeaseDate" => "20/mai./2024",
    "distributor" => "SrVertex",
    "distributorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "creator" => "Guilherme Mendes",
    "creatorName" => "Guilherme Mendes dos Santos",
    "creatorDate" => "09/03/2006",
    "creatorFormation" => "Estudante do Centro Universitario Integrado",
    "creatorImg" => "{$path}img/banners/curseGame/creatorLogo.jpg",
    "creatorSite" => "FALTA"
);
$original[5] = array(
    "id" => 5,
    "apiKey1" => "01010011 01110010 01010110 01100101 01110010 01110100 01100101 01111000",
    "apiKey2" => "srventerrtenterx lenterobernairdober",
    "title" => "BUg From Hell 2.0",
    "description" => "Entre no mundo perigoso e cheio de ação de Rua do Samurai, um jogo de combate intenso...",

    "descriptionMid" => "Entre no mundo perigoso e cheio de ação de Rua do Samurai, um jogo de combate intenso onde você assume o papel de um samurai solitário, determinado a livrar sua cidade da ameaça de bandidos implacáveis",
    "descriptionFull" => "Entre no mundo perigoso e cheio de ação de Rua do Samurai, um jogo de combate intenso onde você assume o papel de um samurai solitário, determinado a livrar sua cidade da ameaça de bandidos implacáveis. Com sua espada afiada e habilidades de luta excepcionais, você enfrentará ondas de inimigos em batalhas de rua eletrizantes. Defenda os inocentes, restabeleça a ordem e prove seu valor como o verdadeiro guardião da justiça neste jogo de ação imersivo e dinâmico. Prepare-se para duelos épicos e combates corpo a corpo que testarão sua habilidade e honra de samurai.",

    "logoGame01" => "{$path}img/banners/bugFromHell2/logoGame01.jpg",
    "banner01" => "{$path}img/banners/bugFromHell2/banner01.jpg",
    "banner02" => "{$path}img/banners/bugFromHell2/banner02.jpg",
    "screenShot01" => "{$path}img/banners/bugFromHell2/screenshot01.jpg",
    "screenShot02" => "{$path}img/banners/bugFromHell2/screenshot02.jpg",
    "screenShot03" => "{$path}img/banners/bugFromHell2/screenshot03.jpg",
    "screenShot04" => "{$path}img/banners/bugFromHell2/screenshot04.jpg",
    "video01" => "",
    "category" => "Plataforma",
    "categoryLink" => "plataform",
    "modoJogo" => "Um jogador",
    "multiplayer" => "Sem suporte a on-line",
    "controls" => "Teclado",

    "CPU_Min" => "2 Ghz",
    "GPU_Min" => "256 mb video memory, shader model 3.0+",
    "storage_Min" => "500 MB",
    "memory_Min" => "2 RAM",
    "SO_Min" => "Windows 10 64-bit",
    "OBS_Min" => "",

    "CPU_Recomendate" => "2 Ghz",
    "GPU_Recomendate" => "512 mb video memory, shader model 3.0+",
    "storage_Recomendate" => "1 GB",
    "memory_Recomendate" => "4gb RAM",
    "SO_Recomendate" => "Windows 10 64-bit",
    "OBS_Recomendate" => "",

    "price" => "GRATUITO",
    "promo" => "",
    "promoLabel" => "",
    "plataform" => "PC, WEB",
    "analisesBoa" => "Muito Positivas",
    "analisesNeutra" => "",
    "analisesRuim" => "",
    "privacity" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "userAccept" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "pegiInfo" => "LIVRE",

    "analise1_img" => "{$path}img/analise01.jpg",
    "analise1_userName" => "Joao",
    "analise1_recomendacao" => "",
    "analise1_naoRecomendacao" => "Nao recomendado",
    "analise1_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
    "analise1_recomendacaoBoa" => "",
    "analise1_data" => "3 DE JUNHO",
    "analise1_descricao" => "Tive muitas dificuldades de jogar",

    "analise2_img" => "{$path}img/analise02.jpg",
    "analise2_userName" => "Lucas",
    "analise2_recomendacao" => "Recomendado",
    "analise2_naoRecomendacao" => "",
    "analise2_recomendacaoRuim" => "",
    "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise2_data" => "4 DE JUNHO",
    "analise2_descricao" => "Muito dificil e divertido",

    "analise3_img" => "{$path}img/analise03.jpg",
    "analise3_userName" => "Patrick",
    "analise3_recomendacao" => "Recomendado",
    "analise3_naoRecomendacao" => "",
    "analise3_recomendacaoRuim" => "",
    "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise3_data" => "5 DE JUNHO",
    "analise3_descricao" => "Gostei muito da animacao dos personagens",

    "analise4_img" => "{$path}img/analise04.jpg",
    "analise4_userName" => "Caio",
    "analise4_recomendacao" => "Recomendado",
    "analise4_naoRecomendacao" => "",
    "analise4_recomendacaoRuim" => "",
    "analise4_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
    "analise4_data" => "6 DE JUNHO",
    "analise4_descricao" => "Muito massa, lembra o jogo das tartarugas ninja de Nintendo",

    "gameLink" => "{$path}games/game05_bug/index.html",
    "realeaseDate" => "20/mai./2024",
    "distributor" => "SrVertex",
    "distributorSite" => "https://srvertex.github.io/Site_SrVertex_BETA/",
    "creator" => "Pedro Henrique Laera",
    "creatorName" => "Pedro Henrique Laera Ferreira de Castro",
    "creatorDate" => "08/10/2004",
    "creatorFormation" => "Estudante do Centro Universitario Integrado",
    "creatorImg" => "{$path}img/banners/bugFromHell2/creatorLogo.jpg",
    "creatorSite" => "FALTA"
);

echo json_encode($original);
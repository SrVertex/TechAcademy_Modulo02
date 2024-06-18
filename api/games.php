<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $path = "http://localhost/VaporStore_web/";

    $game[1] = array(
        "id" => 1,
        "title" => "Red Dead Redemption 2",
        "description" => "Red Dead Redemption 2, a épica aventura de mundo aberto da Rockstar Games aclamada pela crítica e o jogo mais bem avaliado...",
        
        "descriptionMid" => "Red Dead Redemption 2, a épica aventura de mundo aberto da Rockstar Games aclamada pela crítica e o jogo mais bem avaliado desta geração de consoles, agora chega aprimorado para PC com conteúdos inéditos no Modo História, melhorias visuais e muito mais.",
        "descriptionFull" => "Estados Unidos, 1899.
Arthur Morgan e a gangue Van der Linde são bandidos em fuga. Com agentes federais e os melhores caçadores de recompensas no seu encalço, a gangue precisa roubar, assaltar e lutar para sobreviver no impiedoso coração dos Estados Unidos. Conforme divisões internas profundas ameaçam despedaçar a gangue, Arthur deve fazer uma escolha entre os seus próprios ideais e a lealdade à gangue que o criou.
Agora com conteúdo adicional no Modo História e um Modo Foto repleto de recursos, Red Dead Redemption 2 também inclui acesso gratuito ao mundo compartilhado de Red Dead Online. Nele, os jogadores assumem uma diversidade de ofícios para construir suas próprias trajetórias na fronteira, seja perseguindo criminosos procurados como Caçador de Recompensa, estabelecendo um negócio como Mercador, escavando tesouros exóticos como Colecionador ou operando uma destilaria subterrânea como Moonshiner, e muito mais.
Com novas melhorias gráficas e técnicas que tornam o jogo mais imersivo, Red Dead Redemption 2 para PC aproveita ao máximo a potência do PC para dar vida a cada canto deste mundo gigantesco, rico e detalhado, incluindo maiores distâncias de renderização; iluminação global de maior qualidade e oclusão do ambiente para melhorar a iluminação do dia e da noite; melhorias nos reflexos e sombras mais fortes e de maior resolução a todas as distâncias; texturas de árvore tesseladas e melhorias nas texturas de grama e pelo, tornando todas as plantas e animais mais realistas.
Red Dead Redemption 2 para PC também oferece suporte a HDR e a monitores de ponta com resolução 4K ou superior, configurações com vários monitores, widescreen, taxas de quadros mais rápidas, entre outras opções.",

        "logoGame01" => "http://localhost/VaporStore_web/img/banners/rd2/logoGame01.jpg",
        "banner01" => "{$path}img/banners/rd2/banner01.jpg",
        "banner02" => "{$path}img/banners/rd2/banner02.jpg",
        "screenShot01" => "{$path}img/banners/rd2/screenshot01.jpg",
        "screenShot02" => "http://localhost/VaporStore_web/img/banners/rd2/screenshot02.jpg",
        "screenShot03" => "http://localhost/VaporStore_web/img/banners/rd2/screenshot03.jpg",
        "screenShot04" => "http://localhost/VaporStore_web/img/banners/rd2/screenshot04.jpg",
        "video01" => "",
        "category" => "Ação",
        "categoryLink" => "action",
        "modoJogo" => "Um jogador",
        "multiplayer" => "Cooperativo on-line",
        "controls" => "Teclado, Controles",
    
        "CPU_Min" => "Intel® Core™ i7-4770K / AMD Ryzen 5 1500X",
        "GPU_Min" => "Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB",
        "storage_Min" => "150 GB",
        "memory_Min" => "12gb RAM",
        "SO_Min" => "Windows 10 64-bit",
        "OBS_Min" => "SSD Recomendado",
    
        "CPU_Recomendate" => "Intel® Core™ i7-4770K / AMD Ryzen 5 1500X",
        "GPU_Recomendate" => "Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB",
        "storage_Recomendate" => "150 GB",
        "memory_Recomendate" => "16gb RAM",
        "SO_Recomendate" => "Windows 10 64-bit",
        "OBS_Recomendate" => "SSD Requisitado",
    
        "price" => "R$ 299,90",
        "promo" => "",
        "promoLabel" => "",
        "plataform" => "PC, Xbox Series, PS5",
        "analisesBoa" => "Muito Positivas",
        "analisesNeutra" => "",
        "analisesRuim" => "",
        "privacity" => "https://www.rockstargames.com/br/privacy",
        "userAccept" => "https://www.rockstargames.com/br/legal",
        "pegiInfo" => "18+",
    
        "analise1_img" => "http://localhost/VaporStore_web/img/analise01.jpg",
        "analise1_userName" => "Joao",
        "analise1_recomendacao" => "",
        "analise1_naoRecomendacao" => "Nao recomendado",
        "analise1_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
        "analise1_recomendacaoBoa" => "",
        "analise1_data" => "3 DE JUNHO",
        "analise1_descricao" => "ANALISE01",
    
        "analise2_img" => "http://localhost/VaporStore_web/img/analise02.jpg",
        "analise2_userName" => "Lucas",
        "analise2_recomendacao" => "Recomendado",
        "analise2_naoRecomendacao" => "",
        "analise2_recomendacaoRuim" => "",
        "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise2_data" => "4 DE JUNHO",
        "analise2_descricao" => "ANALISE02",
    
        "analise3_img" => "http://localhost/VaporStore_web/img/analise03.jpg",
        "analise3_userName" => "Patrick",
        "analise3_recomendacao" => "Recomendado",
        "analise3_naoRecomendacao" => "",
        "analise3_recomendacaoRuim" => "",
        "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise3_data" => "5 DE JUNHO",
        "analise3_descricao" => "ANALISE03",
    
        "analise4_img" => "http://localhost/VaporStore_web/img/analise04.jpg",
        "analise4_userName" => "Caio",
        "analise4_recomendacao" => "",
        "analise4_naoRecomendacao" => "Nao recomendado",
        "analise4_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
        "analise4_recomendacaoBoa" => "",
        "analise4_data" => "6 DE JUNHO",
        "analise4_descricao" => "ANALISE04",
    
        "gameLink" => "https://store.steampowered.com/app/1174180/Red_Dead_Redemption_2/",
        "realeaseDate" => "5/dez./2019",
        "distributor" => "Rockstar Games",
        "distributorSite" => "https://www.rockstargames.com/br/",
        "creator" => "Rockstar Games",
        "creatorName" => "Rockstar Games",
        "creatorDate" => "01/01/1992",
        "creatorFormation" => "Desenvolvedora de Jogos",
        "creatorImg" => "http://localhost/VaporStore_web/img/banners/rd2/creatorLogo.jpg",
        "creatorSite" => "https://www.rockstargames.com/br/"
        );














    echo json_encode($game);



?>


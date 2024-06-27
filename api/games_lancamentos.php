<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/VaporStore_web/";

    $lancamentos[1] = array(
        "id" => 1,
        "title" => "Ghost of Tsushima",
        "description" => "Ghost of Tsushima é um jogo de ação e aventura da Sucker Punch Productions, ambientado no Japão feudal durante...",
        "descriptionMid" => "Ghost of Tsushima é um jogo de ação e aventura da Sucker Punch Productions, ambientado no Japão feudal durante a invasão mongol. Ghost of Tsushima é um jogo de ação e aventura da Sucker Punch Productions, ambientado no Japão feudal durante a invasão mongol.",
        "descriptionFull" => "Experimente a jornada de Jin Sakai pela primeira vez no PC e desfrute da experiência completa de Ghost of Tsushima na Versão do Diretor. No final do século XIII, o império mongol devastou nações em sua campanha para conquistar o Oriente. A Ilha de Tsushima é tudo que resta entre a ilha principal do Japão e a imensa frota invasora dos mongóis liderada por um general ardiloso e implacável, Khotun Khan. Enquanto a ilha é devastada pela primeira onda de ataques mongóis, surge Jin Sakai, um corajoso guerreiro samurai que é um dos últimos sobreviventes de seu clã. Ele está decidido a fazer o que for preciso, custe o que custar, para proteger seu povo e recuperar seu lar. Para isso, será necessário deixar de lado as tradições que o moldaram como guerreiro e forjar um novo caminho, o do Fantasma, travando uma guerra atípica pela liberdade de Tsushima.",
    
        "logoGame01" => "{$path}img/banners/ghostTsushima/logoGame01.jpg",
        "banner01" => "{$path}img/banners/ghostTsushima/banner01.jpg",
        "banner02" => "{$path}img/banners/ghostTsushima/banner02.jpg",
        "screenShot01" => "{$path}img/banners/ghostTsushima/screenshot01.jpg",
        "screenShot02" => "{$path}img/banners/ghostTsushima/screenshot02.jpg",
        "screenShot03" => "{$path}img/banners/ghostTsushima/screenshot03.jpg",
        "screenShot04" => "{$path}img/banners/ghostTsushima/screenshot04.jpg",
        "video01" => "",
        "category" => "Ação",
        "categoryLink" => "action",
        "modoJogo" => "Um jogador",
        "multiplayer" => "Cooperativo on-line",
        "controls" => "Teclado e Controles",
    
        "CPU_Min" => "Intel Core i3-7100 ou AMD Ryzen 3 1200",
        "GPU_Min" => "NVIDIA GeForce GTX 960 or AMD Radeon RX 5500 XT",
        "storage_Min" => "75 GB",
        "memory_Min" => "8gb RAM",
        "SO_Min" => "Windows 10 64-bit",
        "OBS_Min" => "SSD Recomendado",
    
        "CPU_Recomendate" => "Intel Core i5-8600 or AMD Ryzen 5 3600",
        "GPU_Recomendate" => "NVIDIA GeForce RTX 2060 or AMD Radeon RX 5600 XT",
        "storage_Recomendate" => "75 GB",
        "memory_Recomendate" => "16gb RAM",
        "SO_Recomendate" => "Windows 10 64-bit",
        "OBS_Recomendate" => "SSD Requisitado",
    
        "price" => "R$ 249,90",
        "promo" => "",
        "promoLabel" => "",
        "plataform" => "PC, PS5",
        "analisesBoa" => "Muito Positivas",
        "analisesNeutra" => "",
        "analisesRuim" => "",
        "privacity" => "https://www.playstation.com/legal/privacy-policy/",
        "userAccept" => "https://www.playstation.com/legal/op-eula/",
        "pegiInfo" => "+18",
    
        "analise1_img" => "{$path}img/analise01.jpg",
        "analise1_userName" => "Brf",
        "analise1_recomendacao" => "Recomendado",
        "analise1_naoRecomendacao" => "",
        "analise1_recomendacaoRuim" => "",
        "analise1_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise1_data" => "28 DE MAIO",
        "analise1_descricao" => "Sou suspeito pra falar de jogos com essa temática. Japão feudal onde você assume o controle de um samurai/ninja já é 50% de aprovação pra mim. Adicionando a isso uma história, embora clichê, bem desenvolvida, com personagens até mais simpáticos que o protagonista, e com uma boa diversidade de quests, além de uma pegada bastante pé-no-chão, com mortes, sangue e traição.",
    
        "analise2_img" => "{$path}img/analise02.jpg",
        "analise2_userName" => "Rickz",
        "analise2_recomendacao" => "Recomendado",
        "analise2_naoRecomendacao" => "",
        "analise2_recomendacaoRuim" => "",
        "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise2_data" => "4 DE JUNHO",
        "analise2_descricao" => "Excelente jogo, muitas semelhanças com a série Assassin's Creed, confesso que depois de um tempo se torna cansativo, mas isso não diminui o jogo.",
    
        "analise3_img" => "{$path}img/analise03.jpg",
        "analise3_userName" => "v i r u z",
        "analise3_recomendacao" => "Recomendado",
        "analise3_naoRecomendacao" => "",
        "analise3_recomendacaoRuim" => "",
        "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise3_data" => "27 DE JUNHO",
        "analise3_descricao" => "UM DOS MELHORES JOGOS QUE JÁ JOGUEI EM TODA A MINHA VIDA! Esse jogo entra facilmente no meu top 3 jogos, que jogo maravilhoso, que obra de arte",
    
        "analise4_img" => "{$path}img/analise04.jpg",
        "analise4_userName" => "tutakamon71",
        "analise4_recomendacao" => "",
        "analise4_naoRecomendacao" => "Nao recomendado",
        "analise4_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
        "analise4_recomendacaoBoa" => "",
        "analise4_data" => "3 DE JUNHO",
        "analise4_descricao" => "nao consigo joga nao abre mais nem com reza braba",
    
        "gameLink" => "https://store.steampowered.com/app/2215430/Ghost_of_Tsushima_VERSO_DO_DIRETOR/",
        "realeaseDate" => "16/mai./2024",
        "distributor" => "PlayStation",
        "distributorSite" => "https://www.playstation.com/pt-br/",
        "creator" => "Sucker Punch Productions",
        "creatorName" => "Sucker Punch Productions",
        "creatorDate" => "01/01/1992",
        "creatorFormation" => "Desenvolvedora de Jogos",
        "creatorImg" => "{$path}img/banners/ghostTsushima/creatorLogo.jpg",
        "creatorSite" => "https://www.playstation.com/pt-br/"
        );


    $lancamentos[2] = array(
        "id" => 2,
        "title" => "F1® 24",

        "description" => "Alcance as primeiras colocações e pilote como as feras do automobilismo no EA SPORTS™ F1® 24, o jogo oficial...",
        "descriptionMid" => "Alcance as primeiras colocações e pilote como as feras do automobilismo no EA SPORTS™ F1® 24, o jogo oficial do 2024 FIA Formula One World Championship™.",
        "descriptionFull" => "Saia na Frente com o EA SPORTS™ F1® 24, o jogo oficial do 2024 FIA Formula One World Championship™. Liberte sua competitividade em busca de uma carreira histórica na F1®, com a primeira grande atualização desse modo desde 2016. Pilote como as feras do automobilismo e entre em sintonia com seu carro com o novo sistema de dirigibilidade dinâmica da EA SPORTS. Impulsione sua paixão vinculando-se às suas equipes e pilotos favoritos enquanto demonstra suas habilidades em novos modos e experiências.",
    
        "logoGame01" => "{$path}img/banners/F1_24/logoGame01.jpg",
        "banner01" => "{$path}img/banners/F1_24/banner01.jpg",
        "banner02" => "{$path}img/banners/F1_24/banner02.jpg",
        "screenShot01" => "{$path}img/banners/F1_24/screenshot01.jpg",
        "screenShot02" => "{$path}img/banners/F1_24/screenshot02.jpg",
        "screenShot03" => "{$path}img/banners/F1_24/screenshot03.jpg",
        "screenShot04" => "{$path}img/banners/F1_24/screenshot04.jpg",
        "video01" => "",
        "category" => "Simulação",
        "categoryLink" => "simulator",
        "modoJogo" => "Um jogador",
        "multiplayer" => "Cooperativo on-line",
        "controls" => "Teclado, Controles, Volante",
    
        "CPU_Min" => " Intel Core i3-2130 | Core i5-9600k (VR) or AMD FX 4300 | Ryzen 5 2600X (VR)",
        "GPU_Min" => "NVIDIA GTX 1060 (6GB) | GTX 1660Ti (VR) | RTX 2060 (RT) // AMD RX 480 (8GB) | RX 590 (VR) | 6700XT (RT) // Intel Arc A380 (VR/RT",
        "storage_Min" => "100 GB",
        "memory_Min" => "8gb RAM",
        "SO_Min" => "Windows 10 64-bit",
        "OBS_Min" => "SSD Recomendado",
    
        "CPU_Recomendate" => "Intel Core i5-9600k or AMD Ryzen 5 2600X",
        "GPU_Recomendate" => "NVIDIA RTX 2070 (+VR) | RTX 3070 (RT) // AMD RX 6600XT | RX 6700XT (VR) | RX 6800 (RT) // Intel Arc A580 (VR/RT)",
        "storage_Recomendate" => "100 GB",
        "memory_Recomendate" => "16gb RAM",
        "SO_Recomendate" => "Windows 10 64-bit",
        "OBS_Recomendate" => "SSD Requisitado",
    
        "price" => "R$ 359,00",
        "promo" => "",
        "promoLabel" => "",
        "plataform" => "PC, PS5, Xbox Series",
        "analisesBoa" => "",
        "analisesNeutra" => "Neutras",
        "analisesRuim" => "",
        "privacity" => "https://policies.google.com/privacy",
        "userAccept" => "https://www.ea.com/pt-br/games/f1/f1-24",
        "pegiInfo" => "LIVRE",
    
        "analise1_img" => "{$path}img/analise01.jpg",
        "analise1_userName" => "paulrichard987",
        "analise1_recomendacao" => "",
        "analise1_naoRecomendacao" => "Nao recomendado",
        "analise1_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
        "analise1_recomendacaoBoa" => "",
        "analise1_data" => "30 DE MAIO",
        "analise1_descricao" => "NÃO COMPRE ISSO! Esse jogo é uma piada não vale R$100,00
Uma física de jogo mobile, olha que tem jogo mobile com uma boa física.
Vibração dos controles não funciona.
Direção mais Arcade do que nunca.
Preço que não faz sentindo nenhum e não condiz com a qualidade geral.
De resto o pior lançamento de um F1 Game na historia.",
    
        "analise2_img" => "{$path}img/analise02.jpg",
        "analise2_userName" => "joaotroya",
        "analise2_recomendacao" => "Recomendado",
        "analise2_naoRecomendacao" => "",
        "analise2_recomendacaoRuim" => "",
        "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise2_data" => "5 DE JUNHO",
        "analise2_descricao" => "mesmo de sempre... porem com uma carreira melhorada e uma fisica tanto quanto duvidosa (nao é ruim). alguns gostam e outros nao. nao vale o preço cheio... mas o jogo vale a pena se for possivel comprar. em relaçao ao f1 2022: uma melhora de 37%.",
    
        "analise3_img" => "{$path}img/analise03.jpg",
        "analise3_userName" => "luc",
        "analise3_recomendacao" => "",
        "analise3_naoRecomendacao" => "Nao recomendado",
        "analise3_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
        "analise3_recomendacaoBoa" => "",
        "analise3_data" => "30 DE MAIO",
        "analise3_descricao" => "Downgrade do 23.",
    
        "analise4_img" => "{$path}img/analise04.jpg",
        "analise4_userName" => "Huntzinho",
        "analise4_recomendacao" => "",
        "analise4_naoRecomendacao" => "Nao recomendado",
        "analise4_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
        "analise4_recomendacaoBoa" => "",
        "analise4_data" => "1 DE JUNHO",
        "analise4_descricao" => "kkkkkkkkkk pqp como vcs conseguiram fazer essa piada de jogo. Handling horrível, o carro parece uma batata gigante nas curvas ... me recuso a tentar me adaptar a isso.",
    
        "gameLink" => "https://store.steampowered.com/app/2488620/F1_24/",
        "realeaseDate" => "31/mai./2024",
        "distributor" => "EaGames",
        "distributorSite" => "https://www.ea.com/pt-br",
        "creator" => "Codemasters",
        "creatorName" => "Codemasters",
        "creatorDate" => "01/01/1992",
        "creatorFormation" => "Desenvolvedora de Jogos",
        "creatorImg" => "{$path}img/banners/F1_24/creatorLogo.jpg",
        "creatorSite" => "https://www.ea.com/ea-studios/codemasters"
        );






    $lancamentos[3] = array(
        "id" => 3,
        "title" => "Persona 3 Reload",
        "description" => "Mergulhe na Hora Sombria e desperte as profundezas do seu coração. Persona 3 Reload é uma reimaginação cativante...",
        "descriptionMid" => "Mergulhe na Hora Sombria e desperte as profundezas do seu coração. Persona 3 Reload é uma reimaginação cativante do RPG que redefiniu o gênero, agora repensado para a era moderna com gráficos e jogabilidade de ponta.",
        "descriptionFull" => "Assuma o papel de um estudante transferido que acaba vivendo um destino inesperado ao ingressar na hora oculta entre um dia e outro. Desperte um poder incrível, investigue a misteriosa Hora Sombria, lute em nome dos seus amigos e deixe sua marca para sempre nas memórias deles. Persona 3 Reload é uma reimaginação cativante do RPG que redefiniu o gênero, agora repensado para a era moderna.",
        "logoGame01" => "{$path}img/banners/persona3/logoGame01.jpg",
        "banner01" => "{$path}img/banners/persona3/banner01.jpg",
        "banner02" => "{$path}img/banners/persona3/banner02.jpg",
        "screenShot01" => "{$path}img/banners/persona3/screenshot01.jpg",
        "screenShot02" => "{$path}img/banners/persona3/screenshot02.jpg",
        "screenShot03" => "{$path}img/banners/persona3/screenshot03.jpg",
        "screenShot04" => "{$path}img/banners/persona3/screenshot04.jpg",
        "video01" => "",
        "category" => "Ação",
        "categoryLink" => "action",
        "modoJogo" => "Um jogador",
        "multiplayer" => "Sem suporte a on-line",
        "controls" => "Teclado, Controles",
    
        "CPU_Min" => "Intel Core i5-2300, AMD FX-4350",
        "GPU_Min" => "NVIDIA GeForce GTX 650 Ti, 2 GB; AMD Radeon HD 7850, 2 GB",
        "storage_Min" => "30 GB",
        "memory_Min" => "8gb RAM",
        "SO_Min" => "Windows 10 64-bit",
        "OBS_Min" => "SSD Recomendado",
    
        "CPU_Recomendate" => "Intel Core i7-4790, AMD Ryzen 5 1400",
        "GPU_Recomendate" => "NVIDIA GeForce GTX 1650, 4 GB, AMD Radeon R9 290X, 4 GB",
        "storage_Recomendate" => "30 GB",
        "memory_Recomendate" => "8gb RAM",
        "SO_Recomendate" => "Windows 10 64-bit",
        "OBS_Recomendate" => "SSD Requisitado",
    
        "price" => "R$ 349,90",
        "promo" => "",
        "promoLabel" => "",
        "plataform" => "PC, Xbox Series",
        "analisesBoa" => "Extremamente Positivas",
        "analisesNeutra" => "",
        "analisesRuim" => "",
        "privacity" => "https://policies.google.com/privacy",
        "userAccept" => "https://privacy.sega.com/sega-of-america-inc-privacy-policy",
        "pegiInfo" => "16+",
    
        "analise1_img" => "{$path}img/analise01.jpg",
        "analise1_userName" => "Droka",
        "analise1_recomendacao" => "Recomendado",
        "analise1_naoRecomendacao" => "",
        "analise1_recomendacaoRuim" => "",
        "analise1_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise1_data" => "24 DE MAIO",
        "analise1_descricao" => "Meu segundo jogo da franquia, e é tão maravilhoso quanto o 5 Royal, Persona tem o suco, sempre me ensina muito como pessoa, as batalhas não enjoam, as trilhas sonoras são aquele típico chiclete, elas grudam na mente e provavelmente levarei todas para o resto da minha vida!",
    
        "analise2_img" => "{$path}img/analise02.jpg",
        "analise2_userName" => "CEGA",
        "analise2_recomendacao" => "Recomendado",
        "analise2_naoRecomendacao" => "",
        "analise2_recomendacaoRuim" => "",
        "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise2_data" => "7 DE JUNHO",
        "analise2_descricao" => "Mesmo não sendo fã de jogos de turno, me surpreendi em como esse jogo consegue ser divertido, você não vê a hora passar. É muito bom apenas passar os dias fazendo amizades, conhecendo pessoas, fortalecendo laços e brincando pela cidade. O combate no começo tende a ser maçante, mas ele vai melhorando conforma vc avança no jogo e é divertido demais ficar pensando e criando estratégias pra derrotar os inimigos.
Agora que finalizei o jogo, posso dizer: P3R é o tipo de jogo que vc precisa tirar um tempo sozinho pra pensar e refletir sobre sua vida após terminá-lo. O tipo de jogo que você não sabe que precisa até finalmente jogar.",
    
        "analise3_img" => "{$path}img/analise03.jpg",
        "analise3_userName" => "LuigiLA",
        "analise3_recomendacao" => "Recomendado",
        "analise3_naoRecomendacao" => "",
        "analise3_recomendacaoRuim" => "",
        "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise3_data" => "19 DE JUNHO",
        "analise3_descricao" => "Primeiro, não sou fã de Persona, mas o Persona 3 Reload me chamou a atenção. História excelente, mas na parte final do jogo fica bemmm entendiante",
    
        "analise4_img" => "{$path}img/analise04.jpg",
        "analise4_userName" => "Pitchshift",
        "analise4_recomendacao" => "Recomendado",
        "analise4_naoRecomendacao" => "",
        "analise4_recomendacaoRuim" => "",
        "analise4_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise4_data" => "18 DE JUNHO",
        "analise4_descricao" => "Depois que os créditos acabaram até fui abraçar minha mãe, espero que a atlus pague a minha terapia",
    
        "gameLink" => "https://store.steampowered.com/app/2161700/Persona_3_Reload/",
        "realeaseDate" => "2/fev./2024",
        "distributor" => "SEGA",
        "distributorSite" => "https://www.sega.com",
        "creator" => "ATLUS",
        "creatorName" => "ATLUS",
        "creatorDate" => "01/01/1992",
        "creatorFormation" => "Desenvolvedora de Jogos",
        "creatorImg" => "{$path}img/banners/persona3/creatorLogo.jpg",
        "creatorSite" => "https://atlus.com"
        );


    $lancamentos[4] = array(
        "id" => 4,
        "title" => "Senua s Saga: Hellblade II",
        "description" => "A sequência do premiado Hellblade: Senua's Sacrifice, Senua retorna em uma jornada brutal de sobrevivência através...",
        "descriptionMid" => "A sequência do premiado Hellblade: Senua's Sacrifice, Senua retorna em uma jornada brutal de sobrevivência através do mito e tormento da Islândia Viking. Com a intenção de salvar aqueles que foram vítimas dos horrores da tirania, Senua enfrenta uma batalha de superação das trevas internas e externas",
        "descriptionFull" => "Dos criadores de Heavenly Sword, Enslaved: Odyssey to the West, e DmC: Devil May Cry, chega agora a viagem brutal de uma guerreira até ao mito e a loucura.
Na era dos vikings, uma guerreira celta parte numa jornada pessoal arrepiante até ao inferno viking para lutar pela alma de seu falecido amado.

Criado em parceria com neurocientistas e pessoas que vivenciam psicose, Hellblade: Senua’s Sacrifice vai te levar para as profundezas da mente de Senua.

Características de acessibilidade:

EM JOGO
- Opções de acessibilidade disponíveis na primeira tela de lançamento do menu opções.
- Dificuldade de combate ajustável, entre os modos Automático (Dinamicamente ajustável) ou de seleção manual, entre Fácil, Médio e Difícil.
- O jogo pode ser pausado tanto durante o jogo quanto durante as animações.

ÁUDIO
- Controles personalizados de volume, que podem ser ajustados separadamente para Geral, Música, Efeitos Especiais, Vozes e áudio dos Menus.
- Saída de áudio pode ser ajustada entre os modos Estéreo e Mono.

GRÁFICOS
- Modos de daltonismo com intensidade de correção, ajustáveis entre os já inclusos filtros de Deuteranopia, Protanopia e Tritanopia.
- Legendas de conteúdo falado podem ser ligadas ou desligadas.
- Tamanho do texto de legenda pode ser ajustado entre Padrão e Grande.
- A cor do texto das legendas pode ser ajustada entre Branco, Laranja, Verde ou Azul.
- O fundo de texto das legendas pode ser ajustado entre transparente ou preto opaco.
- O contraste entre texto e fundos dos menus pode ser ajustado entre semitransparente ou preto opaco.

CONTROLES
- Sensibilidade de entrada ajustável para os analógicos do controle, eixos do mouse e habilidade de inverter o eixo da câmera.
- Reconfiguração de entrada para teclas do teclado e botões do controle (exceto controle de câmera e botões de navegação de menu).
- Suporte total a teclado, permitindo que o jogo seja jogado inteiramente via teclado (setas substituem o movimento do mouse/analógico direito).
- Vibração de controle pode ser ligada ou desligada.
- Correr pode ser configurado como ao manter apertado ou como ativar/desativar ao pressionar a tecla alternadamente.

Todas as opções de acessibilidade mencionadas velem para a versão para PC do jogo Hellblade: Senua's Sacrifice.",

        "logoGame01" => "{$path}img/banners/hellblade/logoGame01.jpg",
        "banner01" => "{$path}img/banners/hellblade/banner01.jpg",
        "banner02" => "{$path}img/banners/hellblade/banner02.jpg",
        "screenShot01" => "{$path}img/banners/hellblade/screenshot01.jpg",
        "screenShot02" => "{$path}img/banners/hellblade/screenshot02.jpg",
        "screenShot03" => "{$path}img/banners/hellblade/screenshot03.jpg",
        "screenShot04" => "{$path}img/banners/hellblade/screenshot04.jpg",
        "video01" => "",
        "category" => "Ação",
        "categoryLink" => "action",
        "modoJogo" => "Um jogador",
        "multiplayer" => "Sem suporte a on-line",
        "controls" => "Teclado, Controles",
    
        "CPU_Min" => "Intel i5-8400 | AMD Ryzen 5 2600",
        "GPU_Min" => "NVIDIA GeForce GTX 650 Ti, 2 GB; AMD Radeon HD 7850, 2 GB",
        "storage_Min" => "70 GB",
        "memory_Min" => "16gb RAM",
        "SO_Min" => "Windows 10 64-bit",
        "OBS_Min" => "SSD Recomendado",
    
        "CPU_Recomendate" => "Intel i7-10700K | AMD Ryzen 5 5600X",
        "GPU_Recomendate" => "Nvidia RTX 3080 | AMD RX 6800 XT | Intel Arc A770",
        "storage_Recomendate" => "70 GB",
        "memory_Recomendate" => "16gb RAM",
        "SO_Recomendate" => "Windows 10 64-bit",
        "OBS_Recomendate" => "SSD Requisitado",
    
        "price" => "R$ 229,00",
        "promo" => "",
        "promoLabel" => "",
        "plataform" => "PC, Xbox Series",
        "analisesBoa" => "Muito Positivas",
        "analisesNeutra" => "",
        "analisesRuim" => "",
        "privacity" => "https://privacy.microsoft.com/en-gb/privacystatement",
        "userAccept" => "https://www.microsoft.com/en-us/servicesagreement",
        "pegiInfo" => "18+",
    
        "analise1_img" => "{$path}img/analise01.jpg",
        "analise1_userName" => "_Dark",
        "analise1_recomendacao" => "Recomendado",
        "analise1_naoRecomendacao" => "",
        "analise1_recomendacaoRuim" => "",
        "analise1_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise1_data" => "31 DE MAIO",
        "analise1_descricao" => "Jogo top! as lutas são sensacionais ! GRÁFICO EXTRAORDINÁRIO !",
    
        "analise2_img" => "{$path}img/analise02.jpg",
        "analise2_userName" => "felipedeodoro",
        "analise2_recomendacao" => "Recomendado",
        "analise2_naoRecomendacao" => "",
        "analise2_recomendacaoRuim" => "",
        "analise2_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise2_data" => "28 DE MAIO",
        "analise2_descricao" => "O gráfico do jogo é simplesmente surpreendente, e o combate eh mto bem feito, mas só valeria a pena pegar na promoção.",
    
        "analise3_img" => "{$path}img/analise03.jpg",
        "analise3_userName" => "llopes",
        "analise3_recomendacao" => "Recomendado",
        "analise3_naoRecomendacao" => "",
        "analise3_recomendacaoRuim" => "",
        "analise3_recomendacaoBoa" => "<i class='analiseBoa bi bi-hand-thumbs-up-fill'></i>",
        "analise3_data" => "3 DE JUNHO",
        "analise3_descricao" => "Imersão muito boa, joguem de fone de ouvido e se sintam na pele da protagonista.",
    
        "analise4_img" => "{$path}img/analise04.jpg",
        "analise4_userName" => "Fool",
        "analise4_recomendacao" => "",
        "analise4_naoRecomendacao" => "Nao recomendado",
        "analise4_recomendacaoRuim" => "<i class='analiseRuim bi bi-hand-thumbs-down-fill'></i>",
        "analise4_recomendacaoBoa" => "",
        "analise4_data" => "15 DE JUNHO",
        "analise4_descricao" => "R$ 229,00.",
    
        "gameLink" => "https://store.steampowered.com/app/2461850/Senuas_Saga_Hellblade_II/",
        "realeaseDate" => "21/mai./2024",
        "distributor" => "Xbox Game Studios",
        "distributorSite" => "https://www.xbox.com/en-US/xbox-game-studios",
        "creator" => "Ninja Theory",
        "creatorName" => "Ninja Theory",
        "creatorDate" => "01/01/1992",
        "creatorFormation" => "Desenvolvedora de Jogos",
        "creatorImg" => "{$path}img/banners/hellblade/creatorLogo.jpg",
        "creatorSite" => "https://www.xbox.com/en-US/xbox-game-studios"
        );







        








    

    echo json_encode($lancamentos);



?>


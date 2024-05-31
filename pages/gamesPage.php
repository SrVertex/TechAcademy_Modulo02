
<div>

<?php 

    $id = $p[1] ?? NULL;
    
    $api = "http://localhost/VaporStore_web/api/games/game_{$id}.php";

    $dadosApi = file_get_contents($api);
    
    $decode = json_decode($dadosApi);



?>

<?php
foreach ($decode as $jogo) {
}
?>

<div>
    <p><?= $jogo->id?></p>
</div>

</div>

<div>

<?php 

    $id = $p[1] ?? NULL;

    $dadosApi = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php/");
    
    $dadosApi = json_decode($dadosApi);

    $jogo = $dadosApi->$id;

?>


<div>
    <p><?php echo $jogo->title?></p>
</div>

</div>
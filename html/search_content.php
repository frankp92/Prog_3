<?php

    include 'db/query_search.php';
    echo $array_ricerca

?>
<div class="container"id="page-container">
<div id="content-wrap">
<h1>Ricerca</h1>

<?php

    foreach ( $array_ricerca as $ricerca) {
    
?>

    <?php
        if(isset($_SESSION['logged_in']) == TRUE){
            if ($_SESSION['categoria'] == 'utente_esterno' && $eventi['privacy'] == 'Privato' ){
                continue;
            }}
        
        if(isset($_SESSION['logged_in']) == FALSE && $eventi['privacy'] == 'Privato'){
            continue;
        }
    ?>
    
    <div class="container">    
        <div class="card text-center">
        <div class="card-header">
            <?php echo $eventi['titolo']; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $eventi['privacy']; ?> </h5>
            <p class="card-text"><?php echo $eventi['descrizione']; ?></p>

        </div>
        <div class="card-footer text-muted">
            <div class="row"> 
            <p> Data: <?php echo $eventi['data']; ?> -</p>
            <p> Orario: <?php echo $eventi['ora']; ?> -</p>
            <p> Durata: <?php echo $eventi['durata']; ?> -</p>
            <p> Posti: <?php echo $eventi['posti']; ?> -</p>  
            <p> Tag: <?php echo $eventi['tag']; ?> </p>    
            </div>
        </div>
        </div>
    </div>
    
<?php
    }
?>
</div></div>
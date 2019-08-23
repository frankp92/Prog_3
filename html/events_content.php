<?php

    include 'db/query_events.php'

?>
<div class="container"id="page-container">
<div id="content-wrap">
<h1>Eventi</h1>

<?php
    // Creazione eventi per i prof
    if(isset($_SESSION['logged_in']) == TRUE){
        if ($_SESSION['categoria'] == 'professore'){
            include 'event_button.php';
    }}
?>


<?php

    foreach ( $array_eventi as $eventi) {
    
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
            
            <?php 
            if(isset($_SESSION['logged_in']) == TRUE){
                include 'db/controllo_partecipazione.php';
            } 
            ?>
            
            <?php
            if(isset($_SESSION['logged_in']) == TRUE){
                if($controllo == 0){
                    include 'html/partecipa_button.php'; 
                } else {    
                    include 'html/non_partecipa_button.php'; 
                }} 
             ?>
    <?php
    if(isset($_SESSION['logged_in']) == TRUE){
        if( $_SESSION['UId'] == $eventi['IDmoderatore']) {
    ?>
        <a href="db/delete_event.php?IDevento=<?php echo $eventi['IDevento']; ?>" class="btn btn-primary">Cancella evento</a>
    <?php
    }}
    ?>
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
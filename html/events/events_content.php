<!--query al db per ricevere gli eventi-->
<?php include 'php/events/query_events.php' ?>

<div class="container"id="page-container">
<div id="content-wrap">
<h1>Eventi</h1>

<?php
    // Creazione eventi per i prof
    $actual_link = "{$_SERVER['REQUEST_URI']}";
    $file=explode('?',$actual_link);

    if(isset($_SESSION['logged_in']) == TRUE){
        if ($_SESSION['categoria'] == 'professore' AND $file[0] != '/Smartlab2.0/search.php'){
            include 'event_button.php';
        }
    }
    
    //se non ci sono eventi stampa a video l'avviso
    if(sizeof($array_eventi)==0){?>
       
        <h3>Nessun evento</h3> 
        <?php
        
    }
    //crea il contenuto della pagina ovvero le schede degli eventi
    foreach ( $array_eventi as $eventi) {
        //nasconde agli utenti esterni gli eventi pubblici
        if((isset($_SESSION['logged_in']) == FALSE OR $_SESSION['categoria'] == 'utente_esterno') AND $eventi['privacy'] == 'Privato'){
            
            continue;
        }?>
        
    <!-- Creazione schede eventi -->
    <div class="container">    
        <div class="card text-center">
        <div class="card-header">
            <h3><?php echo $eventi['titolo']; ?></h3>
        </div>
        <div class="card-body">
            <h6 class="card-title"><?php echo $eventi['privacy']; ?> </h6>
            <p class="card-text"><?php echo $eventi['descrizione']; ?></p>
            
            <?php 
                if(isset($_SESSION['logged_in']) == TRUE){

                    include 'php/events/check_partecipazione.php';
                
                    if($controllo == 0 AND $eventi['posti'] > 0){
                        include 'partecipa_button.php'; 
                    } elseif($controllo==1 AND $_SESSION['UId'] != $eventi['IDmoderatore']) {    
                        include 'non_partecipa_button.php'; 
                    }
            
                    if( $_SESSION['UId'] == $eventi['IDmoderatore']) {
           
                        include 'delete_button.php'; 
                        
                    }
                }
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
    
<?php }?>
</div></div>
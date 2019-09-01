<!--query al db per ricevere i progetti-->
<?php include 'php/projects/query_project.php'?>

<div class="container"id="page-container">
<div id="content-wrap">
<h1>Progetti</h1>

<?php
    // Creazione progetti per i prof
    $actual_link = "{$_SERVER['REQUEST_URI']}";
    $file=explode('?',$actual_link);

    if(isset($_SESSION['logged_in']) == TRUE){
        if ($_SESSION['categoria'] == 'professore' AND $file[0] != '/Smartlab2.0/search.php'){
            include 'project_button.php';
        }
    }

    //se non ci sono eventi stampa a video l'avviso
    if(sizeof($array_progetto)==0){?>       

        <h3>Nessun progetto</h3> 
        <?php
        
    }
    //crea il contenuto della pagina ovvero le schede dei progetti
    foreach ( $array_progetto as $progetto) {
        //nasconde agli utenti esterni i progetti pubblici
        if((isset($_SESSION['logged_in']) == FALSE OR $_SESSION['categoria'] == 'utente_esterno') AND $progetto['Privacy'] == 'Privato' ){
                
            continue;
        }?>
    <!-- Creazione schede eventi -->
    <div class="container">    
        <div class="card text-center">
        <div class="card-header">
            <?php echo $progetto['Titolo']; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $progetto['Privacy']; ?> </h5>
            <p class="card-text"><?php echo $progetto['Descrizione']; ?></p>
            
            <?php 
            if(isset($_SESSION['logged_in']) == TRUE){
                if ($_SESSION['categoria'] == 'studente'){
                    include 'php/projects/controllo_tirocinante.php';
                }
                elseif ($_SESSION['categoria'] == 'personale_tecnico'){
                    include 'php/projects/controllo_lavoratore.php';
                }
            } 

            if(isset($_SESSION['logged_in']) == TRUE AND ($_SESSION['categoria']=='studente' OR $_SESSION['categoria']=='personale_tecnico')){
                if($controllo == 0 AND $progetto['Posizioni_aperte'] > 0){
                    include 'partecipa_button.php'; 
                } elseif($progetto['Posizioni_aperte'] > 0) {    
                    include 'non_partecipa_button.php'; 
                }
            } 

    
            if( $_SESSION['UId'] == $progetto['IDcoordinatore']) {
            
                include 'delete_button.php';

            }?>

        </div>
        <div class="card-footer text-muted">
            <div class="row"> 
            <p> Data di creazione: <?php echo $progetto['Data_di_creazione']; ?> -</p>
            <p> Tipologia: <?php echo $progetto['Tipologia']; ?> -</p>
            <p> Durata: <?php echo $progetto['Durata']; ?> -</p>
            <p> Posizioni aperte: <?php echo $progetto['Posizioni_aperte']; ?> -</p>  
            <p> Tag: <?php echo $progetto['tag']; ?> </p>    
            </div>
        </div>
        </div>
    </div>
    
<?php }?>
</div></div>
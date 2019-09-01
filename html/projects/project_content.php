<?php

    include 'php/projects/query_project.php'

?>
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
    }}
?>


<?php

    if(sizeof($array_progetto)==0){
?>       

       <h3>Nessun progetto</h3> 
        
<?php
        
    }
    foreach ( $array_progetto as $progetto) {

?>

    <?php
        if(isset($_SESSION['logged_in']) == TRUE){
            if ($_SESSION['categoria'] == 'utente_esterno' && $progetto['Privacy'] == 'Privato' ){
                continue;
            }}
        
        if(isset($_SESSION['logged_in']) == FALSE && $progetto['Privacy'] == 'Privato'){
            continue;
        }
    ?>
    
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
            ?>
            
            <?php
            if(isset($_SESSION['logged_in']) == TRUE && ($_SESSION['categoria']=='studente' || $_SESSION['categoria']=='personale_tecnico')){
                if($controllo == 0 && $progetto['Posizioni_aperte'] > 0){
                    include 'partecipa_button.php'; 
                } elseif($progetto['Posizioni_aperte'] > 0) {    
                    include 'non_partecipa_button.php'; 
                }} 
             ?>
    <?php
    if(isset($_SESSION['logged_in']) == TRUE){
        if( $_SESSION['UId'] == $progetto['IDcoordinatore']) {
    ?>
        <a href="php/projects/delete_project.php?IDprogetto=<?php echo $progetto['IDprogetto']; ?>" class="btn btn-primary">Cancella progetto</a>
    <?php
    }}
    ?>
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
    
    <?php
}
?>
</div></div>
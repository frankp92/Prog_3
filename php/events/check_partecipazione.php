<?php
    require('php/db_conn.php');

    $id_utente = $_SESSION['UId'];
    $categoria_user = $_SESSION['categoria'];
    $id_evento = $eventi['IDevento'];

    $sql = "SELECT IDpartecipante
            FROM partecipa
            WHERE IDpartecipante = '$id_utente' 
            AND IDevento = '$id_evento' 
            ";

    $result = $conn->query($sql);
    $controllo = "";
    if ($result->num_rows > 0){
        $controllo = 1;
    }else{
        $controllo = 0;
    }

    if($categoria_user == 'professore'){
        
        $sq2 = "SELECT IDmoderatore
        FROM moderatore
        WHERE IDmoderatore = '$id_utente' 
        AND IDevento = '$id_evento' 
        ";

        $result = $conn->query($sq2);
        $controllo = "";
        if ($result->num_rows > 0){
            $controllo = 1;
        }else{
            $controllo = 0;
        }
    }

    if($controllo == 0 AND $eventi['posti'] > 0){
        include 'html/events/partecipa_button.php'; 
    } elseif($controllo == 1 AND $_SESSION['UId'] != $eventi['IDmoderatore']) {    
        include 'html/events/non_partecipa_button.php'; 
    }

    if( $_SESSION['UId'] == $eventi['IDmoderatore']) {

        include 'html/events/delete_button.php'; 
        
    }
    $conn->close();

?>
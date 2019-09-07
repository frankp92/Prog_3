<?php
    require('../db_conn.php');
    if(isset($_POST['submit'])){

        $id_utente = $_POST['UId'];
        $id_evento = $_POST['id_evento'];
        $azione = $_POST['azione'];

    }

    if($azione == 'partecipa'){
        
        //diminuisce i posti
        $sql = "UPDATE evento SET posti = posti-1
                WHERE IDevento = '$id_evento' 
                ";
    
        if($conn->query($sql) === TRUE){
            echo "Record updated successfully";
        }else{
            echo "Error updating record: " . $conn->error;
        }
    
        //aggiunge partecipante all'evento
        $sq2 = "INSERT INTO partecipa (IDpartecipante, IDevento)
        VALUES ('$id_utente', '$id_evento')";
    
        if($conn->query($sq2) === TRUE){
            echo "New record created successfully";
            header("location: ../../events.php");
        }else{
            echo "Error: " . $sq2 . "<br>" . $conn->error;
        }

    }elseif ($azione=='non_partecipa'){
        
        //aumenta posizioni
        $sql = "UPDATE evento SET posti = posti+1
        WHERE IDevento = '$id_evento' 
        ";

        if($conn->query($sql) === TRUE){
            echo "Record updated successfully";
        }else{
            echo "Error updating record: " . $conn->error;
        }
        
        //elimina partecipante evento
        $sq2 = "DELETE FROM partecipa 
            WHERE IDpartecipante ='$id_utente'  AND IDevento = '$id_evento'
            ";
        
        if($conn->query($sq2) === TRUE){
            echo "Delete successfully";
            header("location: ../../events.php");
        }else{
            echo "Error: " . $sq2 . "<br>" . $conn->error;
        }

    }
    
    $conn->close();

?>
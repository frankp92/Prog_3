<?php
    session_start();
    require('../db_conn.php');
    if(isset($_POST['submit'])){

        $id_utente = $_SESSION['UId'];
        $categoria_user = $_SESSION['categoria'];
        $id_progetto = $_POST['IDprogetto'];
        $tipologia_progetto = $_POST['Tipologia'];
        $coordinatore = $_POST['IDcoordinatore'];

    }

    //diminuisce le posizioni
    $sql = "UPDATE progetto SET Posizioni_aperte = Posizioni_aperte-1
            WHERE IDprogetto = '$id_progetto' 
            ";

    if($conn->query($sql) === TRUE){
        echo "Record updated successfully";
    }else{
        echo "Error updating record: " . $conn->error;
    }

    //aggiunge studente al tirocinio/tesi/lavoro
    if ($_SESSION['categoria'] == 'studente'){
        if($tipologia_progetto == 'Tirocinio'){
            $sq2 = "INSERT INTO tirocinio (IDtirocinante, IDprogetto)
            VALUES ('$id_utente', '$id_progetto')";
        }elseif($tipologia_progetto == 'Tesi'){
            $sq2 = "INSERT INTO tesi (IDrelatore, IDtesista, IDprogetto)
            VALUES ('$coordinatore', '$id_utente', '$id_progetto')";
        }elseif($tipologia_progetto == 'Lavoro'){
            $sq2 = "INSERT INTO lavoro (IDlavoratore, IDprogetto)
            VALUES ('$id_utente', '$id_progetto')";
        }
    } //aggiunge lavoratore a lavoro
    elseif ($_SESSION['categoria'] == 'personale_tecnico'){
        $sq2 = "INSERT INTO lavoro (IDlavoratore, IDprogetto)
        VALUES ('$id_utente', '$id_progetto')";        
    }

    if($conn->query($sq2) === TRUE){
        echo "New record created successfully";
        header("location: ../../project.php");
    }else{
        echo "Error: " . $sq2 . "<br>" . $conn->error;
    }

    $conn->close();

?>
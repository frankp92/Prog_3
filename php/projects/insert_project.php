<?php
    session_start();
    require('../db_conn.php');
    if(isset($_POST['submit'])){
        
        $data_di_creazione = $_POST['Data_di_creazione'];
        $titolo = $_POST['Titolo'];
        $descrizione = $_POST['Descrizione'];
        $tipologia = $_POST['Tipologia'];
        $durata = $_POST['Durata'];
        $posizioni_aperte = $_POST['Posizioni_aperte'];
        $privacy = $_POST['Privacy'];
        $uid = $_POST['UId'];
        $tag = $_POST['tag'];

    }
    //Variabile ausiliaria
    $id_progetto = "";
    
    //aggiunta progetto
    $sql = "INSERT INTO progetto (Data_di_creazione, Titolo, Descrizione, Tipologia, Durata, Posizioni_aperte, Privacy)
    VALUES ('$data_di_creazione','$titolo','$descrizione','$tipologia', '$durata', '$posizioni_aperte', '$privacy')
        ";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        $id_progetto = $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //aggiunta coordinatore
    $sq2 = "INSERT INTO coordinatore (IDcoordinatore, IDprogetto)
          VALUES('$uid', '$last_id') ";  

    if ($conn->query($sq2) === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sq2 . "<br>" . $conn->error;
    }

    //aggiunta area tematica
    $sq3 = "INSERT INTO area_tematica (titolo)
          VALUES('$tag') 
        ";  

    if ($conn->query($sq3) === TRUE) {
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id; ;
    } else {
        echo "Error: " . $sq3 . "<br>" . $conn->error;
    }

    //aggiunta tag
    $sq4 = "INSERT INTO tag_p (IDareatematica, IDprogetto)
          VALUES('$last_id','$id_progetto') ";  

    if ($conn->query($sq4) === TRUE) {
        echo "New record created successfully." ;
        header("location: ../../project.php");
    } else {
        echo "Error: " . $sq4 . "<br>" . $conn->error;
    }

    $conn->close();
?>
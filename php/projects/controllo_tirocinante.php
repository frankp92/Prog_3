<?php
    require('php/db_conn.php');

    $id_utente = $_SESSION['UId'];
    $id_progetto = $progetto['IDprogetto'];

    $sql = "SELECT IDtirocinante
            FROM tirocinio
            WHERE IDtirocinante = '$id_utente' 
            AND IDprogetto = '$id_progetto' 
            ";

    $result = $conn->query($sql);
    $controllo = "";
    if ($result->num_rows > 0){
        $controllo = 1;
    }else{
        $controllo = 0;
    }
    $conn->close();

?>
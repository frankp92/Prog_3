<?php
    require('php/db_conn.php');

    $id_utente = $_SESSION['UId'];
    $categoria_user = $_SESSION['categoria'];
    $id_progetto = $progetto['IDprogetto'];
    $tipologia_progetto = $progetto['Tipologia'];

    if($categoria_user == 'studente'){
        
        if($tipologia_progetto == 'Tirocinio'){
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
        }elseif($tipologia_progetto == 'Tesi'){            
            $sql = "SELECT IDtesista
            FROM tesi
            WHERE IDtesista = '$id_utente' 
            AND IDprogetto = '$id_progetto' 
            ";

            $result = $conn->query($sql);
            $controllo = "";
            if ($result->num_rows > 0){
                $controllo = 1;
            }else{
                $controllo = 0;
            }
        }elseif($tipologia_progetto == 'Lavoro'){            
            $sql = "SELECT IDlavoratore
            FROM lavoro
            WHERE IDlavoratore = '$id_utente' 
            AND IDprogetto = '$id_progetto' 
            ";

            $result = $conn->query($sql);
            $controllo = "";
            if ($result->num_rows > 0){
                $controllo = 1;
            }else{
                $controllo = 0;
            }
        }
    }elseif($categoria_user == 'personale_tecnico' AND $tipologia_progetto == 'Lavoro'){
        
        $sql = "SELECT IDlavoratore
        FROM lavoro
        WHERE IDlavoratore = '$id_utente' 
        AND IDprogetto = '$id_progetto' 
        ";

        $result = $conn->query($sql);
        $controllo = "";
        if ($result->num_rows > 0){
            $controllo = 1;
        }else{
            $controllo = 0;
        }
    }elseif($categoria_user == 'professore'){
        
        $sql = "SELECT IDcoordinatore
        FROM coordinatore
        WHERE IDcoordinatore = '$id_utente' 
        AND IDprogetto = '$id_progetto' 
        ";

        $result = $conn->query($sql);
        $controllo = "";
        if ($result->num_rows > 0){
            $controllo = 1;
        }else{
            $controllo = 0;
        }
    }
    $conn->close();

?>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "smartlab";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } 

    $actual_link = "{$_SERVER['REQUEST_URI']}";
    $file=explode('?',$actual_link);

    if($file[0] == '/Smartlab2.0/search.php'){

        $cerca = $_GET['ricerca'];
        $array_progetto = array();

        $sql = "SELECT C.IDcoordinatore, P.IDprogetto,  P.Data_di_creazione, P.Titolo, P.Descrizione,    P.Tipologia, P.Durata, P.Posizioni_aperte, P.Privacy,  A.Titolo AS tag
                FROM coordinatore AS C JOIN progetto AS P
                on C.IDprogetto = P.IDprogetto
                    JOIN tag_p AS T
                on P.IDprogetto = T.IDprogetto
                    JOIN area_tematica AS A
                on T.IDareatematica = A.IDareatematica
                WHERE P.Titolo LIKE '%$cerca%'    
                ";

        $result = $conn->query($sql);

        for ( $array_progetto; $row = $result->fetch_assoc();   $array_progetto[] = $row );

    }else{

        $array_progetto = array();

        $sql = "SELECT C.IDcoordinatore, P.IDprogetto,  P.Data_di_creazione, P.Titolo, P.Descrizione,    P.Tipologia, P.Durata, P.Posizioni_aperte, P.Privacy,  A.Titolo AS tag
                FROM coordinatore AS C JOIN progetto AS P
                on C.IDprogetto = P.IDprogetto
                    JOIN tag_p AS T
                on P.IDprogetto = T.IDprogetto
                    JOIN area_tematica AS A
                on T.IDareatematica = A.IDareatematica   
                ";

        $result = $conn->query($sql);

        for ( $array_progetto; $row = $result->fetch_assoc();   $array_progetto[] = $row );

    } 

    $conn->close();
?>
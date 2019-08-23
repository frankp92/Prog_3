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
        $array_eventi = array();

        $sql = "SELECT M.IDmoderatore, E.IDevento, E.titolo, E.descrizione, E.data, E.ora, E.durata, E.posti, E.privacy, A.Titolo AS tag
        FROM moderatore AS M JOIN evento AS E
        on M.IDevento = E.IDevento
            JOIN tag_e AS T
        on E.IDevento = T.IDevento
            JOIN area_tematica AS A
        on T.IDareatematica = A.IDareatematica
            WHERE E.Titolo LIKE '%$cerca%'
            ";

        $result = $conn->query($sql);

        for ( $array_eventi; $row = $result->fetch_assoc(); $array_eventi[] = $row );
        
    }else{

        $array_eventi = array();

        $sql = "SELECT M.IDmoderatore, E.IDevento, E.titolo, E.descrizione, E.data, E.ora, E.durata, E.posti, E.privacy, A.Titolo AS tag
        FROM moderatore AS M JOIN evento AS E
        on M.IDevento = E.IDevento
            JOIN tag_e AS T
        on E.IDevento = T.IDevento
            JOIN area_tematica AS A
        on T.IDareatematica = A.IDareatematica    
        ";

        $result = $conn->query($sql);

        for ( $array_eventi; $row = $result->fetch_assoc(); $array_eventi[] = $row ); 

    }

    $conn->close();
?>
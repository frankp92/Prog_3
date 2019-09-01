<?php
    require('php/db_conn.php');

    //prende l'URL(per search)
    $actual_link = "{$_SERVER['REQUEST_URI']}";
    $file=explode('?',$actual_link);//divde il link in base al '?'
    
    //controlla se stiamo cercando qualche evento o se stiamo visualizzando tutti gli eventi semplicemente
    if($file[0] == '/Smartlab2.0/search.php'){

        $cerca = $_GET['ricerca'];
        $array_progetto = array();

        //seleziona gli eventi in base alla ricerca
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

    }else{//seleziona tutti gli eventi

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
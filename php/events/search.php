<?php
    require('../../php/db_conn.php');

    //controlla se stiamo cercando qualche evento o se stiamo visualizzando tutti gli eventi semplicemente
    if(isset($_GET['ricerca'])){

        $cerca = $_GET['ricerca'];
        $array_eventi = array();

        //seleziona gli eventi in base alla ricerca
        $sql = "SELECT Titolo
                FROM evento
                WHERE Titolo LIKE '%$cerca%'
            ";

        $result = $conn->query($sql);
        $titolo = $result->fetch_assoc();
        print_r($titolo['Titolo']);
        //for ( $array_eventi; $row = $result->fetch_assoc(); $array_eventi[] = $row );
        
    }

    $conn->close();
?>
<?php
    require('../../php/db_conn.php');

    //controlla se stiamo cercando qualche evento o se stiamo visualizzando tutti gli eventi semplicemente
    if(isset($_GET['ricerca'])){

        $cerca = $_GET['ricerca'];
        $titoli = array();

        //seleziona gli eventi in base alla ricerca
        $sql = "SELECT Titolo
                FROM evento
                WHERE Titolo LIKE '%$cerca%'
            ";

        $result = $conn->query($sql);

        for ( $titoli; $row = $result->fetch_assoc(); $titoli[] = $row );

        $titolo=json_encode($titoli);
        echo($titolo); 

    }
    
    $conn->close();
?>
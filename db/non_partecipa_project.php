<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "smartlab";
    if(isset($_POST['submit'])){

        $id_utente = $_POST['UId'];
        $id_progetto = $_POST['IDprogetto']; 

    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $sql = "UPDATE progetto SET Posizioni_aperte = Posizioni_aperte+1
            WHERE IDprogetto = '$id_progetto' 
            ";

    if($conn->query($sql) === TRUE){
        echo "Record updated successfully";
    }else{
        echo "Error updating record: " . $conn->error;
    }

    if ($_SESSION['categoria'] == 'studente'){
        $sq2 = "DELETE FROM tirocinio
        WHERE IDtirocinante = '$id_utente' AND IDprogetto = '$id_progetto'
        ";        
    }
    elseif ($_SESSION['categoria'] == 'personale_tecnico'){
        $sq2 = "DELETE FROM lavoro
        WHERE IDlavoratore = '$id_utente' AND IDprogetto = '$id_progetto'";        
    }

    if($conn->query($sq2) === TRUE){
        echo "New record created successfully";
        header("location: ../project.php");
    }else{
        echo "Error: " . $sq2 . "<br>" . $conn->error;
    }

    $conn->close();

?>
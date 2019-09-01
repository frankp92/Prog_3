<?php
    session_start();
    require('db_conn.php');

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $pass = $_POST['password']; 

    }

    //cerca l'utente
    $sql = "SELECT IDutente, categoria 
            FROM utente
            WHERE (email = '$email' AND password = MD5('$pass'))
            ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $row = $result->fetch_assoc(); 
        echo "IDutente: " . $row["IDutente"]. " - Categoria: " . $row["categoria"]. "<br>";
        //modifica variabili di sessione
        $_SESSION['UId'] = $row["IDutente"];
        $_SESSION['categoria'] = $row["categoria"];
        $_SESSION['logged_in'] = TRUE;
        header("location: ../index.php");

    } else{
        echo "0 results";
        header("location: ../error.php");    

    }

    $conn->close();
?>
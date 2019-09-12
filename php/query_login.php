<?php
    session_start();
    require('db_conn.php');

    $email = $_POST['email'];
    $pass = $_POST['password']; 

    //cerca l'utente
    $sql = "SELECT IDutente, categoria 
            FROM utente
            WHERE (email = '$email' AND password = MD5('$pass'))
            ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0){

        $row = $result->fetch_assoc(); 
        
        //modifica variabili di sessione
        $_SESSION['UId'] = $row["IDutente"];
        $_SESSION['categoria'] = $row["categoria"];
        $_SESSION['logged_in'] = TRUE;

        $arrLogin = array($email,$_SESSION['UId'],$_SESSION['categoria'],$_SESSION['logged_in']);
        $jsonLogin = json_encode($arrLogin);
        echo($jsonLogin);

    }else{

        $arrLogin = array('Login fallito!');
        $jsonLogin = json_encode($arrLogin);
        echo($jsonLogin);

    }

    $conn->close();
?>
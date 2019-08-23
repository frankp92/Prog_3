<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "smartlab";
    if(isset($_POST['submit'])){

        $name = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $indirizzo = $_POST['indirizzo'];
        $telefono = $_POST['telefono'];
        $codice_fiscale = $_POST['codice_fiscale'];
        $titolo = $_POST['titolo'];
        $email = $_POST['email'];
        $categoria = 'utente_esterno';
        $pass = $_POST['password']; 

    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $sql = "INSERT INTO utente (nome, cognome, indirizzo, telefono, email, titolo_di_studio, codice_fiscale, categoria, password)
    VALUES ('$name','$cognome','$indirizzo','$telefono', '$email', '$titolo', '$codice_fiscale', '$categoria', MD5('$pass'))";

    if ($conn->query($sql) === TRUE) {
        header("location: ../../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
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
        $categoria = 'studente';
        $pass = $_POST['password']; 
        $tipo_corso = $_POST['tipo_corso'];
        $corso = $_POST['corso'];
        $anno_corso = $_POST['anno_corso'];

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
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sq2 = "INSERT INTO studente (IDs, Tipo_di_corso, Corso_di_studio, Anno_corso)
          VALUES('$last_id', '$tipo_corso', '$corso', '$anno_corso') ";  

    if ($conn->query($sq2) === TRUE) {
        header("location: ../../index.php");
    } else {
        echo "Error: " . $sq2 . "<br>" . $conn->error;
    }

    $conn->close();
?>
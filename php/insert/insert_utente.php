<?php
    require('../db_conn.php');

    $name = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $indirizzo = $_POST['indirizzo'];
    $telefono = $_POST['telefono'];
    $codice_fiscale = $_POST['codice_fiscale'];
    $titolo = $_POST['titolo'];
    $email = $_POST['email'];
    $categoria = $_POST['categoria'];
    $pass = $_POST['password']; 

    //aggiunta utente
    $sql = "INSERT INTO utente (nome, cognome, indirizzo, telefono, email, titolo_di_studio, codice_fiscale, categoria, password)
    VALUES ('$name','$cognome','$indirizzo','$telefono', '$email', '$titolo', '$codice_fiscale', '$categoria', MD5('$pass'))";

    if($categoria=='utente_esterno'){

        $arrUtenteEsterno = array($name,$cognome,$indirizzo,$telefono,$codice_fiscale,$titolo,$email,$categoria);
        $jsonLogin = json_encode($arrUtenteEsterno);
        echo($jsonLogin);
    }

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        //echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if($categoria=='personale_tecnico'){

        $professione = $_POST['professione'];
        $specializzazione = $_POST['specializzazione'];

        $sq2 = "INSERT INTO personale_tecnico (IDpt, professione, specializzazione)
        VALUES('$last_id', '$professione', '$specializzazione') ";

        $arrPersonaleTecnico = array($name,$cognome,$indirizzo,$telefono,$codice_fiscale,$titolo,$email,$categoria,$professione,$specializzazione);
        $jsonLogin = json_encode($arrPersonaleTecnico);
        echo($jsonLogin);

        if ($conn->query($sq2) === TRUE) {
            //header("location: ../../index.php");
        } else {
            //echo "Error: " . $sq2 . "<br>" . $conn->error;
        }

    }elseif($categoria=='personale_non_strutturato'){

        $qualifica = $_POST['qualifica'];
        $data_inizio = $_POST['inizio'];
        $data_fine = $_POST['fine'];

        $sq2 = "INSERT INTO personale_non_strutturato (IDpns, qualifica, data_inizio, data_fine)
          VALUES('$last_id', '$qualifica', '$data_inizio', '$data_fine') ";

        $arrPersonaleNonStrutturato = array($name,$cognome,$indirizzo,$telefono,$codice_fiscale,$titolo,$email,$categoria,$qualifica,$data_inizio,$data_fine);
        $jsonLogin = json_encode($arrPersonaleNonStrutturato);
        echo($jsonLogin);

        if ($conn->query($sq2) === TRUE) {
            //header("location: ../../index.php") ;
        } else {
            //echo "Error: " . $sq2 . "<br>" . $conn->error;
        }

    }elseif($categoria=='professore'){

        $dipartimento = $_POST['dipartimento'];
        $profilo = $_POST['profilo'];

        $sq2 = "INSERT INTO docente_strutturato (IDds, profilo, dipartimento)
          VALUES('$last_id', '$profilo', '$dipartimento') ";

        $arrProfessore = array($name,$cognome,$indirizzo,$telefono,$codice_fiscale,$titolo,$email,$categoria,$dipartimento,$profilo);
        $jsonLogin = json_encode($arrProfessore);
        echo($jsonLogin);

        if ($conn->query($sq2) === TRUE) {
            //header("location: ../../index.php");
        } else {
            //echo "Error: " . $sq2 . "<br>" . $conn->error;
        }

    }elseif($categoria=='studente'){

        $tipo_corso = $_POST['tipo_corso'];
        $corso = $_POST['corso'];
        $anno_corso = $_POST['anno_corso'];

        $sq2 = "INSERT INTO studente (IDs, Tipo_di_corso, Corso_di_studio, Anno_corso)
          VALUES('$last_id', '$tipo_corso', '$corso', '$anno_corso') ";

        $arrStudente = array($name,$cognome,$indirizzo,$telefono,$codice_fiscale,$titolo,$email,$categoria,$tipo_corso,$corso,$anno_corso);
        $jsonLogin = json_encode($arrStudente);
        echo($jsonLogin);

        if ($conn->query($sq2) === TRUE) {
            //header("location: ../../index.php");
        } else {
            //echo "Error: " . $sq2 . "<br>" . $conn->error;
        }

    }

    $conn->close();
?>
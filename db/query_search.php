<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "smartlab";

    $array_ricerca = array();

    if(isset($_GET['submit'])){

        $ricerca = $_GET['ricerca'];

    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $sql1=" SELECT * FROM eventi WHERE Titolo = '$ricerca'";

    $result = $conn->query($sql1);

    for ( $array_ricerca; $row = $result->fetch_assoc(); $array_ricerca[] = $row ); 

    $conn->close();
?>

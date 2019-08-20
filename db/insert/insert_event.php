<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "smartlab";
if(isset($_POST['submit'])) 
{

$titolo = $_POST['titolo'];
$descrizione = $_POST['descrizione'];
$data = $_POST['inizio'];
$ora = $_POST['orario'];
$durata = $_POST['durata'];
$posti = $_POST['posti'];
$privacy = $_POST['privacy'];
$uid = $_POST['UId'];
$tag = $_POST['tag'];

}
//Variabile ausiliaria
$id_evento = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO evento (titolo, descrizione, data, ora, durata, posti, privacy)
VALUES ('$titolo','$descrizione','$data','$ora', '$durata', '$posti', '$privacy')
    ";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    //modifica
    $id_evento = $last_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sq2 = "INSERT INTO moderatore (IDmoderatore, IDevento)
      VALUES('$uid', '$last_id') ";  

if ($conn->query($sq2) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $sq2 . "<br>" . $conn->error;
}

//aggiunta tag
$sq3 = "INSERT INTO area_tematica (titolo)
      VALUES('$tag') 
    ";  

if ($conn->query($sq3) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id; ;
} else {
    echo "Error: " . $sq3 . "<br>" . $conn->error;
}

$sq4 = "INSERT INTO tag_e (IDareatematica, IDEvento)
      VALUES('$last_id','$id_evento') ";  

if ($conn->query($sq4) === TRUE) {
    echo "New record created successfully." ;
    header("location: ../../events.php");
} else {
    echo "Error: " . $sq4 . "<br>" . $conn->error;
}


$conn->close();
?>
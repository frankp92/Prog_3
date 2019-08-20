<?php
include 's_c.php';
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "smartlab";


$id_utente = $_SESSION['UId'];
$id_evento = $eventi['IDevento']; 
echo $id_evento;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$sql = "SELECT IDpartecipante
        FROM partecipa
        WHERE IDpartecipante = '$id_utente' 
        AND IDevento = '$id_evento' 
        ";

$result = $conn->query($sql);
$controllo = "";
if ($result->num_rows > 0) 
{
    $controllo = 1;
} else {
    $controllo = 0;
}
$conn->close();

?>
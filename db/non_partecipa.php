<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "smartlab";
if(isset($_POST['submit'])) 
{

$id_utente = $_POST['UId'];
$id_evento = $_POST['id_evento']; 

}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "UPDATE evento SET posti = posti+1
        WHERE IDevento = '$id_evento' 
        ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sq2 = "DELETE FROM partecipa 
        WHERE IDpartecipante ='$id_utente' 
        ";

if ($conn->query($sq2) === TRUE) {
    echo "Delete successfully";
    header("location: ../events.php");
} else {
    echo "Error: " . $sq2 . "<br>" . $conn->error;
}

$conn->close();

?>
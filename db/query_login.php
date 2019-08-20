<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "smartlab";
if(isset($_POST['submit'])) 
{

$email = $_POST['email'];
$pass = $_POST['password']; 

}
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT IDutente, categoria 
        FROM utente
        WHERE (email = '$email' AND password ='$pass')
        ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data
    $row = $result->fetch_assoc(); 
    echo "IDutente: " . $row["IDutente"]. " - Categoria: " . $row["categoria"]. "<br>";
    //start session
    $_SESSION['UId'] = $row["IDutente"];
    $_SESSION['categoria'] = $row["categoria"];
    $_SESSION['logged_in'] = TRUE;
    header("location: ../index.php");
    
    
} else {
    echo "0 results";
}

$conn->close();
?>
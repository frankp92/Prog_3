<?php
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "smartlab";

    $id = $_GET['IDevento'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $sql = "DELETE FROM evento 
            WHERE IDEvento ='$id' 
    ";

    $result = $conn->query($sql);
    if($conn->query($sql) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }

    $sq2 = "DELETE FROM moderatore 
            WHERE IDEvento ='$id' 
    ";

    $result = $conn->query($sq2);
    if($conn->query($sq2) === TRUE){
        echo "Record deleted successfully";
        header("location: ../events.php");
    }else{
        echo "Error deleting record: " . $conn->error;
    }

?>
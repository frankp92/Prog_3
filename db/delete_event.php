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

    $sq2 = "DELETE FROM moderatore 
            WHERE IDevento ='$id' 
    ";

    $result = $conn->query($sq2);
    if($conn->query($sq2) === TRUE){
        echo "Record deleted successfully";
        header("location: ../events.php");
    }else{
        echo "Error deleting record: " . $conn->error;
    }
    
    $sq3 = "DELETE FROM tag_e 
            WHERE IDevento ='$id' 
    ";

    $result = $conn->query($sq3);
    if($conn->query($sq3) === TRUE){
        echo "Record deleted successfully";
        header("location: ../events.php");
    }else{
        echo "Error deleting record: " . $conn->error;
    }

    $sq4 = "DELETE FROM partecipa 
            WHERE IDevento ='$id' 
    ";

    $result = $conn->query($sq4);
    if($conn->query($sq4) === TRUE){
        echo "Record deleted successfully";
        header("location: ../events.php");
    }else{
        echo "Error deleting record: " . $conn->error;
    }
    
    $sql = "DELETE FROM evento 
            WHERE IDevento ='$id' 
    ";

    $result = $conn->query($sql);
    if($conn->query($sql) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }    
?>
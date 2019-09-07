<?php
    require('../db_conn.php');

    $id = $_GET['IDprogetto'];

    //rimuove coordinatore
    $sq2 = "DELETE FROM coordinatore 
            WHERE IDprogetto ='$id' 
    ";

    $result = $conn->query($sq2);
    if($conn->query($sq2) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }
    
    //rimuove tag
    $sq3 = "DELETE FROM tag_p 
            WHERE IDprogetto ='$id' 
    ";

    $result = $conn->query($sq3);
    if($conn->query($sq3) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }

    //rimuove dai tirocini
    $sq4 = "DELETE FROM tirocinio 
            WHERE IDprogetto ='$id' 
    ";

    $result = $conn->query($sq4);
    if($conn->query($sq4) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }

    //rimuove da tesi
    $sq5 = "DELETE FROM tesi 
    WHERE IDprogetto ='$id' 
    ";

    $result = $conn->query($sq5);
    if($conn->query($sq5) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }

    //rimuove da lavoro
    $sq5 = "DELETE FROM lavoro 
    WHERE IDprogetto ='$id' 
    ";

    $result = $conn->query($sq5);
    if($conn->query($sq5) === TRUE){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . $conn->error;
    }
    
    //rimuove progetto
    $sql = "DELETE FROM progetto 
            WHERE IDprogetto ='$id' 
    ";

    $result = $conn->query($sql);
    if($conn->query($sql) === TRUE){
        echo "Record deleted successfully";
        header("location: ../../project.php");
    }else{
        echo "Error deleting record: " . $conn->error;
    }    
?>
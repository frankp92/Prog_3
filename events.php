<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<?php
include 'html/head.php';
?>
         
</head>
<body>
<?php
include 'html/navbar.php';
if (isset($_SESSION['logged_in']) == TRUE) {
    include 'html/events_content.php';    
} else {
    header("location: error.php");
}

?>    

</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "smartlab";

$array_eventi = array (
    /*
    $key =>
    array( 
        "titolo" => "",
        "descrizione" => "",
        "data" => "",
        "ora" => "",
        "durata" => "",
        "posti" => "",
        "luogo" => "",
        "tag" => "",
        "privacy" => "" 
    )
    */
    );

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT M.IDmoderatore, E.IDevento, E.titolo, E.descrizione, E.data, E.ora, E.durata, E.posti, E.privacy, A.Titolo AS tag
        FROM moderatore AS M JOIN evento AS E
        on M.IDevento = E.IDevento
            JOIN tag_e AS T
        on E.IDevento = T.IDevento
            JOIN area_tematica AS A
        on T.IDareatematica = A.IDareatematica    
        ";

$result = $conn->query($sql);
/*echo $result->num_rows;*/  

for ( $array_eventi; $row = $result->fetch_assoc(); $array_eventi[] = $row ); 
print_r($array_eventi);
    





/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $key = $row['IDmoderatore'];
        $array_eventi[$key]['id_evento'] = $row['IDevento'];
        $array_eventi[$key]['titolo'] = $row['titolo'];
        $array_eventi[$key]['descrizione'] = $row['descrizione'];
        $array_eventi[$key]['data'] = $row['data'];
        $array_eventi[$key]['ora'] = $row['ora'];
        $array_eventi[$key]['durata'] = $row['durata'];
        $array_eventi[$key]['posti'] = $row['posti'];
        $array_eventi[$key]['privacy'] = $row['privacy'];
        $array_eventi[$key]['tag'] = $row['tag'];
        $array_eventi[$key]['IDmoderatore'] = $key;
        
        
    }
} else {
    echo "0 results";
}
*/
$conn->close();


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
    die("Connection failed : " . mysqli_connect_error());
}

$sql = "CREATE TABLE departemen (
    id_departemen INT(6) UNSIGNED PRIMARY KEY,
    nama_departemen VARCHAR(50) NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "New table created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
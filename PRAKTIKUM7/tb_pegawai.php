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

$sql = "CREATE TABLE pegawai (
    id_pegawai INT(6) UNSIGNED PRIMARY KEY,
    nama_pegawai VARCHAR(50) NOT NULL,
    id_departemen INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY (id_departemen) REFERENCES departemen(id_departemen)
);";

if(mysqli_query($conn, $sql)){
    echo "New table created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
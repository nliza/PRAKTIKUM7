<?php
$host = "localhost";
$username = "root";
$password = "";

// create connection
$conn = mysqli_connect($host, $username, $password);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connec_error());
}

// create database
$sql = "CREATE DATABASE db_pegawai";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>
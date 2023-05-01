<?php
    include("conn.php");
    
    if (isset($_POST['submit'])) {
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $id_departemen = $_POST['id_departemen'];
           
        
        $sql = "INSERT INTO pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', id_departemen='$id_departemen'";
        if (mysqli_query($conn, $sql)) {
            header("Location: pegawai.php");
        } else {
            echo "Tambah Data Gagal!!!";
        }
    }

    mysqli_close($conn);
?>
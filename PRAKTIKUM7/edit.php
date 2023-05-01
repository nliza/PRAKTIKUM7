<?php
    include("conn.php");
    
    if (isset($_POST['simpan'])) {
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $id_jabatan = $_POST['id_departemen'];

        $sql = "UPDATE pegawai SET nama_pegawai = '$nama_pegawai', id_departemen = '$id_departemen' WHERE id_pegawai='$id_pegawai'";
        if (mysqli_query($conn, $sql)) {
            header("Location: pegawai.php");
        } else {
            echo "Edit Data Gagal!!!";
        }
    }

    mysqli_close($conn);
?>
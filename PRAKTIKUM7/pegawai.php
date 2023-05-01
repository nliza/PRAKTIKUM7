<?php 
    require("conn.php");
    $data = mysqli_query($conn, "SELECT * FROM pegawai");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Pegawai</title>
    </head>
    <body>
        <div align="center">
            <h2>Daftar Pegawai</h2>
            <table border="1px">
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>ID Departemen</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($data)){ ?>
                <tr>
                    <td><?php echo $row['id_pegawai']?></td>
                    <td><?php echo $row['nama_pegawai']?></td>
                    <td><?php echo $row['id_departemen']?></td>
                    <td>
                        <button>
                            <a style="text-decoration: none; color: black;" href="edit_pegawai.php?id=<?php echo $row['id_pegawai']?>">Edit Data</a>
                        </button>
                        <button>
                            <a style="text-decoration: none; color: black;" href="hapus_pegawai.php?id=<?php echo $row['id_pegawai']?>">Hapus Data</a>
                        </button>
                    </td>
                </tr>
                <?php }  
                    mysqli_close($conn); // Menutup koneksi ke database
                ?>
            </table>
            <br>
            <button>
                <a href="tambah_pegawai.php">Tambah Data</a>
            </button>
            <button>
                <a href="departemen.php">Data Departemen</a>
            </button>
        </div>
    </body>
</html>
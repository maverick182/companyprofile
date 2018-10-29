<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "companyprofile";

    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 

    if($_POST['4']) {
        $id = $_POST['4'];
        // mengambil data berdasarkan id
        $sql = "SELECT * FROM formulir WHERE id = $id";
        $result = $koneksi->query($sql);
        foreach ($result as $baris) { ?>
            <table class="table">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $baris['nama']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $baris['email']; ?></td>
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td>:</td>
                    <td><?php echo $baris['notelp']; ?></td>
                </tr>
                <tr>
                    <td>Pesan</td>
                    <td>:</td>
                    <td><?php echo $baris['pesan']; ?></td>
                </tr>
            </table>
        <?php 

        }
    }
    $koneksi->close();
?>
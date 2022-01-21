<h3>Form Siswa</h3>

<form action="" method="POST">
    <table>
        <tr>
            <td width="110">Nama Siswa</td>
            <td><input type="text" name="nama_siswa"></td>

        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jenis_kelamin" value="Laki-laki">
                <label for="Laki-laki">Laki-laki</label>
                <input type="radio" name="jenis_kelamin" value="Perempuan">
                <label for="Perempuan">Perempuan</label>
            </td>

        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="40" rows="6"></textarea></td>

        </tr>
        <tr>
            <td>Hobi</td>
            <td><input type="text" name="hobi"></td>

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses">

        </tr>
    </table>

</form>

<?php
include "koneksi.php";

if (isset($_POST['proses'])) {

    // Attempt insert query execution
    $sql = "INSERT INTO data_siswa (nama_siswa, jenis_kelamin, alamat, hobi) VALUES ('$_POST[nama_siswa]','$_POST[jenis_kelamin]', '$_POST[alamat]', '$_POST[hobi]')";
    if (mysqli_query($koneksi, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Data siswa baru telah tersimpan")';
        echo '</script>';
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
    }

    // Close connection
    mysqli_close($koneksi);
}
?>
<?php

    require 'fungsi.php';

    $id = $_GET ["id"];

    $query= "SELECT * FROM mahasiswa WHERE id=$id";

    $mahasiswa = tampildata ($query)[0];///wadah yang isinya data id

    if(isset($_POST["kirim"]))
        {
    


            if(editdata($_POST, $id)> 0)///query ok
            {
                echo "<script>
                alert('Data Berhasil diedit');
                window.location.href = 'mahasiswa.php';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Data Gagal diedit');
                window.location.href = 'mahasiswa.php';
                </script>";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data | Teknologi Informasi</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <nav>
        <a href="index.php" class="active">Beranda</a>
        <a href="biodata.php">Biodata</a>
        <a href="tentang.php">Tentang</a>
        <a href="mahasiswa.php">Data Mahasiswa</a></td>
        <a href="tambahdata.php">Tambah Data</a></td>
    </nav>
    <form action = "" method="post">
        <table cellpadding ="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td ><input type="text"id ="Nama" name="Nama" value= "<?= $mahasiswa ["nama"] ?>" required/></td>
            </tr>
            <tr>
                <td><label for="nama">NIM</label></td>
                <td>:</td>
                <td ><input type="text"id="NIM"name="NIM" value= "<?= $mahasiswa ["nim"] ?>"required/></td>
            </tr>
            <tr>
                <td><label for="Jurusan">Jurusan</label></td>
                <td>:</td>
                <td ><input type="Jurusan"id="Jurusan"name="Jurusan" value= "<?= $mahasiswa ["jurusan"] ?>"/></td>
            </tr>
            <tr>
                <td><label for="Email">Email</label></td>
                <td>:</td>
                <td ><input type="Email"id="Email"name="Email" value= "<?= $mahasiswa ["email"] ?>"/></td>
            </tr>
            <tr>
                <td><label for="nama">No HP</label></td>
                <td>:</td>
                <td ><input type="number"id="No.HP"name="No.HP" value= "<?= $mahasiswa ["no_hp"] ?>"/></td>
            </tr>
            <tr>
                <td><label for="nama">Foto</label></td>
                <td>:</td>
                <td ><input type="file"id="Foto"name="Foto" value= "<?= $mahasiswa ["foto"] ?>"></td>
            </tr>
            <tr>
                <id colspan = "3">
                    <button type = "submit" name ="kirim"> Edit Data </button>
            </tr>
        </table>
    </form>
    <br>
    <hr>
    <form>
        <table>

            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td ><input type="text" id =" nama" name = " nama" required/></td>
            </tr>
            <tr>
                <td><label for="nama">NIM</label></td>
                <td>:</td>
                <td ><input type="text" id ="NIM" name = "NIM"/></td>
            </tr>
            <tr>
                <td><label for="nama">Password</label></td>
                <td>:</td>
                <td ><input type="password" id ="password" name = "password"/></td>
            </tr>
            <tr>
                <td><label for="nama">Email</label></td>
                <td>:</td>
                <td ><input type="email" id ="email" name = "email"/></td>
            </tr>
            <tr>
                <td><label for="nama"> No HP</label></td>
                <td>:</td>
                <td ><input type="tel" id ="No HP" name = "NO HP"/></td>
            </tr>
            <tr>
                <td><label for="nama">Website Pribadi</label></td>
                <td>:</td>
                <td ><input type="url" id ="Website Pribadi" name = "Website Pribadi"/></td>
            </tr>
            <tr>
                <td><label for="nama">Tanggal Lahir</label></td>
                <td>:</td>
                <td ><input type="date" id ="Tanggal Lahir" name = "Tanggal Lahir"/></td>
            </tr>
            <tr>
                <td><label for="nama">Warna Favorit</label></td>
                <td>:</td>
                <td ><input type="color" id ="Warna Favorit" name = "Warna Favorit"/></td>
            </tr>
            <tr>
                <td><label for="nama">Tingkat Kepuasan</label></td>
                <td>:</td>
                <td ><input type="range" id ="Tingkat Kepuasan" name = " Tingkat Kepuasan"/></td>
            </tr>
            <tr>
            <td><label>Jenis Kelamin</label></td>
            <td>:</td>
        <td>
            <input type="radio" id="laki" name="jenis kelamin" value="Laki-laki">
            <label for="laki">Laki-laki</label> <br>

            <input type="radio" id="perempuan" name="jenis kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br>
        </td>
        </tr>
            <td><label>Hobi</label></td>
        <td>:</td>
        <td>
        <input type="checkbox" name="hobi[]" value="membaca"> Membaca <br>
        <input type="checkbox" name="hobi[]" value="nonton film"> Nonton Film <br>
        <input type="checkbox" name="hobi[]" value="mendengarkan musik"> Mendengarkan Musik <br>
        </td>
        </tr>
        <tr>
            <td><label for="nama">Upload Foto</label></td>
            <td>:</td>
            <td><input type="file" id ="Upload Foto" name ="Upload Foto" /></td>
        </tr>
        <tr>
            <td><label for="nama">Alamat</label></td>
            <td>:</td>
            <td><input type="textarea" id ="Alamat" name ="Alamat" /></td>
        </tr>
        <tr>
        <td><label for="jurusan">Jurusan</label></td>
        <td>:</td>
        <td>
            <select name="jurusan" id="jurusan">
                <option value=""> Pilih Jurusan </option>
                <option value="Teknologi Informasi">Teknologi Informasi </option>
                <option value="Informatika"> Informatika </option>
                <option value="Arsitektur"> Arsitektur </option>
            </select>
        </td>
        </tr>
                <tr>
                    <id colspan = "3">
                        <button type = "submit" name ="submit"> Edit Data </button>
                </tr>

        </table>
    </form>    
</body>
</html>
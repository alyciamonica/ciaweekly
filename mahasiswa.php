<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa </title>
       <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <h1 align = "center">
        WEB TI UNIMUS 2026
    </h1>
    <table border = "1" align = "center" cellspacing = "0" cellpadding = "10px">
        <tr>
            <td><a href="index.php">Beranda </a></td>
            <td><a href="biodata.php">Biodata</a></td>
            <td><a href="tentang.php">Tentang</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            <td><a href="tambahdata.php">Tambah Data</a></td>
        </tr>
    </table>
    <h2>
        DATA MAHASISWA
    </h2>
    <a href ="tambahdata.php">
        <button> Tambah data </button>
    </a>
    <table border = "1" cellpadding ="5">
    <tr>
        <th> No </th>
        <th> Nama </th>
        <th> NIM </th>
        <th> Jurusan </th>
        <th> Email </th>
        <th> No.HP </th>
        <th> Foto </th>
        <th> Aksi </th>
    </tr>
    
    <tr>
        <td>1</td>
        <td>Alycia Monica Devi</td>
        <td>13242520037</td>
        <td  align= "center" > Teknologi Informasi </td>
        <td  align= "center" > alyciamonicadevi@gmail.com </td>
        <td  align= "center" > 081233634673</td>
        <td><img src="asset/image/cia.jpg" width="70px" /></td>

         <td>
            <a href ="editdata.php"><button>Edit</button></a>
            <a href ="deletedata.php"><button>Hapus</button></a>
        </td>
        
    <tr>
        <td>1</td>
        <td>Marcel Bima </td>
        <td>13242545672</td>
        <td  align= "center" > Teknik Sipil </td>
        <td  align= "center" > marcelbima@gmail.com </td>
        <td  align= "center" > 081234535671 </td>
        <td><img src="asset/image/cia.jpg" width="70px" /></td>

        <td>
            <a href ="editdata.php"><button>Edit</button></a>
            <a href ="deletedata.php"><button>Hapus</button></a>
        </td>


    </tr>
    </table>
    <hr>
    <table border = "1" cellpadding = "15">
    <tr>
        <td> 1,1 </td>
        <td> 1,2 </td>
        <td> 1,3 </td>
        <td> 1,4 </td>
    </tr>
    <tr>
        <td> 2,1</td>
        <td colspan= "2" rowspan = "2" align = "center" >?</td>
        <!-- <td> 2,3 </td> -->
        <td> 2,4 </td>
    </tr>
    <tr>
        <td> 3,1 </td>
        <!-- <td> 3,2 </td> -->
        <!-- <td> 3,3 </td> -->
        <td> 3,4 </td>
    </tr>
    <tr>
        <td> 4,1 </td>
        <td> 4,2 </td>
        <td> 4,3 </td>
        <td> 4,4 </td>
    </tr>
    </table>

</body>
</html>
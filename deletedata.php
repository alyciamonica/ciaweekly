<?php
    require 'fungsi.php';

    $id = $_GET["id"];


    if (deletedata($id)> 0)
        {
        echo "<script>
                alert('Data Berhasil dihapus');
                window.location.href = 'mahasiswa.php';
                </script>";
    
        }
    else 
        {
        echo "<script>
            alert('Data Gagal dihapus');
            window.location.href = 'mahasiswa.php';
            </script>";

        }


?>
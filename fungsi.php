<?php
    $koneksi = mysqli_connect("localhost", "root", "", "ciaweekly");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query ($koneksi, $query); /// di depan lemari sesuai perintah
        $rows = [];

        while ($row = mysqli_fetch_assoc ($result))
            {
                $rows [] = $row;
            }

            return $rows;
    }

    function tambahdata($data, $files)
    {
            global $koneksi;

            $Nama = htmlspecialchars ($data ["Nama"]);
            $NIM = htmlspecialchars ($data ["NIM"]);
            $Email = htmlspecialchars ($data ["Email"]);
            $Jurusan = htmlspecialchars ($data ["Jurusan"]);
            $No_HP = htmlspecialchars ($data ["No_HP"]);

            $namafoto = $files ["name"];
            $tmpfoto = $files ["tmp_name"];

            $path = "asset/image/$namafoto";

            if(move_uploaded_file($tmpfoto, $path)) {
        

            $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan, no_hp, foto)
                     VALUES ('$Nama', '$NIM', '$Email', '$Jurusan','$No_HP', '$namafoto')";
            
            mysqli_query ($koneksi, $query);
            }

            return mysqli_affected_rows ($koneksi);

    }


    function deletedata ($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query ($koneksi, $query);

        return mysqli_affected_rows ($koneksi);
    }

     function editdata($data, $id)
    {
            global $koneksi;

            $Nama = htmlspecialchars ($data ["Nama"]);
            $NIM = htmlspecialchars ($data ["NIM"]);
            $Email = htmlspecialchars ($data ["Email"]);
            $Jurusan = htmlspecialchars ($data ["Jurusan"]);
            $No_HP = htmlspecialchars ($data ["No_HP"]);
            $Foto = $data ["Foto"];

            $query = "UPDATE mahasiswa SET 
                        nama='$Nama',
                        nim='$NIM',
                        email='$Email',
                        jurusan='$Jurusan',
                        no_hp='$No_HP',
                        foto='$Foto'
                        WHERE id =$id

            ";
            mysqli_query ($koneksi, $query);

            return mysqli_affected_rows ($koneksi);

    }

?>
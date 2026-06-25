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

?>
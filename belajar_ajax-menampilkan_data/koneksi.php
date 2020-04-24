<?php
    $db_host = "localhost";
    $db_name = "belajarajax";
    $db_username = "root";
    $db_pw = "";
    $db_port = "3306";

    $db1 = new mysqli($db_host,$db_username,$db_pw,$db_name,$db_port);

    if ($db1->connect_error) {
        die('gagal terkoneksi:'.$db1->connect_error);
    }
?>
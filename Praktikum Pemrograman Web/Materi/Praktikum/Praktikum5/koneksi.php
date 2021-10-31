<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "php_crud";
    
    $conn = new mysqli($host,$user,$pass,$dbname);

    if($conn->connect_error){
        die('koneksi gagal : '.$conn->connect_error);
        }
?>
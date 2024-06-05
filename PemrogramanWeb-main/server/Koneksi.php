<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "db_penjualan_mobil";

    $conn = mysqli_connect($hostname, $username, $password, $database_name);

    if($conn->connect_error) {
        echo "Koneksi Database Rusak";
        die("error!");
    }
?>





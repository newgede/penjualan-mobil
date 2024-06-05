<?php
  include "server/koneksi.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = $_POST['name'];
      $umur = $_POST['umur'];
      $telepon = $_POST['telepon'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];
      $tanggal_pengiriman = $_POST['tanggal_pengiriman'];
      $tipe_mobil = $_POST['tipe_mobil'];

      $sql = "INSERT INTO tabel_book (name,umur,telepon,email,alamat,tanggal_pengiriman,tipe_mobil) values
      ('$name','$umur','$telepon','$email','$alamat','$tanggal_pengiriman','$tipe_mobil')";

      // Check if the connection was successful
      if ($conn->query($sql) === TRUE) {
          // If the connection failed, display an error message
          header("Location: book.php");
      } else{
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }
?>
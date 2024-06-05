<?php
    include "server/koneksi.php";

    $id = $_POST['id'];
    
    $sql = "DELETE FROM tabel_book WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header("Location: book.php");
    exit();

?>
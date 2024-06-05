<?php 
    include "server/koneksi.php";

    $sql = "SELECT * FROM tabel_book" ;
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>book</title>

    <!-- swiper css link --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>      

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a href="homepage.php" class="logo">Orders</a>
        <nav class="navbar">
            <a href="homepage.php">home</a>
            <a href="about.php">about</a>
            <a href="information.php">information</a>
            <a href="book.php">book</a>
            <a href="index.php">Logout</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

    <div class="heading" style= "background:url(images/img-2.jpg) no-repeat">
        <h1>order now</h1>
    </div>

    <!-- booking section starts -->
    <section class="booking">
        <h1 class="heading-title">order your cars</h1>

        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>age :</span>
                    <input type="text" placeholder="enter your age" name="umur">
                </div>
                <div class="inputBox">
                        <span>phone :</span>
                        <input type="text" placeholder="enter your number" name="telepon">
                </div>
                <div class="inputBox">
                        <span>email :</span>
                        <input type="text" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="enter your address" name="alamat">
                </div>  
                <div class="inputBox">
                        <span>delivery date:</span>
                        <input type="date" placeholder="enter your delivery date" name="tanggal_pengiriman">
                </div>
                <div class="inputBox">
                        <span>type of cars:</span>
                        <input type="text" placeholder="enter your type of cars" name="tipe_mobil">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
    <!-- booking section ends -->

    <?php
        if ($result->num_rows > 0) {
            echo "<table border='1' solid black>";
            echo "<tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Delivery date</th>
                        <th>Type of cars</th>
                        <th>Action</th>
                </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                            <td>". $row["name"]. "</td>
                            <td>". $row["umur"]. "</td>
                            <td>". $row["telepon"]. "</td>
                            <td>". $row["email"]. "</td>
                            <td>". $row["alamat"]. "</td>
                            <td>". $row["tanggal_pengiriman"]. "</td>
                            <td>". $row["tipe_mobil"]. "</td>
                            <td>
                                <form action='delete_data.php' method='POST'>
                                    <input type='hidden' name='id' value='". $row["id"]. "'>
                                    <button type='submit'>Delete</button>
                                </form>
                            </td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<table border='1'>";
            echo "<tr>
                        <th colspan='8'>No data available</th>
                </tr>";
            echo "</table>";
        }
        $conn->close();
    ?>
</body>
</html>


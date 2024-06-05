<?php 
    @include 'config.php';

    session_start();

    if(!isset($_SESSION['admin_name'])){
        header('location:login_form.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>admin page</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">    

    <a href="index.php">Kembali ke Halaman</a>
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hello, <span>admin</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['admin_name']?></span></h1>
            <p>Here is an Admin Page</p>
            <a href="index.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
</body>
</html>

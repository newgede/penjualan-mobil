<?php
    include "server/koneksi.php";

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        try {

            $sql = "INSERT INTO  tabel_user (name, email, password) 
                    VALUES ('$name', '$email', '$password')";

                if ($conn->query($sql)){
                    echo 
                        '<script>
                            alert("Data Berhasil Diinput, Silahkan Login");    
                         </script>';

                    header("location: index.php");

                } else {
                    echo 
                        '<script>
                            alert("Data Tidak Berhasil Diinput");
                         </script'; 
                } 

        } catch(mysqli_sql_exception $e){
            echo 
                '<script>
                    alert("Terjadi kesalahan: '.$e->getMessage().'");
                 </script'; 
        }

    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>register form</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">      

    <a href="index.php">Kembali ke Halaman</a>

</head>
<body>
    <div class="form-container">
        <form action="register_form.php" method="post">
        <h3>Register Now</h3>
            <input type="text" name="name" required placeholder="Name">
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="index.php">Login Now</a></p>
        </form>
    </div>
</body>
</html>

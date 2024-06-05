<?php 
    include "server/koneksi.php";

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tabel_user WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            
            header("location: homepage.php");
            exit;
        }else {
            echo '<script>
                    alert("Akun Tidak Terdaftar");
                  </script>';
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
    <title>login form</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">    

</head>
<body>

    <div class="form-container">
        <form action="index.php" method="post">
        <h3>Login Now</h3>
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit" class="form-btn">
            <p>Do not have an account? <a href="register_form.php">Register Now</a></p>
        </form>
    </div>

</body>
</html>

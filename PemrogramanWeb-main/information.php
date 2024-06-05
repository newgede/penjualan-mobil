<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF_8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>about</title>

    <!-- swiper css link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">    
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>   
</head>

<body>    
<!-- header section start -->
    <section class="header">
        <a href="homepage.php" class="logo">Cars</a>
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

    <div class="heading" style= "background:url(images/img-3.jpg) no repeat">
        <h1>information</h1>
    </div>

    <!-- information section starts -->
    <section class="information">
        <h1 class="heading-title">top classic and modern cars</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/wagoneer.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Wagoneer</h3>
                    <p>Ride me to the forest and chill there with me! </p>
                    <a href="book.php" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/ferrari.webp" alt="">
                </div>
                <div class="content">
                    <h3>Ferrari</h3>
                    <p>Up your lifestyle with the supercar like me.</p>
                    <a href="book.php" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/toyota.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Toyota</h3>
                    <p>I will love you more than I can say</p>
                    <a href="book.php" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/honda.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Honda</h3>
                    <p>Let"s ride to the entire world with Honda</p>
                    <a href="book.php" class="btn">order now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><spam class="btn">load more</span></div>
    </section>
    <!-- information section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>
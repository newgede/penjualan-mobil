<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    <title>John's Store</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">    

</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a href="homepage.php" class="logo">cars.</a>
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

    <!-- home section starts -->
    <section class="indeks">
        <div class="swiper index-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/hoho-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, See, Have It</span>
                        <h3>Travel Around The Store</h3>
                        <a href="information.php" class="btn">Explore More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/hoho-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, See, Have It</span>
                        <h3>Travel Around The Store</h3>
                        <a href="information.php" class="btn">Explore More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/hoho-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, See, Have It</span>
                        <h3>Travel Around The Store</h3>
                        <a href="information.php" class="btn">Explore More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title"> our services </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>Maintenance Cars</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>Available All Types of Car</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>Friendly Employees</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>Waiting Room</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>Snacks For You and Your Family</h3>
            </div>
        </div>
    </section>
    <!-- services section ends -->

    <!-- index about section starts -->
    <section class="index-about">
        <div class="image">
            <img src="images/john.jpeg" alt="">
        </div>
        <div class="content">
            <h3>About John's Store</h3>
            <p>John Martha is the owner of John's Store. He was born in 1989 in England. When he was a child, he loved to see cars around him with his dad.
                His father worked as a mechanic in the workshop and always took John to his jobs. This made John interested in cars.
            </p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- indexabout section ends -->

    <!-- index information section starts -->
    <section class="index-information">
        <h1 class="heading-title"> our store</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/about.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>John's Store</h3>
                    <p>Simple store but the cars are fancy and classic.</p>
                    <a href="book.php" class="btn">order now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="information.php" class="btn">load more</a> </div>
    </section>
    <!-- index information section ends -->

    <!-- index offer section starts -->
    <section class="index-offer">
        <div class="content">
            <h3>UP TO 50%</h3>
            <p>First order will get a discount. The store also has so many promotions and discounts, you must come here and bring your family.</p>
            <a href="book.php" class="btn">order now</a>
        </div>
    </section>
    <!-- index offer section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>

    <script>
    // Swiper initialization example
    var swiper = new Swiper('.index-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    });
    </script>
</body>
</html>
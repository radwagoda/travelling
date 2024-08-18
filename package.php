<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="index.php" class="logo"><img src="images/logo.jpg"></a>

   <nav class="navbar">
      <a href="index.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
      <a href="user_profile.php">profile</a>
      <a href="logout.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/14.jpg" alt="">
         </div>
         <div class="content">
            <h3>saudi Arabia</h3>
            <p>Enjoy unforgettable fun with our top-selling Dubai packages!</p>
            <p> Cairo To Jeddah</p>
            <h2>18.763 EGP</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/13.jpg" alt="Delhi Tour Packages">
         </div>
         <div class="content">
            <h3>France</h3>
            <p>Experience unforgettable fun with our top-selling Delhi packages!</p>
            <p> Cairo To Paris</p>
            <h2> 26.307 EGP </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/10.jpg" alt="Japan Tour Packages">
         </div>
         <div class="content">
            <h3>Italy</h3>
            <p>Discover Japan with our top-selling packages!</p>
            <p>Cairo To Milano</p>
            <h2> 15.205 EGP </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Türkiye</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Australia top selling packages!</p>
            <p>Cairo To Istanbul</p>
            <h2>15.747 EGP </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/12.webp" alt="">
         </div>
         <div class="content">
            <h3>German</h3>
            <p>Enjoy the Emirates with unforgettable fun with our china top selling packages!</p>
            <p>Cairo To Berlin</p>
            <h2> 31.066 EGP</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/22.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai</h3>
            <p>Enjoy the Emirates with unforgettable fun with our singapur top selling packages!</p>
            <p>Cairo To Abu Dhabi</p>
            <h2>37.070 EGP </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/21.webp" alt="">
         </div>
         <div class="content">
            <h3>Morocco</h3>
            <p>Enjoy the Emirates with unforgettable fun with our spain top selling packages!</p>
            <p>Cairo To Marrakech</p>
            <h2> 32.562 EGP </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/23.jpg" alt="">
         </div>
         <div class="content">
            <h3>Holanda</h3>
            <p>Enjoy the Emirates with unforgettable fun with our canada top selling packages!</p>
            <p>Cairo To Amsterdam</p>
            <h2>37.451 EGP </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/24.jpg" alt="">
         </div>
         <div class="content">
            <h3>Malaysia</h3>
            <p>Enjoy the Emirates with unforgettable fun with our barli top selling packages!</p>
            <p>Cairo To Kuala Lumpur</p>
            <h2>48.101 EGP</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/25.jpg" alt="">
         </div>
         <div class="content">
            <h3>America</h3>
            <p>Enjoy the Emirates with unforgettable fun with our nepal top selling packages!</p>
            <p>Cairo To New York</p>
            <h2>73.342 EGP</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/26.webp" alt="">
         </div>
         <div class="content">
            <h3>England</h3>
            <p>Enjoy the Emirates with unforgettable fun with our bangladesh top selling packages!</p>
            <p>Cairo To London</p>
            <h2> 67.380 EGP </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/27.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Japan</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <p>Cairo To Tokyo</p>
            <h2>25.489 EGP</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> sagorcse38@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> dhaka, Bangladesh - 1215  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>TEAMSKOOKY</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
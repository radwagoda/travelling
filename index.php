<?php
session_start(); // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']);
?>
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
   <a href="index.php" class="logo"><img src="images/logo.jpg" alt="Logo"></a>
   <nav class="navbar">
      <a href="index.php" class="<?php echo !$isLoggedIn ? 'active' : ''; ?>">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
     
      <a href="book.php">book</a>
      <?php if ($isLoggedIn): ?>
         <a href="user_profile.php">profile</a>
         <a href="logout.php">logout</a>
      <?php else: ?>
         <a href="login_pro.php">login</a>
         <a href="signup_pro.php"> sign up</a>
      <?php endif; ?>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>tour around the universe</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
          <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>express the new destination</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>make your tour effective</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div> 
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="Tour Guide">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="Camping">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="Adventure">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="Trekking">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="Off Road">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="Camp Fire">
         <h3>camp fire</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="About Us">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Amazing Tours is the best tour operator and travel agent in Bangladesh. We offer tour packages and hotel bookings. Find international and domestic tour packages at low prices, including the best travel packages, honeymoon packages, and more.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
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
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->
<!-- partners section starts  -->
<section class="partner">
   <h1 class="heading-title"> our partners </h1>
   <div class="box-container">
      <div class="partner">
         <img src="images/sp1.png" alt="Partner 1">
      </div>
      <div class="partner">
         <img src="images/sp2.png" alt="Partner 2">
      </div>
      <div class="partner">
         <img src="images/sp3.png" alt="Partner 3">
      </div>
      <div class="partner">
         <img src="images/sp4.png" alt="Partner 4">
      </div>
      <div class="partner">
         <img src="images/sp5.png" alt="Partner 5">
      </div>
   </div>
</section>
<!-- partners section ends -->
<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
         <img src="images/offer.jpg" alt="Special Offer">
      </div>
   </div>
   <div class="content">
      <h3>upto 40% off</h3>
      <p>Bali Dynasty Resort offers a range of room types suitable for families and couples. Enjoy the kids' club and spa, or relax at the Beach Club. Book now for a memorable stay in Kuta.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
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
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> sagorcse38@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> dhaka, Bangladesh - 1215 </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>TEAMSHOOKY</span> | all rights reserved! </div>
   <!-- <div class="credit"> designed by <span>mr. bingo mingo</span> | all rights reserved! </div> -->
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>

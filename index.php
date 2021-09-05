<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Pabbati Vinod">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    
 <!-- custom css file link  -->
 <link rel="stylesheet" href="style.css">

</head>

<body>


<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-store"></i>B-Quiet Supermart <br> <p style="color:maroon;font-size:16px;"> Grab quietly, everything you want.. </p></a>
       



            <form action="" class="search-box-container">
                 <input type="search" id="search-box" placeholder="search here...">
                 <label for="search-box" class="fas fa-search"></label>
            </form> 
    </div>
</header>



<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Home</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="whatsapp.php">WhatsApp</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart <i class="fas fa-shopping-cart"> </i> <span id="cart-item" class="badge badge-danger"></span></a>
           </li>
         </ul>
  
  </div>
</nav>




<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images/home-photo2.jpg" alt="">
    </div>

    <div class="content">
        <span>fresh and vetted</span>
        <h3>your daily need products</h3>
<p style="color:black;font-size:46px;"> <b>Kirana Dukhanam </b></p>
        <a href="#" class="btn">get started</a>
    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="images/what-1.jpg" alt="">
        <div class="content">
            <h3>just a WhatsApp message</h3>
            <p>+91 7405812356</p>
            <a href="whatsapp.php" class="btn">check out</a>
        </div>
    </div>

    <div class="banner">
        <img src="images/what-2.jpg" alt="">
        <div class="content">
            <h3>Order online-Pay offline</h3>
            <p>First pay 30%</p>
            <a href="products.php" class="btn">check out</a>
        </div>
    </div>

</section><br><br><br><br><br><br>

<!-- banner section ends -->



         










<!-- newsletter section starts  -->


<section class="newsletter">

    <h3>subscribe us for latest updates</h3>

    <form action="">
        <input class="box" type="email" placeholder="enter your email">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-store"></i>B-Quiet Supermart<br> <p style="color:maroon;font-size:16px;"> Grab quietly, everything you want.. </p></a>
            
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>
        
        <div class="box">
            <h3>Delivery locations</h3>
            <div class="links">
                <a href="#">Nandyal</a>
                <a href="#">Kadamalakalva</a>
                <a href="#">Eernapadu</a>
                <a href="#">Bandiatmakur</a>
                <a href="#">B. Kodur</a>
            </div>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <a href="index.php">Home</a>
                <a href="products.php">Products</a>
                <a href="whatsapp.php">WhatsApp</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </div>

        <div class="box">
            <h3>download app</h3>
            <div class="links">
                <a href="#">google play</a>
                <a href="#">window xp</a>
                <a href="#">app store</a>
            </div>
        </div>

    </div>

    <h1 class="credit"> created by <span> @Pabbati Vinod</span> | all rights reserved! </h1>

</section>

<!-- footer section ends -->






  

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




 
  
</body>
</html>

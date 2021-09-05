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
    <title>WhatsApp</title>

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
<!-- header section ends  -->







<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Home</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links start-->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="whatsapp.php">WhatsApp</a>
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
<!-- Navbar links ends -->




<!-- WhatsApp statement section starts  -->

<section class="whatsapp" id="whatsapp">

<br><br><br><br><h style="color:green;font-size:30px;"> <b>సరసమైన ధరలకు నాణ్యమైన సరుకులను మీకు అందించడం మా కర్తవ్యం.</b></h><br><br><br><br><br><br><br><br>
<ul>
   <li><p style="color:maroon;font-size:24px;"><b>ఇంటికి కావలసిన సరుకులను, మీ ఇంటివద్దకు వేగంగా డెలివరీ పొందడం చాలా సులభం.</b> </p>
  </li><br><br><br>
   <li><p style="color:maroon;font-size:24px;"> <b>Rs. 500 రూపాయలకు పైగా బిల్  చేసిన వారికీ ఉచితముగా ఇంటి వద్దకే డెలివరీ చేయబడును. </b></p> 
   </li><br><br><br>
   <li><p style="color:maroon;font-size:24px;"><b>మీరు చేసిన మొత్తం బిల్  లో 30% (శాతం ), సెక్యూరిటీ డిపాసిటీగా PhonePay /GooglePay  చేయగలరు. మిగిలిన 70% (శాతం) బిల్ ని ఇంటివద్ద, మీ సరుకులను పొందిన తరువాత చెల్లించగలరు.</b></p>
   </li><br><br><br>
</ul><br><br><br><br>

<p style="color:maroon;font-size:24px;"><b style="color:green;font-size:24px;">విధానం 1:</b> <b>మొదటి పద్దతిలో మీకు కావలసిన సరుకులను ఒక కాగితంలో వ్రాసి, ఆ జాబితాని మీ Phone తో screen shot తీసి, ఇంటి చిరునామా, మరియు PhonePay /GooglePay పేమెంట్ రెసిప్టు ని మా WhatsApp నెంబర్ కి పంపగలరు. </b></p>
<br><br><br>
<p style="color:green;font-size:40px;"><b style="color:black;font-size:40px;">WhatsApp No: </b> <b>+91 7405812356</b></p><br><br><br><br><br><br><br><br><br>
<p style="color:maroon;font-size:24px;"><b style="color:green;font-size:24px;">విధానం 2:</b> <b>రెండవ పద్దతిలో మీ పేరు, ఫోన్ నెంబర్, ఇంటి చిరునామా, కావలసిన సరకుల జాబితా మరియు PhonePay /GooglePay పేమెంట్ రెసిప్టు ని క్రింద ఇచ్చిన లిస్ట్ లో అప్లోడ్ చేయగలరు. </b></p>
</section>
<!-- WhatsApp statement section ends  -->


<!-- file upload section starts  -->

<section class="contact" id="contact">
    <h1 class="heading"> <span>Upload </span> Images </h1>

 <form method="POST" action="https://formsubmit.co/bquietsupermart@gmail.com" enctype="multipart/form-data">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_subject" value="New submission!">
    <input type="hidden" name="_next" value="https://vinodpabbati.github.io/bquietsupermart//thankyou.html">
    <div class="inputBox">    
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" name="number" placeholder="Phone number" required>
    </div>
    <textarea name="message" placeholder="Address"></textarea>
    <div class="inputBox">  
      <h2 style="color:maroon;font-size:30px;">Items List ( సరుకుల జాబితా ) </h2>
      <input type="file" name="attachment1" accept="image/png, image/jpeg">
    </div>
    <div class="inputBox"> 
      <h2 style="color:maroon;font-size:30px;">Payment receipt ( చెల్లింపు రశీదు ) </h2>
      <input type="file" name="attachment2" accept="image/png, image/jpeg">
    </div> 
    <button type="submit">Send List</button>
 </form>

</section>

<!-- file upload section ends  -->




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

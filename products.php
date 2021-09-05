<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Pabbati Vinod">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B-Quiet Supermart</title>

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

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="products.php">Products</a>
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




<div class="container">
     <div id="message"></div> 
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare("SELECT * FROM product");
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
       <div class="col-lg-3">
         <div class="card-deck">
           <div class="card p-2 border-secondary mb-2">
             <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
                 <div class="card-body p-1">
                   <h4 class="card-title text-center text-info" ><?= $row['product_name'] ?> </h4>
                   <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5> 
                   <h6 class="card-weight text-center"><?= $row['product_weight'] ?></h6>
                 </div>
                      <div class="card-footer p-1">
                            <form action="" class="form-submit">
                                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                <input type="hidden" class="pweight" value="<?= $row['product_weight'] ?>">
                                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                 <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                             </form>
                      </div>
           </div>
         </div> 
       </div>
       <?php endwhile; ?>
    </div>
  </div>






<!-- footer section starts  -->

</br></br></br></br></br></br><section class="footer">

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



<script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pweight = $form.find(".pweight").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pweight: pweight,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {cartItem: "cart_item"},
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });

  </script>
  
</body>
</html>

<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = array();

	$sql = "SELECT CONCAT(product_name, '(',qty,')',product_weight) AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
    $allItems = implode(', ', $items);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Pabbati Vinod">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

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
              <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"> </i> <span id="cart-item" class="badge badge-danger"></span></a>
           </li>
         </ul>
  
  </div>
</nav>




    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-6 px-4 pb-4" id="order">
              <h4 class="text-center text-info p-2">Complete your order!</h4>
               <div class="jumbotron p-3 mb-2 text-center">
                  <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
                  <h6 class="lead"><b>Delivery Charge : </b>Free (If total price is more than 500/-)</h6>
                  <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
               </div>
                   <form action="" method="post" id="placeOrder">
                        <input type="hidden" name="products" value="<?= $allItems; ?>">
                        <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
                       <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                       </div>
                       <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="Enter E-Mail  (optional)" requiredl>
                       </div>
                       <div class="form-group">
                          <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
                       </div>
                       <div class="form-group">
                           <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Your Delivery Address"></textarea>
                       </div>
                           <h6 class="text-center lead">Select Payment Mode</h6>
                       <div class="form-group">
                           <select name="pmode" class="form-control">
                              <option value="" selected disabled>-Select Payment Mode-</option>
                              <option value="cod">Cash On Delivery</option>
                              <option value="netbanking">Net Banking</option>
                              <option value="cards">Debit/Credit Card</option>
                           </select>
                       </div>
                       <div class="form-group">
                            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
                     </div>
                   </form>
           </div>
       </div>
    </div>













<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script type="text/javascript">
  $(document).ready(function() {
     
    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
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

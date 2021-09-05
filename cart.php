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
              <a class="nav-link active" href="cart.php"><i class="fas fa-shopping-cart"> </i> <span id="cart-item" class="badge badge-danger"></span></a>
           </li>
         </ul>
  
  </div>
</nav>




<div class="container">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
         <div style="display:<?php if (isset($_SESSION['showAlert'])) {
           echo $_SESSION['showAlert'];
           } else {
           echo 'none';
           } unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong><?php if (isset($_SESSION['message'])) {
           echo $_SESSION['message'];
          } unset($_SESSION['showAlert']); ?></strong>
         </div>
       <div class="table-responsive mt-2">
           <table class="table table-bordered table-striped text-center">
              <thead>
               <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Weight</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
             </thead>
                  <tbody>
                   <?php
                      require 'config.php';
                      $stmt = $conn->prepare('SELECT * FROM cart');
                      $stmt->execute();
                      $result = $stmt->get_result();
                      $grand_total = 0;
                      while ($row = $result->fetch_assoc()):
                    ?>
                       <tr>
                         <td><?= $row['id'] ?></td>
                         <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                         <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                         <td><?= $row['product_name'] ?></td>
                         <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?></td>
                         <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                         <td><?= $row['product_weight'] ?></td>
                         <td><input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;"></td>
                         <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                         <td><a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a></td>
                       </tr>
                       <?php $grand_total += $row['total_price']; ?>
                       <?php endwhile; ?>
                        <tr>
                          <td colspan="3">
                            <a href="products.php" class="btn btn-success">&nbsp;&nbsp;Continue Shopping</a>
                         </td>
                         <td colspan="3"><b>Grand Total</b></td>
                         <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                         <td><a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>">&nbsp;&nbsp;Checkout</a></td>
                       </tr>
                  </tbody>
           </table>
         </div>
        </div>
     </div>
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
     
     // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
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

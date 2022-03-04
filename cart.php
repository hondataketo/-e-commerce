<!-- W3hubs.com - Download Free Responsive Website Layout Templates designed on HTML5 
  CSS3,Bootstrap,Tailwind CSS,Shoelace Style which are 100% Mobile friendly. w3Hubs all Layouts are responsive 
  cross browser supported, best quality world class designs. -->


<?php
include 'classes/cart.php';

$cartObj = new Cart;

if(isset($_GET['id'])){
  $cartObj->delete($_GET['id']);

  exit;
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>CART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="w3hubs.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style type="text/css">
      body{
      background-color: #3867d6;
      font-family: "Nunito Sans";

      }
      img{
      height: 100%;
      transition: all 0.30s ease-in-out;
      }
      .card{
        border:0px;
      }
      .container{
      background-color: #4b7bec;
      border-radius: 4px;
      }
      img:hover{
      transform: translateY(0px) scale(0.8);
      }
      .btn-block{
      background-color: #3867d6;
      color: #fff;
      }
      .btn-block:hover{
      color: #fff;
      background-color: #4b7bec;
      }
      @media(max-width: 992px){
        .mt-md-20{
          margin-top: 20px;
        }
      }
      @media(max-width: 768px){
        .mt-sm-20{
          margin-top: 20px;
        }
      }
      @media(max-width: 576px){
        .container{
          max-width: 90%;
        }
      }
    </style>
  </head>
  <body>
    <div class="container mt-5 mb-4">
      <div class="row pt-3 pb-5">
        <div class="col-md-12 pb-3 text-center text-light">
          <div class="text-right">
            <a href="homepage.php" class="btn btn-warning">
              Go to Homepage
            </a>
          </div>
          <h1>
            Cart Contents
            <div class="text-center">
              <a href="purchase-history.php" class="btn btn-danger text-light">Purchase-history</a>
            </div>
          </h1>
          
        </div>
          <?php  foreach($cartObj->show_cart($_SESSION['id']) as $row):?>
            <div class="col-lg-3 col-md-6 mt-sm-20 my-2">
              <div class="card" >
                <img src="assets/img/<?php echo $row['item_image'] ?>" class="card-img-top img-fluid" alt="<?php echo $row['item_image'] ?>">
                <div class="card-body">
                  <h5 class="card-title text-center">
                    <?php echo $row['item_name'] ?>
                  </h5>
                  <div class="row pb-4 pt-2">
                    <div class="col">
                      <h5 class="text-center">
                        <?php echo $row['item_price'] ?>
                      </h5>
                    </div> 
                  </div>
                  <div class="card-footer text-center">
                    <form action="actions/finalize-action.php" method="post" class="">
                      <a href="shop-single.php?id=<?php echo $row['item_id'] ?>" class="btn btn-primary mt-2">
                        Check Item Details
                      </a>
                      <a href="cart.php?id=<?php echo $row['cart_id'] ?>" class="btn btn-danger mt-2">
                        Delete Item
                      </a>
                          
                      <input type="hidden" name="cart_id" value="<?php echo $row['cart_id'] ?>">
                      <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">
                      <button type="submit" class="btn btn-success mt-2">
                        BUY
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
      </div>
    </div>
  </body>
</html>
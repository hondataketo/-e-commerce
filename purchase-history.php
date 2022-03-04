<?php
include 'classes/Cart.php';

$cartObj = new Cart;



if(isset($_GET['id'])){
  
  exit;
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>PURCHASE HISTORY</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Assistant');

        body {
            background: #eee;
            font-family: Assistant, sans-serif
        }

        .cell-1 {
            border-collapse: separate;
            border-spacing: 0 4em;
            background: #ffffff;
            border-bottom: 5px solid transparent;
            background-clip: padding-box;
            cursor: pointer
        }

        thead {
            background: #dddcdc
        }

        .table-elipse {
            cursor: pointer
        }

        #demo {
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s 0.1s ease-in-out;
            transition: all 0.3s ease-in-out
        }

        .row-child {
            background-color: #000;
            color: #fff
        }
        </style>

        <!-- Bootstrap CSS v5.0.2 -->
        
    </head>
    <body class="bg-primary">
            
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="rounded">
                        <div class="table-responsive table-borderless">
                        <div class="text-right">
                            <a href="cart.php" class="btn btn-success">Go to Cart</a>
                        </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Cart ID</th>
                                        <th>User name</th>
                                        <th>status</th>
                                        <th>Price</th>
                                        <th>Item name</th>
                                    </tr>
                                </thead>
                                <?php $x = 0; ?>
                                <tbody class="table-body">
                                <?php  foreach($cartObj->status($_SESSION['id']) as $row):?>
                                    <?php $x = $x + 1; ?>
                                    <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                        <td class="text-center"><?php echo $x; ?></td>
                                        <td><?php echo $row['cart_id'] ?></td>
                                        <td><?php echo $_SESSION['username'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td><?php echo $row['item_price'] ?></td>
                                        <td><?php echo $row['item_name'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </body>
</html>
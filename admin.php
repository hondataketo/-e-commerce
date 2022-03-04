<?php
include 'classes/Item.php';

$item_obj = new Item;
$items = $item_obj->show_items();

if(isset($_GET['id'])){
    $item_obj->delete($_GET['id']);
    
    exit;
}

if(isset($_GET['cart_id'])){
    $item_obj->delete_status($_GET['cart_id']);
    
    exit;
}

?>

<!doctype html>
<html lang="en">
    <head>
        <title>ADMIN</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/admin.css">
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
        <body class="bg-success">
            <div class="container p-5">
                <div class="card w-50 mx-auto">
                    <div class="card-header text-center">
                        Add items
                    </div>
                    <div class="card-body">
                        <form action="actions/save-item-action.php" method="post" enctype="multipart/form-data">
                            <input type="text" name="item-name" class="form-control mt-3">
                            <div class="form-text">
                                ITEM NAME
                            </div>

                            <input type="text" name="item-desc" class="form-control mt-3">
                            <div class="form-text">
                                ITEM DESCRIPTION
                            </div>

                            <input type="text" name="item-price" class="form-control mt-3">
                            <div class="form-text">
                                ITEM PRICE
                            </div>

                            <input type="file" name="item-image" class="form-control mt-3" accept="image/*">
                            <div class="form-text">
                                ITEM IMAGE
                            </div>

                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-secondary">
                                    Save item
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container p-5">
                <?php $x = 0; ?>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <?php foreach ($items as $row) : ?>
                            <?php $x = $x + 1; ?>

                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#id_<?php echo $row['item_id'] ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="font-monospace float-start d-flex align-items-center">Item #<?php echo $x; ?></div>
                                </button>
                                
                            </h2>
                            
                            <div id="id_<?php echo $row['item_id'] ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center">
                                            <p class="lead float-start"><?php echo $row['item_name'] ?></p>
                                        </div>
                                        <div class="col-6">
                                            <div class="row p-0 justify-content-end">
                                                <div class="col-2 d-grid">
                                                    <a href="" class="btn btn-secondary ">Price<span class="badge bg-success">
                                                        <?php echo $row['item_price'] ?></span>
                                                    </a>

                                                </div>
                                                <div class="col-2 d-grid">
                                                    <a href="admin.php?id=<?php echo $row['item_id'] ?>" class="btn btn-danger">
                                                        Delete item <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="col-2 d-grid ">
                                                    <a href="update.php?id=<?php echo $row['item_id'] ?>" class="btn btn-warning">
                                                        Update item <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                   
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

            <div class="container mt-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="rounded">
                            <div class="table-responsive table-borderless">
                                <table class="table">
                                    <thead>
                                       <h1 class="text-center text-light">Purchase History</h1>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Cart ID</th>
                                            <th class="text-center">User name</th>
                                            <th class="text-center">status</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Item name</th>
                                            <th class="text-center">Delete</th>
                                            <th class="text-center">Update</th>
                                        </tr>
                                    </thead>
                                    <?php $x = 0; ?>
                                    <tbody class="table-body">
                                    <?php  foreach($item_obj->paid() as $row):?>
                                        <?php $x = $x + 1; ?>
                                        <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                            <td class="text-center"><?php echo $x; ?></td>
                                            <td class="text-center"><?php echo $row['cart_id'] ?></td>
                                            <td class="text-center"><?php echo $row['username'] ?></td>
                                            <td class="text-center"><?php echo $row['status'] ?></td>
                                            <td class="text-center"><?php echo $row['item_price'] ?></td>
                                            <td class="text-center"><?php echo $row['item_name'] ?></td>
                                            <td class="text-center">
                                                <a href="admin.php?cart_id=<?php echo $row['cart_id']?>" class="btn btn-danger">
                                                    Delete<i class="" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="update-status.php?cart_id=<?php echo $row['cart_id'] ?>" class="btn btn-warning">
                                                    Update<i class="" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="container mt-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="rounded">
                            <div class="table-responsive table-borderless">
                                <table class="table">
                                    <thead>
                                    <h1 class="text-center text-light">Cart</h1>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Cart ID</th>
                                            <th class="text-center">User name</th>
                                            <th class="text-center">status</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Item name</th>
                                            <th class="text-center">Delete</th>
                                            <th class="text-center">Update</th>
                                        </tr>
                                    </thead>
                                    <?php $x = 0; ?>
                                    <tbody class="table-body">
                                    <?php  foreach($item_obj->cart() as $row):?>
                                        <?php $x = $x + 1; ?>
                                        <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                            <td class="text-center"><?php echo $x; ?></td>
                                            <td class="text-center"><?php echo $row['cart_id'] ?></td>
                                            <td class="text-center"><?php echo $row['username'] ?></td>
                                            <td class="text-center"><?php echo $row['status'] ?></td>
                                            <td class="text-center"><?php echo $row['item_price'] ?></td>
                                            <td class="text-center"><?php echo $row['item_name'] ?></td>
                                            <td class="text-center">
                                                <a href="admin.php?cart_id=<?php echo $row['cart_id']?>" class="btn btn-danger">
                                                    Delete<i class="" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="update-status.php?cart_id=<?php echo $row['cart_id'] ?>" class="btn btn-warning">
                                                    Update<i class="" aria-hidden="true"></i>
                                                </a>
                                            </td>
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
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        </body>
</html>




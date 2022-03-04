<?php
include 'classes/Item.php';

$id = $_GET['id'];
$item_obj = new Item;
$item = $item_obj->get_item($id);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>UPDATE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body class="bg-warning">
    <div class="container p-5">
      <div class="card w-50 mx-auto">
        <div class="card-header">
          <h2 class="text-center">UPDATE ITEM</h2>
        </div>
        <div class="card-body">
          <form action="actions/update-action.php" method="post" enctype="multipart/form-data">
            <!-- action - location of our data -->
            <input type="text" name="item-name" id="" class="form-control mt-3" value="<?= $item['item_name'] ?>">
            <div class="form-text">ITEM NAME</div>

            <input type="text" name="item-desc" id="" class="form-control mt-3" value="<?= $item['item_desc'] ?>">
            <div class="form-text">ITEM DESCRIPTION</div>

            <input type="text" name="item-price" id="" class="form-control mt-3" value="<?= $item['item_price'] ?>">
            <div class="form-text">ITEM PRICE</div>

            <div class="row mt-3">
              <div class="col-6">
                <img src="assets/img/<?= $item['item_image'] ?>" alt="<?= $item['item_image'] ?>" class="img-fluid">

                <input type="file" name="item-image" class="form-control mt-1" accept="image/*">
                <div class="form-text">ITEM IMAGE</div>
              </div>
            </div>

            <input type="hidden" value="<?php echo $id ?>" name="item-id">

            <div class="d-grid mt-3">
                <button type="submit" class="btn btn-secondary">Save item</button>
            </div>

          </form>
        </div>
        <div class="card-footer">
            <a href="admin.php" class="text-decoration-none float-end">Go to admin page<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
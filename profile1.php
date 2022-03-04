<?php 
 include 'classes/User.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>PROFILE</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style type="text/css">
        body {
        background-color: #99FF99
        }

        .card {
            width: 400px;
            border: none;
            border-radius: 14px !important
        }

        .area1 {
            background-color: #b5b2f1;
            border-top-left-radius: 14px !important;
            border-top-right-radius: 14px !important;
            padding-top: 83px !important
        }

        .image {
            top: -62px;
            position: relative
        }

        .image img {
            box-shadow: 5px 6px 6px 2px #e9ecef
        }

        .area2 {
            background-color: #fff;
            border-bottom-left-radius: 14px !important;
            border-bottom-right-radius: 14px !important
        }

        .name {
            font-size: 25px;
            font-weight: 650
        }

        .information {
            color: #9FA8DA;
            font-weight: 500;
            font-size: 16px
        }

        .list-icons {
            display: inline-flex;
            color: #C5CAE9
        }

        .list-icons li {
            list-style: none;
            padding: 12px;
            border-radius: 10px;
            width: 49px;
            margin-right: 10px
        }

        .list-icons li i {
            font-size: 17px;
            color: #fff
        }

        @media (max-width:700px) {
            .list-icons {
                display: block
            }
        }

        .facebook {
            background: #3b5998
        }

        .instagram {
            background: #3f729b
        }

        .youtube {
            background: #ff0000
        }

        .whatsapp {
            background: #4dc247
        }

        .pinterest {
            background: #cb2027
        }
        </style>
    </head>
    <body>
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="card rounded">
                <div class=" d-block justify-content-center">
                    <div class="area1 p-3 py-5"> </div>
                    <div class="area2 p- text-center px-3">
                        <div class="image mr-3"> <img src="./assets/img/profile.jpg" class="rounded-circle" width="100" />
                            <h1 class="mt-3"><?php echo $_SESSION['username'] ?></h1>
                            <h4 class="title"><?php echo $_SESSION['email'] ?></h4>
                            <h4>ID: <?php echo $_SESSION['id'] ?></h4>
                            
                            <ul class="list-icons">
                                    <li class="facebook"> <i class="fa fa-facebook"></i></li>
                                    <li class="youtube"> <i class="fa fa-youtube"></i></li>
                                    <li class="instagram"> <i class="fa fa-instagram"></i></li>
                                    <li class="whatsapp"> <i class="fa fa-whatsapp"></i></li>
                                    <li class="pinterest"> <i class="fa fa-pinterest"></i></li>
                                </ul>
                            <a href="logout.php" class="">LOGOUT</a>
                                <div class="mt-3">
                                    <a href="homepage.php" class="btn btn-warning">Go to Homepage</a>
                                </div>
                            </div>
                        </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
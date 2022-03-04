<!doctype html>
<html lang="en">
    <head>
      <title>REGISTER</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS v5.0.2 -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    
    <body class="">
      <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
          
              <form class="form-horizontal" action='actions/register-action.php' method="POST">
                <fieldset>
                  <div id="legend">
                    <legend class="text-center">
                      Register
                    </legend>
                  </div>
                  
                  <div class="control-group">
                    <label class="control-label"  for="username">
                      Username
                    </label>
                    
                    <div class="controls">
                      <input type="text" id="username" name="username" placeholder="" class="form-control form-control-lg">
                      <p class="form-text">
                        Username can contain any letters or numbers, without spaces
                      </p>
                    </div>
                  </div>
              
                  <div class="control-group">
                    <label class="control-label" for="email">
                      E-mail
                    </label>
                    <div class="controls">
                      <input type="email" id="email" name="email" placeholder="" class="form-control form-control-lg">
                    </div>
                  </div>
              
                  <div class="control-group mt-3">
                    <label class="control-label" for="password">
                      Password
                    </label>
                    
                    <div class="controls">
                      <input type="password" id="password" name="password" placeholder="" class="form-control form-control-lg" minlength="6">
                      <p class="form-text">
                        Password must be at least 6 characters long
                      </p>
                    </div>
                  </div>
              
                  
              
                  <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                      <button class="btn btn-success" type="submit">
                        Register
                      </button>
                      <a class="d-block small mt-3" href="login.php">
                        Go to Login
                      </a>
                    </div>
                  </div>
                </fieldset>
              </form>
          
            </div> 
        </div>
      </div>
      <!-- Bootstrap JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
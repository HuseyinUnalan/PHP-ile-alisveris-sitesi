<!DOCTYPE html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="../assets/css/login.css" rel="stylesheet"/>
  <title>Burada Admin Paneli</title>
  


  
  
  
</head>
<body>


  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form action="../netting/islem.php" method="POST">
              <div class="form-floating mb-3">
                <input type="text" name="kullanici_mail" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="kullanici_password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="admingiris" type="submit">Sign
                  in</button>
                </div>
                <hr class="my-4">
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>
  </html>


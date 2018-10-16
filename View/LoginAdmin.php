<!DOCTYPE html>
<html lang="en">
    
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="../CSS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../CSS/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../CSS/css/sb-admin.css" rel="stylesheet">
    
    <!--Firebase JavaScript-->
    <script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
    
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
<!--            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>-->
            
          <a class="btn btn-primary btn-block" id="btnLogin">Login</a>
          </form>
          <div class="text-center">
            <!--<a class="d-block small mt-3" href="register.html">Register an Account</a>-->
            <a class="d-block small" href="ForgotPassword.php" id="btnForgotPassword">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../CSS/vendor/jquery/jquery.min.js"></script>
    <script src="../CSS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../CSS/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Authenticate Firebase JavaScript-->
    <script src="../Control/AuthenticateFirebase.js"></script>
  </body>

</html>

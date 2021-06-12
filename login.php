<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="resources/css/bootstrap.css">

  <!-- Normal CSS -->
  <link rel="stylesheet" href="resources/css/styles.css">
</head>

<body>
  <?php include './nav_footer/navbar.php' ?>

  <main class="login-form">
    <div class="cotainer">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
              <?php include('errors.php'); ?>

              <!-- Login Form starts here -->
              <form action="login.php" method="POST">
                <div class="form-group row">
                  <label for="userEmail" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                  <div class="col-md-6">
                    <input type="email" id="userEmail" class="form-control" name="userEmail" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="password" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6 offset-md-4">

                  </div>
                </div>

                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary btn-block" name="login_user">
                    LOGIN
                  </button>
                  <p class="mt-2 text-center">Not a member? <a href="register.php">Register</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

  </main>

  <script src="resources/js/bootstrap.min.js"></script>
</body>

</html>
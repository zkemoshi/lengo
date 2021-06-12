<?php include('server.php') ?>
<?php
if (!isset($_SESSION['user_id'])) {
  header('location: login.php');
}

?>

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
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Welcome, <span class="badge badge-primary"><?php echo $_SESSION['teacherFullName']; ?></span> </div>
            <div class="card-body">
              <h3>Current Transfer Options</h3>
              <table class="table mt-5">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>1</td>
                    <td>John Show</td>
                    <td>
                      <a href="transfer.php">View More</a>
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <script src="resources/js/bootstrap.min.js"></script>
</body>

</html>
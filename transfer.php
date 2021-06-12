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
  <?php include 'nav_footer/navbar.php' ?>

  <main class="login-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Welcome, Moshi</div>
            <div class="card-body">
              <h3>John Show Transfer Details</h3>
              <table class="table">
                <tbody>
                  <tr>
                    <th>Full Name:</th>
                    <td>John Snow</td>
                  </tr>
                  <tr>
                    <th>Email:</th>
                    <td>Johnsnow@gmail.com</td>
                  </tr>
                  <tr>
                    <th>Phone:</th>
                    <td>0766556644</td>
                  </tr>
                  <tr>
                    <th>Transfer From:</th>
                    <td>Mikindani Primary</td>
                  </tr>
                  <tr>
                    <th>Transfer To:</th>
                    <td>JohnHopkin Primary</td>
                  </tr>
                  <tr>
                    <th>Teacher Subject:</th>
                    <td>English</td>
                  </tr>
                </tbody>
              </table>
              <div>
                <a href="#" class="btn btn-primary">Confirm Request</a>
                <a href="#" class="btn btn-danger">Cancel Request</a>
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
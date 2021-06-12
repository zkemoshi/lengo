<?php
ob_start();
session_start();
include 'db.php';

// initializing variables
$tearcherFullName = "";
$userEmail    = "";
$teacherMobile    = "";
$teacherCheckNumber    = "";
$errors = [];


// REGISTER TEACHER
if (isset($_POST['reg_teacher'])) {

  // receive all input values from the form
  $teacherFullName = mysqli_real_escape_string($db, $_POST['teacherFullName']);
  $teacherCheckNumber = mysqli_real_escape_string($db, $_POST['teacherCheckNumber']);
  $teacherMobile = mysqli_real_escape_string($db, $_POST['teacherMobile']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $transferFrom = mysqli_real_escape_string($db, $_POST['transferFrom']);
  $transferTo = mysqli_real_escape_string($db, $_POST['transferTo']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);
  $userEmail = mysqli_real_escape_string($db, $_POST['userEmail']);

  // echo $teacherFullName, $teacherCheckNumber, $teacherMobile, $subject, $transferFrom, $transferTo, $password, $confirmPassword, $userEmail;
  // form validation: ensure that the password is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  if ($password != $confirmPassword) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a teacher does not already exist with the same checkno
  $teacher_check_query = "SELECT * FROM teacher WHERE teacherCheckNumber='$teacherCheckNumber' LIMIT 1";
  $result = mysqli_query($db, $teacher_check_query);

  $teacher = mysqli_fetch_assoc($result);

  if ($teacher) { // if user exists
    if ($teacher['teacherCheckNumber'] === $teacherCheckNumber) {
      array_push($errors, "Check Number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password); //encrypt the password before saving in the database

    $query = "INSERT INTO users (userEmail, password) VALUES('$userEmail', '$password')";
    $insert_user = mysqli_query($db, $query);

    // Insert into Teachers Table..

    //Getting User Id
    $user_id_query = "SELECT * FROM users WHERE userEmail='$userEmail' LIMIT 1";

    $user_id_result = mysqli_query($db, $user_id_query);
    $user_id_array = mysqli_fetch_assoc($user_id_result);

    $user_id = $user_id_array['id'];

    //Insert to Teachers Table
    $teacher_insert_query = "INSERT INTO teacher (teacherFullName,teacherMobile, teacherCheckNumber, user_id) VALUES('$teacherFullName', '$teacherMobile','$teacherCheckNumber','$user_id')";

    mysqli_query($db, $teacher_insert_query);
    $_SESSION['teacherFullName'] = $teacherFullName;
    $_SESSION['user_id'] = $user_id;


    //INSERT INTO TRANSFER INFO TABLE

    //Getting Teacher Id
    $teacher_id_query = "SELECT * FROM teacher WHERE teacherCheckNumber='$teacherCheckNumber' LIMIT 1";

    $teacher_id_result = mysqli_query($db, $teacher_id_query);
    $teacher_id_array = mysqli_fetch_assoc($teacher_id_result);

    $teacher_id = $teacher_id_array['id'];

    echo $teacher_id;

    //Insert to Teachers Table
    $transfer_insert_query = "INSERT INTO transferInfo (subject,transferFrom, transferTo, teacher_id) VALUES('$subject', '$transferFrom','$transferTo','$teacher_id')";

    mysqli_query($db, $transfer_insert_query);

    header('location: index.php');
  }
}

//LOGIN USER
if (isset($_POST['login_user'])) {
  // receive all input values from the form
  $userEmail = mysqli_real_escape_string($db, $_POST['userEmail']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // Encrpt password to look same as table password
  $password = md5($password);


  // first check the database to make sure 
  // a teacher exist with the same password

  $user_check_query = "SELECT * FROM users WHERE userEmail='$userEmail' AND password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);

  $user = mysqli_fetch_assoc($result);

  if (!$user) { // if user exists
    array_push($errors, "Wrong password/Username");
  } else {
    $user_id = $user['id'];

    //Login for a Teacher
    if ($user['role'] == 2) {

      //Query Teacher table for Details
      $teacher_query = "SELECT * FROM teacher WHERE user_id='$user_id' LIMIT 1";

      $teacher_result = mysqli_query($db, $teacher_query);
      $teacher_array = mysqli_fetch_assoc($teacher_result);

      echo $teacher_array;
      echo $teacher_array['teacherFullName'];

      $_SESSION['teacherFullName'] = $teacher_array['teacherFullName'];
      $_SESSION['user_id'] = $user_id;

      header('location: index.php');
    }

    //Login for HOS
    if ($user['role'] === 3) {
      echo 'Head of School';
      // content goes here...
    }

    //Login for DSEO
    if ($user['role'] === 4) {
      echo 'Head of DSEO';
      // content goes here...
    }

    //Login for DED
    if ($user['role'] === 5) {
      echo 'Head of DED';
      // content goes here...
    }
  }
}

//LOGOUT USER
if ($_GET['id']) {
  unset($_SESSION['user_id']);
  unset($_SESSION['teacherFullName']);
  header("location: login.php");
}

// ... 

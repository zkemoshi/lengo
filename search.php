<?php 

//Searching for Teachers Match..

//Get a teacher id from user_id
$user_id = $_SESSION['user_id'];

$teacher_query = "SELECT * FROM teacher WHERE user_id = '$user_id'";

$teacher_query_result = mysqli_query($db, $teacher_query);
$teacher_array = mysqli_fetch_assoc($teacher_query_result);

$teacher_id = $teacher_array['id'];

//Getting the login teacher request..

$teacher_request_query = "SELECT * FROM transferInfo WHERE teacher_id = '$teacher_id'";

$teacher_request_result = mysqli_query($db, $teacher_request_query);
$teacher_request_array = mysqli_fetch_assoc($teacher_request_result);

$subject = $teacher_request_array['subject'];
$from = $teacher_request_array['transferFrom'];
$to = $teacher_request_array['transferTo'];

//Search for All Matching request from Transfer Info

$search_query = "SELECT * FROM transferInfo WHERE subject = '$subject' AND transferTo = '$from' AND tranferFrom = '$to'";

$search_result = mysqli_query($db, $search_query);

$search_result_array = mysqli_fetch_assoc($search_result);

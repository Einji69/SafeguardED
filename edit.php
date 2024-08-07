<?php 
  session_start();
  require 'functions.php';
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
     ?>
<?php
 include_once "php/config.php";
 
$id= $_GET['id'];
// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM studentsreg WHERE $id = id");
// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$firstname= $resultData['firstname'];
$studentno = $resultData['studentno'];

?>

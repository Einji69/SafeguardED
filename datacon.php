<?php 

session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
 
     ?>




<?php 
            $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql1) > 0){
              $row = mysqli_fetch_assoc($sql1);
            }
          ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Profile - SafeGuardED</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
  <style>

  body{
  background-image: url('assets/img/background_image.png');
  background-repeat: no-repeat;
  background-position: center;
  background-size: 40%;
  background-attachment: fixed;
  text-decoration: none;
  }

  .inf img{
    margin-top:10px;
    margin-left:5px;
    object-fit:cover;
   height:480px;
   width:100%;
    border-radius:20px;
    padding:2px;
    background-color:#51515133;
  }
  @media screen and (max-width: 450px){
    .inf img{
      height:90%;
   width:90%;
    }
  }
  *{
    text-decoration:none;
  }
</style>
    
</head>

<body>

  <?php include 'header2.php'; ?>
  
  <div class="row  navbar navbar-default" style="position: absolute;margin-top:95px;top:0;  width:100%;">
  <div class="col-sm-6 ">
  <fieldset>


  

  <div>

      <?php

echo "<div class='inf'> <span><img src='php/images/".$row['img']."'</span></div>";

echo "<div class='inf'><strong></strong> <span><h3><b>".$row['lname'].", ".$row['fname']."</b></h3></span></div>";

          echo "<div class='inf'><strong>Account ID No:</strong> <span>".$row['unique_id']."</span></div>";

          echo "<div class='inf'><strong>Usertype:</strong> <span>".$row['usertype']."</span></div>";
          $usertype= $row['usertype'];
          
    

      ?>

      <div class="option">
      <?php 
if ($usertype=='admin'){
  echo "<a class='btn btn-primary' href='index.php'>Add New User</a>";
}

if ($usertype=='superadmin'){
  echo "<a class='btn btn-primary' href='index.php'>Add New User</a>";
}


if ($usertype=='superadmin'){
  echo "<a class='btn btn-primary' href='index.php'>Manage Users</a>";
}
?>
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
        <a class="btn btn-success" href="changepassword.php">Change Password</a>
        <a  class="btn btn-warning" href="studentreg.php">Add New Student</a>
        <a class="btn  btn-info" href="studentlist.php">Student Lists</a>
        <a class="btn  btn-info" href="actualprofile.php">My Profile</a>
      </div>

     
    </div>
 


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
  </fieldset>
</div>

 
<div class="col-sm-6" style="display:inline-block; margin-top:10px; " >
<fieldset>
  <?php include_once "header.php"; ?>

  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
        <?php 
            $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql1) > 0){
              $row = mysqli_fetch_assoc($sql1);
              $unique_id= $_SESSION['unique_id'];
              $status = "Active now";
              $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id=$unique_id");
            }
              
          ?>
         
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
          </fieldset>
          </div>
          <div>
</body>


</html>
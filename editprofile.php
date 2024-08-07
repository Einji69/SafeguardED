<?php 

  session_start();

  require 'php/config.php';
  require 'functions.php';

  if(isset($_POST['update'])) {

    $fname = clean($_POST['fname']);
    $lname = clean($_POST['lname']);


    $query = "UPDATE users SET fname = '$fname', lname = '$lname'
    WHERE unique_id ='".$_SESSION['unique_id']."'";

    if($result = mysqli_query($conn, $query)) {

      $_SESSION['prompt'] = "Profile Updated";
      header("location:actualprofile.php");
      exit;

    } else {

      die("Error with the query");

    }

  }

  if(isset($_SESSION['unique_id'])) {

    $qry = mysqli_query($conn,"SELECT * FROM users where unique_id = {$_SESSION['unique_id']} ");
    $data = mysqli_fetch_array($qry);
    extract($data);

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Edit Profile - SafeGuardED</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">


</head>
<body>
<?php include 'unique_id_session.php'?>
<?php include 'header2.php'; ?>


  <section>
    
    <div class="container " style="margin-top: 90px">
      <strong class="title">Edit Profile</strong>
    </div>
    

    <div class="edit-form box-left clearfix col-sm-6">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <div class="form-group">
          <label>Account ID:</label>
          
          <?php 
            $query = "SELECT unique_id FROM users WHERE unique_id = '".$_SESSION['unique_id']."'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_row($result);

            echo "<p>".$row[0]."</p>";
          ?>

        </div>


        <div class="form-group">
          <label for="fname">First Name</label>
          <input type="text" class="form-control" name="fname" value="<?php echo $fname ?>" placeholder="First Name" required>
        </div>


        <div class="form-group">
          <label for="lname">Last Name</label>
          <input type="text" class="form-control" name="lname" value="<?php echo $lname ?>" placeholder="Last Name" required>
        </div>
        

        </div>


        

        </div>
       
        
       
        </div>
        
        <div class="form-footer">
       
       <input class="btn btn-primary" type="submit" name="update" value="Update Profile">
       </div>
      </form>
      <button onclick=history.back() style=" 
    background-color: black;
    border:0;
    padding: 6px;
    color:white;">Cancel</button>
 

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php 

  } else {
    header("location:actualprofile.php");
  }

  mysqli_close($conn);

?>
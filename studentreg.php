<?php 
  
  if(isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php 

session_start();

  require 'php/config.php';
  require 'functions.php';

  if(isset($_POST['register'])) {
    $studno = clean($_POST['studentno']); 
    $fname =  clean($_POST['firstname']); 
    $lname =  clean($_POST['lastname']); 
    $course =  clean($_POST['course']); 
    $yrlevel = clean( $_POST['yrlevel']); 
    $sect = clean($_POST['sect']); 
    $sex =  clean($_POST['sex']); 
    $hi1 =  clean($_POST['hissue1']);
    $hi2 =  clean($_POST['hissue2']);
    $hi3 = clean($_POST['hissue3']);


   
    $image_name1 = clean( $_POST['image_name1']);
    if ($_FILES['img1']['name'] != '') {
        $tmp_name = $_FILES['img1']['tmp_name'];
        $image_name1 = time() . '_' . $_FILES['img1']['name'];
        move_uploaded_file($tmp_name, 'medicalrecords/' . $image_name1);
    }
      
      $image_name2 = clean( $_POST['image_name2']);
      if ($_FILES['img2']['name'] != '') {
          $tmp_name = $_FILES['img2']['tmp_name'];
          $image_name2 = time() . '_' . $_FILES['img2']['name'];
          move_uploaded_file($tmp_name, 'medicalrecords/' . $image_name2);
      }
      $image_name3 = clean( $_POST['image_name3']);
      if ($_FILES['img3']['name'] != '') {
        $tmp_name = $_FILES['img3']['tmp_name'];
        $image_name3 = time() . '_' . $_FILES['img3']['name'];
        move_uploaded_file($tmp_name, 'medicalrecords/' . $image_name3);
    }
   

   if ($_FILES['mc']['name'] != '') {
      $tmp_name0 = $_FILES['mc']['tmp_name'];
      $medcert = time() . '_' . $_FILES['mc']['name'];
      move_uploaded_file($tmp_name0, 'medicalrecords/medicalcertificate/' . $medcert);
  }
 
      $query = "SELECT studentno FROM studentsreg WHERE studentno = '$studno'";

    $result = mysqli_query($conn,$query);
      if(mysqli_num_rows($result) == 0) {
 
$query = "INSERT INTO studentsreg (image_name1, image_name2, 
  image_name3,  medcert,
  hissue1, hissue2, hissue3, studentno, sect, sex, firstname, lastname,
  course, yrlevel,  date_joined)
        VALUES ('$image_name1', '$image_name2',
           '$image_name3',  '$image_name4',  '$image_name5', '$image_name6', '$medcert',
           '$hi1', '$hi2', '$hi3', 
          '$studno', '$sect', '$sex', '$fname', '$lname',
           '$course', '$yrlevel', NOW())";

        if(mysqli_query($conn, $query)) {

          $_SESSION['prompt'] = "Succcessful Registration.";
          header("location:studentlist.php");
          exit;

        } else {

          die("Error with the query");

        }

      } else {

        $_SESSION['errprompt'] = "That student number already exists.";

      }
  } 

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Register - SafeGuardED</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">


    
</head>
<body>

<?php include 'unique_id_session.php'?>
<?php include 'header2.php'; ?>
  <section class="center-text">
    
    <strong>Register</strong>

    <div class="registration-form box-center clearfix">

    <?php 
        if(isset($_SESSION['errprompt'])) {
          showError();
        }
    ?>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        
       
      <div class="row">


        <div class="personal-info col-sm-6">
            
            <fieldset>
              <legend>Personal Info</legend>
              
              <div class="form-group">
                <label for="studentno">Student Number</label>
                <input type="text" class="form-control" name="studentno" placeholder="Student Number (must be unique)" ]>
              </div>

              <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
              </div>

              <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
              </div>

              <div class="form-group">
                <label for="sex">Sex</label>

                <select class="form-control" name="sex">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option> 
                  
                </select>

              <div class="form-group">
                <label for="course">Course</label>

                <select class="form-control" name="course">
                  <option value="BSBA">BSBA</option>
                  <option value="BSOA">BSOA</option>
                  <option value="BSIT">BSIT</option>
                  <option value="BSCS">BSCS</option>
                  <option value="BSCE">BSCE</option>
                  
                </select>

              </div>

              <div class="form-group">
                <label for="yrlevel">Year Level</label>

                <select class="form-control" name="yrlevel">
                  <option>1st year</option>
                  <option>2nd year</option>
                  <option>3rd year</option>
                  <option>4th year</option>
                </select>

              </div>

              <div class="form-group">
                <label for="sect">Section</label>
                <input type="text" class="form-control" name="sect" placeholder="Section" required>
              </div>
              <div class="form-group">
              <label for="mc">Medical Certificate</label>
              <input name="mc" type="file"  accept="image/gif,image/jpeg,image/jpg" class="form-control" >
              </div>

            </fieldset>
          </div>


          <div class="account-info col-sm-6">
          
            <fieldset>
              <legend>Health Info</legend>
              <div class="form-group">
                <label for="hissue1">Health Issue 1</label>
                <input type="text" class="form-control" name="hissue1" placeholder="Health Issue" >
                <input name="img1" type="file"  accept="image/gif,image/jpeg,image/jpg">
                <input name="image_name1" type="hidden">
              </div>      

              <div class="form-group">
                <label for="hissue2">Health Issue 2</label>
                <input type="text" class="form-control" name="hissue2" placeholder="Health Issue" >
                <input name="img2" type="file"  accept="image/gif,image/jpeg,image/jpg">
                <input name="image_name2" type="hidden">
              </div>
            
              <div class="form-group">
                <label for="hissue3">Health Issue 3</label>
                <input type="text" class="form-control" name="hissue3" placeholder="Health Issue" >
                <input name="img3" type="file" accept="image/gif,image/jpeg,image/jpg" >
                <input name="image_name3" type="hidden">
              </div>

            

            </fieldset>
            

          </div>
    
        
        </div>

        
        
       <button onclick=history.back() style=" 
       background-color: black;
       border:0;
       padding: 6px;
       color:white;">Cancel</button>
        <input class="btn btn-primary" type="submit" name="register" value="Register">

      </div>



      </form>
    </div>

  </section>

 
	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

<?php 

  unset($_SESSION['errprompt']);
  mysqli_close($conn);

?>
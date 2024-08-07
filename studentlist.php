
<?php 
  session_start();
  require 'functions.php';
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
     ?>
   
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=0.45">

	<title>Studentlists - SafeGuardED</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
  <style>
  body{
  background-image: url('assets/img/logo.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size:35%;
  background-attachment: fixed;
  }
  

  table {
  border-collapse: collapse;
  width: 100%;
  position:absolute;
 
}

th, td {
  padding: 5px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}
th{
  font-size: 16px;
}
tr:hover {background-color:#0580c485;}


.lightboxed {
      display: table; /* helps us center the lightbox-content */
      opacity: 0; /* fully transparent (hidden) */
      z-index: -1; /* put the lightbox layer below the body */
      transition-duration: .6s; /* duration of the fade in effect */
   
      /* make the lightbox occupy the entire page */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7); /* black with 0.7 opacity */
    }
    .lightboxed:target {
      opacity: 1; /* fully opaque (visible) */
      z-index: 3; /* put the lightbox layer above the body */
    }
    .lightboxed-content {
      display: table-cell;
      vertical-align: middle; /* vertically center */
      text-align: center; /* horizontally center */
    }
    .close {
      /* position the CLOSE button to the top-right corner */
      position: fixed;
      top: 10px;
      right: 10px;
   
      /* style the close button */
      font-size: 40px;
      font-weight: 300;
      text-decoration: none;
      color: white;
    }
   
    /* make the image responsive */
    img {
      max-width: 90%;
      
      border-radius: 10px;"
    }
h2{
  color:black;
}

</style>
    
</head>
<?php include 'unique_id_session.php'; ?>
<?php include 'header2.php'; ?>
<br>


<body >


<?php   if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        unset($_SESSION['prompt']);
       
        ?>

<?php
$sql = "SELECT * FROM studentsreg";
$result = $conn->query($sql);
// Close the connection
$conn->close();
?>

<?php if ($result->num_rows > 0): ?>
  <div  class="col-sm-6"  style="position:absolute; top:0; margin-top: 100px;"><a class="btn btn-warning"  href="studentreg.php" >Add New Student</a>
    <table>   
   
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Section</th>
            <th>Medical Cartificate</th>
            <th>|</th>
            <th>Full View</th>
            <th>Add</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
    
            <tr>
                <td><b><?php echo $row["studentno"]; ?></b></td>
                <td><b><?php echo $row["firstname"]; ?></b></td>
                <td><b><?php echo $row["lastname"]; ?></b></td>
                <td><b><?php echo $row["course"]; ?></b></td>
                <td><b><?php echo $row["yrlevel"]; ?></b></td>
                <td><b><?php echo $row["sect"]; ?></b></td>


                <td> <a href="#<?php echo $row["medcert"]; ?>"><?php echo $row["medcert"]; ?></a>  <div class="lightboxed" id="<?php echo $row["medcert"]; ?>">  <a href="#" class="close">CLOSE</a>
                <div class="lightboxed-content"> <img src="medicalrecords/medicalcertificate/<?php echo $row['medcert']; ?>" alt=""></div>
                </div> <img src="medicalrecords/medicalcertificate/<?php echo $row['medcert']; ?>" alt=""></td>
                


             
           
                <td>|</td>
                <?php echo "<td><a href=\"fullview.php?id=$row[id]\"><h2>👁</h2></a></td>"; ?>
                <?php echo "<td><a href=\"add.php?id=$row[id]\"><h2><b>+</b></h2></td>"; ?>
                <?php echo "<td><a href=\"edit.php?id=$row[id]\"><h2><b>📝</b></h2></a></td>"; ?>
               
                <td><h2><b>🗑</b></h2></td>
             
            </tr>
        <?php endwhile; ?>
    </table>
    </div>
<?php else: ?>
    <p>No student found</p>
<?php endif; ?>
<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
 
</body>

</html>

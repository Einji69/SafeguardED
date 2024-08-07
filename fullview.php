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
$result = mysqli_query($conn, "SELECT * FROM studentsreg WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);


$studentno = $resultData['studentno'];
$firstname= $resultData['firstname'];
$lastname= $resultData['lastname'];
$course= $resultData['course'];
$yrlevel= $resultData['yrlevel'];
$sect= $resultData['sect'];
$medcert= $resultData['medcert'];
$sex= $resultData['sex'];
$date_joined= $resultData['date_joined'];
$hissue1= $resultData['hissue1'];
$hissue2= $resultData['hissue2'];
$hissue3= $resultData['hissue3'];

$image_name1= $resultData['image_name1'];
$image_name2= $resultData['image_name2'];
$image_name3= $resultData['image_name3'];


?>
<!DOCTYPE html>
<html>
	<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
<style>
  table {
  border-collapse: collapse;
  width: 70%;
}
th, td {
  padding: 1px;
  text-align: center;
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
      position: absolute;
      top: 0;
      left: 0;
      padding:0;
      background-size:cover;
      background: rgba(0, 0, 0, 0.7); /* black with 0.7 opacity */
    }
    .lightboxed:target {
      opacity: 1; /* fully opaque (visible) */
      z-index: 4; /* put the lightbox layer above the body */
    }
    .lightboxed-content {
      display: table-cell;
      vertical-align: middle; /* vertically center */
      text-align: center; /* horizontally center */
    }
    .close {
      /* position the CLOSE button to the top-right corner */
      position: absolute;
      top: 10px;
      right: 10px;
   
      /* style the close button */
      font-size:40px;
      font-weight: 300;
      text-decoration: none;
      color: white;
    }
   
    /* make the image responsive */
    img {
      max-width: 100%;
      padding:10px;
      border-radius: 10px;"
    }
h2{
  color:black;
}
strong{

}
strong{
	padding-left: 50px;
}
p{
  text-align: center;
}
</style>
	</head>
	<?php include 'unique_id_session.php'?>
	<?php include 'header2.php'; ?>

	<body>

	<li>
                <div >
                <br>
                <br>
                  <div><strong>Student ID:</strong> <span><?php echo $studentno; ?></span></div>
                  <div><strong>Student Name:</strong> <span><?php echo $lastname. ", ".$firstname; ?></span></div>
                  <div><strong>Sex:</strong> <span><?php echo $sex; ?></span></div>
				  <div><strong>Course:</strong> <span><?php echo $course; ?></span></div>
				  <div><strong>Section:</strong> <span><?php echo $sect; ?></span></div>
                  <div><strong>Year Level:</strong> <span><?php echo $yrlevel; ?></span></div>
                  <div><strong>Date of Registration:</strong> <span><?php echo $date_joined;?></span></div>
                  
                 
			
				 <br> 


				  <table>
				  <tr>
				  <th>Medical Cartificate</th>
				  <th>Description</th>
					</tr>

					<tr>
					<td> <a href="#<?php echo $medcert; ?>"><?php echo $medcert; ?></a>  <div class="lightboxed" id="<?php echo $medcert; ?>">  <a href="#" class="close">CLOSE</a>
                <div class="lightboxed-content"> <img src="medicalrecords/medicalcertificate/<?php echo $medcert; ?>" alt=""></div>
                </div> <img src="medicalrecords/medicalcertificate/<?php echo $medcert; ?>" alt=""></td>
</tr>

					<tr>
            <th>Health Issue No.1</th>
			</tr>
			<tr>
				
				<td> <a href="#<?php echo $hissue1; ?>"><?php echo $hissue1; ?></a>  <div class="lightboxed" id="<?php echo $hissue1; ?>">  <a href="#" class="close">CLOSE</a>
					<div class="lightboxed-content"> <img src="medicalrecords/<?php echo $image_name1; ?>" alt=""></div>
					</div> <img src="medicalrecords/<?php echo $image_name1; ?>" alt=""></td>
	</tr>
			<tr>
            <th>Health Issue No.2</th>
			</tr>

			<tr>
						
			<td> <a href="#<?php echo $hissue2; ?>"><?php echo $hissue2; ?></a>  <div class="lightboxed" id="<?php echo $hissue2; ?>">  <a href="#" class="close">CLOSE</a>
					<div class="lightboxed-content"> <img src="medicalrecords/<?php echo  $image_name2; ?>" alt=""></div>
					</div> <img src="medicalrecords/<?php echo  $image_name2 ?>" alt=""></td>
			</tr>	

<tr>
            <th>Health Issue No.3</th>
</tr>
<tr>
	
<td> <a href="#<?php echo $hissue3; ?>"><?php echo  $hissue3; ?></a>  <div class="lightboxed" id="<?php echo  $hissue3; ?>">  <a href="#" class="close">CLOSE</a>
                <div class="lightboxed-content"> <img src="medicalrecords/<?php echo  $image_name3; ?>" alt=""></div>
                </div> <img src="medicalrecords/<?php echo   $image_name3; ?>" alt=""></td>
</tr>

       
   

        <?php
 include_once "php/config.php";
 
 $id= $_GET['id']; 

 $sql = "SELECT * FROM images Where image_id= $id ";
 $result = $conn->query($sql);
 // Close the connection
 $conn->close();
 ?>
   
<?php if ($result->num_rows > 0): ?>
  
  <tr>
            <th>Additional Health Issues</th>
			</tr>
     
      <?php while ($row = $result->fetch_assoc()): ?>
			<tr>
      <td> <div>Date Added:<?php echo  $row["date_joined"]; ?> </div><a href="#<?php echo  $row["hissue"]; ?>"><?php echo  $row["hissue"]; ?></a>  <div class="lightboxed" id="<?php echo  $row["hissue"]; ?>">  <a href="#" class="close">CLOSE</a>
                <div class="lightboxed-content"> <img src="medicalrecords/<?php echo  $row["image_name"]; ?>" alt=""></div>
                </div> <img src="medicalrecords/<?php echo   $row["image_name"]; ?>" alt=""></td>
                <?php endwhile; ?>
              <?php else: ?>
       <p>No Additional Health Issues</p>
   <?php endif; ?>
   
   
              </tr>
           
 
				
</table>

</div>

        
<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } 
}
</script>
	</body>
	
	 </html>
 
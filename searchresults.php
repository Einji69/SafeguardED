<?php 

  session_start();

  require 'php/config.php';
  require 'functions.php';


  if(isset($_SESSION['unique_id'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Search Result - SafeGuardED</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

    
</head>
<body>

  <?php include 'header.php'; ?>

  <section>

    <?php 

      if(isset($_GET['search'])) {

        $s = clean($_GET['searchbox']);

        $query = "SELECT studentno, id, firstname, lastname, course, yrlevel,
        sect, hissue1, hissue2, hissue3, hissue4, hissue5, hissue6, 
         DATE_FORMAT(date_joined, '%m/%d/%Y') as date_joined, CONCAT(firstname, ' ', lastname) as fullname 
        FROM studentsreg WHERE CONCAT(studentno,' ',firstname, ' ', lastname) = '$s' OR firstname = '$s' OR lastname = '$s' ORDER BY date_joined DESC LIMIT 30";
    ?>

    <div class="container">
      <strong class="title">Search results for "<?php echo $s; ?>".</strong>


    


    <?php

        if($result = mysqli_query($conn, $query)) {

          if(mysqli_num_rows($result) == 0) {

            echo "<p>No results matches to your query.</p>";
            echo "</div>";

          } else {
            echo "</div>";
            echo "<ul class='profile-results'>";

            while($row = mysqli_fetch_assoc($result)) {

          ?>

              <li>
                <div class="result-box box-left">
                  <div class='info'><strong>Student ID:</strong> <span><?php echo $row['studentno']; ?></span></div>
                  <div class='info'><strong>Student Name:</strong> <span><?php echo $row['lastname']. ", ".$row['firstname']; ?></span></div>
                  <div class='info'><strong>Course:</strong> <span><?php echo $row['course']; ?></span></div>
                  <div class='info'><strong>Year Level:</strong> <span><?php echo $row['yrlevel']; ?></span></div>
                  <div class='info'><strong>Date of Registration:</strong> <span><?php echo $row['date_joined']; ?></span></div>
                  <div class='info'><strong>Section:</strong> <span><?php echo $row['sect']; ?></span></div>
                  <div class='info'><strong>Health Issue 1:</strong> <span><?php echo $row['hissue1']; ?></span></div>
                  <div class='info'><strong>Health Issue 2:</strong> <span><?php echo $row['hissue2']; ?></span></div>
                  <div class='info'><strong>Health Issue 3:</strong> <span><?php echo $row['hissue3']; ?></span></div>
                  <div class='info'><strong>Health Issue 4:</strong> <span><?php echo $row['hissue4']; ?></span></div>
                  <div class='info'><strong>Health Issue 5:</strong> <span><?php echo $row['hissue5']; ?></span></div>
                  <div class='info'><strong>Health Issue 6:</strong> <span><?php echo $row['hissue6']; ?></span></div>
                  <?php echo "<td><a href=\"fullview.php?id=$row[id]\"><h2>👁</h2></a></td>"; ?>
                </div>
              </li>

          <?php

            }

            echo "</ul>";

          }

        } else {
          die("Error with the query");
        }

      }

    ?>
  
    <div class="container">
      <a href="datacon.php">Student Health Info</a>
    </div>
    

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php 

  } else {
    header("location:studentreg.php");
    exit;
  }

  mysqli_close($conn);

?>
<?php 


	require 'php/config.php';
	require 'functions.php';

	$s = clean($_GET['s']);

	$query = "SELECT sect, studentno, firstname, lastname, course, yrlevel,
	 hissue1, hissue2, hissue3, hissue4, hissue5, hissue6, CONCAT(studentno, ' ', firstname, ' ', lastname) as fullname 
	FROM studentsreg WHERE CONCAT( hissue1, hissue2, hissue3, hissue4, hissue5, hissue6, sect,
	 ' ',course, ' ',studentno, ' ',firstname, ' ', lastname) 
	  LIKE '".$s."%' OR course LIKE  '".$s."%' OR studentno LIKE '".$s."%' OR firstname LIKE '".$s."%' OR lastname LIKE '".$s."%' ORDER BY date_joined DESC LIMIT 30 ";

$query2 = "SELECT hissue,
FROM images ";
	
	if($result = mysqli_query($conn, $query)) {

		if(mysqli_num_rows($result) == 0) {
			echo "<ul><li class='none'>No results to display</li></ul>";
		} else {

			echo "<ul>";

			while($row = mysqli_fetch_assoc($result)) {
				echo "<li>";
				echo "<span class='name'>".$row['fullname']."</span>";

				echo "<div class='details'>";

				echo "<span><strong>#: </strong>".$row['studentno']."</span>";
				echo "<span><strong>course: </strong>".$row['course']."</span>";
				echo "<span><strong>yr level: </strong>".$row['yrlevel']."</span>";
				echo "<span><strong>section: </strong>".$row['sect']."</span>";
				

				echo "</div></li>";

			}

			echo "</ul>";

		}

	} else {
		die("Error with the query");
	}

	mysqli_close($conn);

?>

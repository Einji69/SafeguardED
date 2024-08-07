
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="Salun-atReportsDesign.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
.reg-counts{
   margin-top:50px;
    width:100px;
    float:left;
    box-shadow: 1px 1px 1px 1px rgba(83, 82, 82, 0.541);
    text-align:center;
    border-radius:0;
 
}

.reg-users{
    padding:1.5px;
    background-image: url("yellow-grunge-style-halftone-pattern-background_1409-1428.jpg");
    border-radius:0;
    margin:1px;
    height:2cm;
}
.reg-students{
    padding:1.5px;  
    background-image:url("360_F_357762401_Q6IYG6rSR6yoy2mnBsOF3ZtuYVzBNARe.jpg");
    border-radius:0;
    margin:1px;
    height:2cm;

}


    </style>
</head>
<body>
    <div class="reg-counts"> 
        <h3>No. of registered</h3>
     
        <div class="reg-users">
            Users  
<?php 
   
    $query8 = "SELECT user_id FROM users ORDER BY user_id ";
    $query_run8 = mysqli_query($conn, $query8);
    $row8 = mysqli_num_rows($query_run8);
    echo '<h1> '.$row8.' </h1>'
    ?>
 </div>

 <div class="reg-students">  
      Students
    <?php 
    
    $query8 = "SELECT id FROM studentsreg ORDER BY studentno ";
    $query_run8 = mysqli_query($conn, $query8);
    $row8 = mysqli_num_rows($query_run8);
    echo '<h1> '.$row8.' </h1>'
    ?>
 </div> 
 
 


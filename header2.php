
<head>
<style>
.sticky {
  position: fixed;
  top: 0;
  width: 103%;
  z-index:2;
}
</style>
</head>
<nav class="sticky navbar navbar-default" id="myHeader" >
  <div class="container">
   
    <div class="navbar-header">

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

      <a class="navbar-brand" href="datacon.php">SafeGuardED</a>
      
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >

    <?php 

      if(isset($_SESSION['unique_id'])) {

    ?>

<div class="num" style="display:inline-block;  margin-top:10px;  margin-left:100px; font-size:20px;">
   <a><b>👨🏻‍💼</b></a>
<?php 
    $query8 = "SELECT user_id FROM users";
    $query_run8 = mysqli_query($conn, $query8);
    $row8 = mysqli_num_rows($query_run8);
    echo $row8
    ?>
<a href="studentlist.php" style="text-decoration: none; font-size:20px;">
     <b>👨‍👧‍👦</b></a>
    <?php 
    $query8 = "SELECT id FROM studentsreg";
    $query_run8 = mysqli_query($conn, $query8);
    $row8 = mysqli_num_rows($query_run8);
    echo $row8
    ?>
<a class="btn btn-success" href="users.php" style="display:inline; font-size:20px; color: black; background-color:#8080801c; margin-left:10px;">✉</a>
     </div>
    
      <form class="navbar-form navbar-right" action="searchresults.php" method="GET" >
    

      
        <div class="search-area">
      
          <div class="form-group">
        
      
            <div class="search-wrap">

              <label for="searchbox" class="sr-only">Search:</label>
              <input type="text" class="form-control" name="searchbox" id="searchbox" placeholder="Search student name or ID here" required autocomplete="off">
              
              <div class="search-results hide"></div>

            </div>
            

          </div>
          <input type="submit" name="search" id="search-btn" value="Search" class="btn btn-default">

        </div>
        
        <div class="welcome"><?php echo "Welcome, <a href='actualprofile.php'>".$row['fname']."</a>!";?></div>
        
       

        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>

      </form>

      <?php 

        } else {
          echo "<span class='not-logged'>Not logged in.</span>";
        }

      ?>

      


    </div>
  </div>

</nav>

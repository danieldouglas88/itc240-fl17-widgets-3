<?php include 'includes/config.php' ?>
<?php get_header(); ?>

  <hr class="divider">
  <h2 class="text-center text-lg text-uppercase my-0">Welcome to the
    <strong>Structural Consult LLC</strong> website
  </h2>
  <hr class="divider">
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid mb-4 mb-lg-0" src="img/eng.png" alt="">
    </div>
    <div class="col-lg-6">
      <h3>Customers</h3>
      <?php
      $sql = "select * from test_Customers";

      $iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
      $result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
      if (mysqli_num_rows($result) > 0)//at least one record!
      {//show results
      	while ($row = mysqli_fetch_assoc($result))
          {
      	   echo "<p>";
      	   echo "FirstName: <b>" . $row['FirstName'] . "</b><br />";
      	   echo "LastName: <b>" . $row['LastName'] . "</b><br />";
      	   echo "Email: <b>" . $row['Email'] . "</b><br />";
      	   echo "</p>";
          }
      }else{//no records
      	echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
      }

      @mysqli_free_result($result); #releases web server memory
      @mysqli_close($iConn); #close connection to database

      ?>
      </div>
  </div>

<?php get_footer(); ?>

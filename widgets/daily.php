<?php include 'includes/config.php' ?>
<?php get_header(); ?>
<?php
if(isset($_GET['day']))
{
  $day = $_GET['day']; // from query sring
}else{
  $day= date('l'); // fromthe system clock
}
?>

  <hr class="divider">
  <h2 class="text-center text-lg text-uppercase my-0">Welcome to the
    <strong>Structural Consult LLC</strong> website
  </h2>
  <hr class="divider">
  <div class="row">
    <div class="col-lg-6">

    </div>
    <div class="col-lg-6">
      <p> Daily page<p>
        <p>Current contents of the variable day: <?=$day?> </p>
      <p> <a href="?day=Monday">Monday</a></p>
      <p> <a href="?day=Tuesday">Tuesday</a></p>
      <p> <a href="?day=Wednesday">Wedneday</a></p>

      </div>
  </div>

<?php get_footer(); ?>

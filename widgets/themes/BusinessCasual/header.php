<?php
if (THIS_PAGE == 'index.php')
{
  $config2 = "Welcome to the home page.";
  $banner = "Structrual and Civil Engineering: Welcome Home";

} elseif (THIS_PAGE == 'customers.php') {
  $config2 = "Welcome to the Customers page.";
  $banner = "Structrual and Civil Engineering: Customers!";

} elseif (THIS_PAGE == 'appointment.php') {
  $config2 = "Welcome to the Appointment page.";
  $banner = "Structrual and Civil Engineering: Widget Appointments";

} elseif (THIS_PAGE == 'contact.php') {
  $config2 = "Welcome to the Contact page";
  $banner = "Structrual and Civil Engineering: Contact us";

} elseif (THIS_PAGE == 'daily.php') {
  $config2 = "Welcome to the Daily page";
  $banner = "Structrual and Civil Engineering: Daily stuff!";

}else{
  $config2 = "Welcome to " . THIS_PAGE;
    $banner = "Structrual and Civil Engineering: Boop the snoop!";
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$config2?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=$config->theme_virtual?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?=$config->theme_virtual?>css/business-casual.css" rel="stylesheet">

  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Widgets Corp.</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block"><?=$banner?></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="customers.php">Customers</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="appointment.php">Appointment</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="daily.php">Daily</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="bg-faded p-4 my-4">
      <!-- header ends here -->

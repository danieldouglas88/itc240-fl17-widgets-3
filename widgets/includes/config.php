<?php
/*
config.php
Stores config info for our web app
*/

// prevents already sent errors
ob_start();

define('DEBUG',TRUE); #we want to see all errors

// prevents date errors
date_default_timezone_set("America/Los_Angeles");

//add includes file reference here:
include 'credentials.php'; // database credentials here
//include 'common.php'; //favoirte functions here

//echo DB_HOST;
//die;

// create config object
$config = new stdClass;

// Constant with current page name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//START NEW THEME STUFF
$sub_folder = 'widgets';//change to 'widgets' or 'sprockets' etc.

//add subfolder, in this case 'fidgets' if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
$config->virtual_path = 'http://' . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;
$config->theme = 'BusinessCasual';//sub folder to themes

//END NEW THEME STUFF


$config2 = "Welcome to our site.";
$banner = "Structrual and Civil Engineering";

if (THIS_PAGE == 'index.php')
{
  $config2 = "Welcome to the home page.";
  $banner = "Structrual and Civil Engineering: Welcome Home";

} elseif (THIS_PAGE == 'about.php') {
  $config2 = "Welcome to the About page.";
  $banner = "Structrual and Civil Engineering: Out and About";

} elseif (THIS_PAGE == 'appointment.php') {
  $config2 = "Welcome to the Appointment page.";
  $banner = "Structrual and Civil Engineering: Widget Appointments";

} elseif (THIS_PAGE == 'contact.php') {
  $config2 = "Welcome to the Contact page";
  $banner = "Structrual and Civil Engineering: Contact us";

}else{
  $config2 = "Welcome to " . THIS_PAGE;
}


//START NEW THEME STUFF
//creates theme virtual path for theme assets, JS, CSS, images
$config->theme_virtual = $config->virtual_path . '/themes/' . $config->theme . '/';
//END NEW THEME STUFF

?>


<?php include 'includes/header.php' ?>
<?php include 'includes/config.php' ?>

<?php

if(isset($_POST["FirstName"])){

  $FirstName = clean_post('FirstName');
  $LastName = clean_post('LastName');
  $Email = clean_post('Email');
  $Comments = clean_post('Comments');

$to  = 'daniel.calvin.douglas@gmail.com'; // change to client email after testing is done
$subject = "DANIEL on the WEB Host" . $FirstName . " " . $LastName . " " . date("F j, Y, g:i a");

$myText = "The user has entered the following information:" . PHP_EOL . PHP_EOL; //double newlines
$myText .= $FirstName . " " . $LastName . PHP_EOL;
$myText .= $Comments . PHP_EOL;

$headers = 'From: noreply@daniel-on-the-web.com' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $myText, $headers);

echo '<hr class="divider">
      <h2 class="text-center text-lg text-uppercase my-0">Message
        <strong>sent!</strong>
      </h2>
<p>Thank you for your information</p>
<p>We will get back to you in 48 hours, ' . $FirstName . '. <p><a href="">Exit</a></p>';

}else{
  echo '
      <hr class="divider">
      <h2 class="text-center text-lg text-uppercase my-0">Contact
        <strong>Form</strong>
      </h2>
      <hr class="divider">
      <form action="" method="post">
        <div class="row">
          <div class="form-group col-lg-4">
            <label class="text-heading">First Name</label>
            <input type="text" name="FirstName" class="form-control" required>
          </div>
          <div class="form-group col-lg-4">
            <label class="text-heading">Last Name</label>
            <input type="text" name="LastName" class="form-control" required>
          </div>
          <div class="form-group col-lg-4">
            <label class="text-heading">Email Address</label>
            <input type="email" name="EmailAddress" class="form-control">
          </div>
          <div class="clearfix"></div>
          <div class="form-group col-lg-12">
            <label class="text-heading">Comments</label>
            <textarea name="Comments" class="form-control" rows="6"></textarea>
          </div>
          <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary">Submit</button>
          </div>
        </div>
      </form>
    </div>

  ';
}

?>

<?php include 'includes/footer.php' ?>

<?php

function clean_post($key)
{
  if(isset($_POST[$key])) {
  $value = strip_tags(trim($_POST[$key]));
  }else{
  $value ="";
  }
  return $value;
  }

?>

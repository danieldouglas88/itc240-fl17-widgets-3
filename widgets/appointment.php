<?php include 'includes/config.php' ?>
<?php get_header(); ?>

<?php

if(isset($_POST["FirstName"])){

  $FirstName = clean_post('FirstName');
  $LastName = clean_post('LastName');
  $Email = clean_post('Email');
  $Comments = clean_post('Comments');

$to  = 'daniel.calvin.douglas@gmail.com'; // change to client email after testing is done
$subject = "Ceramics APPNT from: " . $FirstName . " " . $LastName . " " . date("F j, Y, g:i a");

/*$myText = "The user has entered the following information:" . PHP_EOL . PHP_EOL; //double newlines
$myText .= $FirstName . " " . $LastName . PHP_EOL;
$myText .= $Comments . PHP_EOL;
*/

$myText = process_post();

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
      <h2 class="text-center text-lg text-uppercase my-0">Book Appointment
        <strong>Now</strong>
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

          <div class="form-group col-lg-4">
            <label class="text-heading">Appointment</label> <br>
            <input type="radio" name="Appointment_Type" value="Beginning hand building" /> Beginning hand building <br>
            <input type="radio" name="Appointment_Type" value="Building" /> Building <br>
            <input type="radio" name="Appointment_Type" value="Advanced" /> Advanced Throwing <br>
          </div>
          <div class="form-group col-lg-4">
            <label class="text-heading">Extras</label> <br>
            <input type="checkbox" name="Extras[]" value="Mosaic" /> Intermediate Rafting <br>
            <input type="checkbox" name="Extras[]" value="Beeding" /> Building Boats <br>
            <input type="checkbox" name="Extras[]" value="PrivateLesson" /> Technical Writing <br>
          </div>
            <br>
          <div class="form-group col-lg-4">
            <label class="text-heading">Appointment Date:</label>
            <input type="text" name="AppntDate" class="form-control">
          </div>

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

<?php get_footer(); ?>

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

  function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}

?>

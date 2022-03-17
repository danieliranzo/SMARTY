
<?php

session_start();

// put full path to Smarty.class.php
require('C:\xampp\htdocs\smarty\libs\Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

if ($_SESSION['message_type'] == 1 )
   $message=<<<END
  <p><strong>User registration successful!</strong></p>
  <p>Your userid $_SESSION['id'] and password $_SESSION['password'] have been emailed to the email address
     you just provided in your registration form.
     <br />
     If you are not redirected to the Login page in the next 20 seconds,
     click <a href="login_smarty.php">here</a>.</p>
END;





if ($_SESSION['message_type'] == 2 ) {
     session_destroy();
     $message="<h1>Thank you for your visit</h1>
               <p>To log in again click <a href=\"login_action.php\">here</a>.</p>";

}


  $smarty->assign('message', "message");
  $smarty->assign('message_type', $_SESSION['message_type']);

  // Actualiza o template
  $smarty->display('message_template.tpl');

?>

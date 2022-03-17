
<?php

require_once('/usr/share/php/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';


session_start();
if(isset($_SESSION['id'])) {

   $html = "<p>Welcome " . $_SESSION["name"] . "! You have entered a members-only area
       of the site.</p>
   <p>Here is a record of your personal data:</p>
   <ul>
   <li>email: ". $_SESSION['email'] . "</li>

   </ul>
   <p><a href=\"logout.php\">Logout</a></p>";

}
else {

$html="<p>You must log in to access this area of the site.</p>
   <p>If you are
   not a registered user, <a href=\"register.php\">click here</a>
   to sign up for instant access, or <a href=\"login.php\">click here</a> to log in!</p>";

}

$smarty->assign('HTML', $html);



// Actualiza o template
$smarty->display('index_template.tpl');

?>


?>

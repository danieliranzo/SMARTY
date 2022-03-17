<?php
session_start();

// put full path to Smarty.class.php
require('C:\xampp\htdocs\smarty\libs\Smarty.class.php');
$smarty = new Smarty();
 if ($_GET['m'] == "0") {$smarty->assign('MESSAGE', 'campos vacios.');}
 elseif ($_GET['m'] == "1") {$smarty->assign('MESSAGE', 'A user already exists with your chosen userid. Please try another.');}
 elseif ($_GET['m'] == "2") {$smarty->assign('MESSAGE', 'no valid email please try another');}
   elseif ($_GET['m'] == "3") {$smarty->assign('MESSAGE', 'password not valid ');}
 elseif ($_GET['m'] == "4") {$smarty->assign('MESSAGE', 'password not equals');}

   else {$smarty->assign('MESSAGE', '');}

   if (isset($_SESSION['newemail']))
       $smarty->assign('email', $_SESSION['email']);
   else
       $smarty->assign('email', '');

   if (isset($_SESSION['newname']))
       $smarty->assign('name', $_SESSION['name']);
   else
       $smarty->assign('name', '');

  // Actualiza o template
  $smarty->display('register_template.tpl');

?>

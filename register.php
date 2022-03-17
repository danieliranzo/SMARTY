<?php
include("db.php");

session_start();
if( $_POST["name"]=='' or _POST["email"]=='' or $_POST["password"]=='' or $_POST["password"]=='' or $_POST["remember_digest"]=='') {
     $_SESSION['email'] = $_POST['email'];
     $_SESSION['name'] = $_POST['name'];
     header("Location: register_action.php?m=0");
     exit;
}else{

$conexion =dbconnect($hostname,$db_name,$db_user,$db_passwd );
$sql = "SELECT * FROM  `users` where `email`= '".$_POST["email"]."' ;";
$result = mysqli_query($conexion,$sql);
   if(mysqli_num_rows($result) > 0) {
     $_SESSION['email'] = $_POST['email'];
     $_SESSION['name'] = $_POST['name'];
     header("Location: register_action.php?m=1");
     exit;
}else{
$email=$_POST["email"];
 $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                                           // Luego validamos el email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

     $_SESSION['email'] = $_POST['email'];
     $_SESSION['name'] = $_POST['name'];
     header("Location: register_action.php?m=2");
     exit;
}else{


   if(strlen($_POST['password'])<0) {
     $_SESSION['email'] = $_POST['email'];
     $_SESSION['name'] = $_POST['name'];
     header("Location: register_action.php?m=3");
      exit;
}else{
   if($_POST["password"]!=$_POST["passwordre"]){
            $_SESSION['email'] = $_POST['email'];
     $_SESSION['name'] = $_POST['name'];
     header("Location: register_action.php?m=4");
      exit;
}else{


   $name = $_POST["name"];
  $email    = $_POST["email"];
  $date = date("Y-m-d H:i:s");
 $password  = $_POST["password"];
 $remember_digest=$_POST["remember_digest"];
       $conexion =dbconnect($hostname,$db_name,$db_user,$db_passwd );


$sql = "INSERT INTO `users` (`name`, `email`, `created_at`, `updated_at`, `password_digest`,`remember_digest`)"
       . "VALUES ('".$name."','".$email."', '".$date."', '".$date."', '".$password."','".$remember_digest."');";


//$sql = "INSERT INTO `users2` (`name`) VALUES ('daniel')";
$result = mysqli_query($conexion,$sql);

if (!$result) {
    header("Location: register.php");
}else {
 header("Location: register_success.html");
}}}}}}
$smarty->display('index.template.tpl');
?>


<?php
include_once 'db.php';

session_start();


$conexion =dbconnect($hostname,$db_name,$db_user,$db_passwd );

  $email = trim($_POST['email']);
  $password_digest= ($_POST['password_digest']);
        $password = trim($_POST['password']);
        $sql = "select * from `users` where email = '".$email."'and password_digest = '".$password_digest."'";
        $rs = mysqli_query($conexion,$sql);






mysqli_close($conexion);

header("Location: index.php");


?>

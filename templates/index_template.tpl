<html>
<meta http-equiv="refresh" content="3; url=index.php" />
    <head> <title>sussetfull</title></head>

    <body>

    <h2> sustsetfull</h2>

    </body>

  <!--  <meta http-equiv="refresh" content="3; url=index.php" /> -->
</html>

a75009@daw:~/public_html/LAB8$ cat message.php
<?php

session_start();

// put full path to Smarty.class.php
require_once('/usr/share/php/smarty/libs/Smarty.class.php');
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
a75009@daw:~/public_html/LAB8$ clear
a75009@daw:~/public_html/LAB8$ cd templates
a75009@daw:~/public_html/LAB8/templates$ ls
index_template.tpl  login_template.tpl  message_template.tpl  register_template.tpl
a75009@daw:~/public_html/LAB8/templates$ cat index_template.tpl
<html>
<head>
   <title>comentarios</title>
   <meta  http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<style>
        <meta charset="UTF-8"> </html>
        <title>Blog de Inés</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            .menu {
                width:50%;
                margin-left:auto;
                margin-right:auto;
                background-color: #f1f1f1;
                padding:16px;
            }
            .container {
                padding:16px;
                width:40%;
                margin-left:auto;
                margin-right:auto;
            }
            a {
                text-decoration: none;
            }
            .text {
                background-color: #f1f1f1;
                padding:20px;
            }
            hr {
                border: 2px dotted #f1f1f1;
                margin-bottom: 20px;
            }
            .footer {
                padding: 16px;
                background-color:#f1f1f1;
                width:50%;
                margin-left:auto;
                margin-right:auto;
            }
        </style>
    </head>
    <body>
        <div class="menu">
            <a href="index_template.php">Home</a>
            <a href="register.php" style="float:right; margin-left:20px">Register</a>
            <a href="login.php" style="float:right">Login</a>
        </div>


        <div class="container">
            <h1 align="center">Home</h1>
            <hr>
            <h3 align="center">Welcome to my blog</h3>
            <br>
{foreach $user as $use}

            <div>
                <p class="text">
                    <b>{$use.id}</b> updated: {$use.updated_at} <br>created:{$use.created_at}<br>
                     <b> text: {$use.content}
                </p>

            </div>
            <hr>
{/foreach}
            <div>
            <hr>

            </div>
            <div class="footer">
                <p style="text-align:left">©️ 2021 Desenvolvimento de Aplicações Web<span style="float:right;">Designed by <u>Inés Gomez</u></span></p>
            </div>

</body></html>

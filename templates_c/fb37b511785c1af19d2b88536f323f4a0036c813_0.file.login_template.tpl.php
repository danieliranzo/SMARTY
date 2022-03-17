<?php
/* Smarty version 3.1.33, created on 2021-11-24 10:11:08
  from 'C:\xampp\htdocs\smarty\templates\login_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_619e01acbc7c38_36299763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb37b511785c1af19d2b88536f323f4a0036c813' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\login_template.tpl',
      1 => 1637745066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619e01acbc7c38_36299763 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html><head>
        <meta charset="UTF-8">
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
            input[type=email], input[type=password] {
                width:100%;
                padding:15px;
                background-color: #f1f1f1;
                margin-top:5px;
                margin-bottom:40px;
                border:none;
            }
            .boton {
                background-color:aqua;
                color: green;
                padding: 20px;
                margin: 8px;
                border: none;
                cursor: pointer;
                width: 16%;
                opacity: 0.5;
            }
            .containerb{
                text-align:center;
            }
            .boton:hover {
                opacity: 1;
            }
      </style>
    </head>
    <body>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="register.php" style="float:right; margin-left:20px">Register</a>
            <a href="login.php" style="float:right">Login</a>
        </div>
        <form action="login_action.php" method="post">
        <div class="container">
            <h1 align="center"> Login </h1>
            <h2><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
            <hr>
            <b>Email</b>
            <br>
            <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"  required>
            <br>
            <b>Password</b>
            <br>
            <input type="password" name="password_digest" id="password_digest"  value="<?php echo $_smarty_tpl->tpl_vars['password_digest']->value;?>
" required>
            <hr>
            <div class="containerb">
                <!-- <center><button type="submit" class="boton">GO</button></center> -->
                <button type="submit" class="boton">GO</button>
                <hr>
            </div>
        </div>
        <div class="footer">
            <p style="text-align:left">©️ 2021 Desenvolvimento de Aplicações Web<span style="float:right;">Designed by <u>Inés Gomez</u></span></p>
 </div>
        </form>

</body></html>

<?php }
}

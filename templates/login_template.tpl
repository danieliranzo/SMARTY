
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
            <h2>{$message}</h2>
            <hr>
            <b>Email</b>
            <br>
            <input type="email" name="email" id="email" value="{$email}"  required>
            <br>
            <b>Password</b>
            <br>
            <input type="password" name="password_digest" id="password_digest"  value="{$password_digest}" required>
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


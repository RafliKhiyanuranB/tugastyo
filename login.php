<?php
    session_start();

    if(isset($_SESSION['email'])){ 
        header("Location: index.php"); 
    }   
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <style>
        * {
            margin: 0;
            padding: 50;
            box-sizing: border-box;
            justify-content: center;
        }
        
        html {
            background: linear-gradient(to right bottom, #fbdb89, #f48982);
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
            background-attachment: fixed;
        }
        
        body {
            font-family: sans-serif;
            line-height: 1.4;
            display: flex;
            padding-top: 10%;
        }
        
        .container {
            width: 400px;
            margin: auto;
            padding: 36px 48px 48px 48px;
            background-color: #f2efee;

        border-radius: 11px;
        box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.15);
        }

        .login-title {
        padding: 15px;
        font-size: 22px;
        font-weight: 600;
        text-align: center;
        }

        .login-form {
        display: grid;
        grid-template-columns: 1fr;
        row-gap: 16px;
        }

        .login-form label {
        display: block;
        margin-bottom: 8px;
        }

        .login-form input {
        width: 100%;
        padding: 1.2rem;
        border-radius: 9px;
        border: none;
        }

        .login-form input:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(253, 242, 233, 0.5);
        }

        .btn--form {
        background-color: #f48982;
        color: #fdf2e9;
        align-self: end;
        padding: 8px;
        }

        .btn,
        .btn:link,
        .btn:visited {
        display: inline-block;
        text-decoration: none;
        font-size: 20px;
        font-weight: 600;
        border-radius: 9px;
        border: none;

        cursor: pointer;
        font-family: inherit;

        transition: all 0.3s;
        }

        button {
        outline: 1px solid #f48982;
        }

        .btn--form:hover {
        background-color: #fdf2e9;
        color: #f48982;
        }

    </style>

<div class="form">
<div class="container">
    <h2 class="login-title">Log in</h2>
    <form class="login-form" action="login-proses.php" method="post">
      <div>
        <label for="email">Email </label>
        <input
               id="email"
               type="email"
               placeholder="me@example.com"
               name="email"
               required
               />
      </div>

      <div>
        <label for="user_password">Password </label>
        <input
               id="user_password"
               type="password"
               placeholder="password"
               name="user_password"
               required
               />
      </div>

      <button class="btn btn--form" type="submit" value="Log in">
        Log in
      </button>
    </form>
</div>
</div>
</body>
</html>

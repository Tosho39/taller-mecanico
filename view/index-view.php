<?php
    if (isset($_SESSION['user_id']) && $_SESSION !== null) {
        header("location: ./?view=dashboard");
    }
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Source Sans Pro', sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            display: flex;
            width: 100%;
            height: 100%;
        }
        .left-section {
            background: #f5f5f5;
            width: 33.33%; /* 1/3 of the screen */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        .right-section {
            width: 66.66%; /* 2/3 of the screen */
            background: url('assets/img/fondo.jpg') no-repeat center center;
            background-size: cover;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            width: 300px;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }
        .login-container p {
            color: #666;
            margin-bottom: 30px;
        }
        .form-group {
            position: relative;
        }
        .form-group i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #aaa;
        }
        .form-control {
            height: 45px;
            padding: 10px 10px 10px 40px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #ff5722;
            border-color: #ff5722;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            color: #fff;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #e64a19;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        .footer a {
            color: #ff5722;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <div class="logo">
                <img src="assets/img/logo.jpeg" alt="Logo">
            </div>
            <div class="login-container">
                <h3>Iniciar Sesión</h3>
                <?php
                if (isset($_GET['invalid'])) {
                    echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                            <strong>Error!</strong> Contraseña o correo electrónico inválido.
                          </div>";
                }
                ?>
                <p>Accede a tu cuenta para continuar</p>
                <form method="post" action="view/resources/login.php">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Correo Electrónico" autofocus>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                    <button name="token" class="btn btn-primary" type="submit">Iniciar Sesión</button>
                </form>
                <div class="footer">
                    <p>¿No tienes una cuenta? <a href="#">Regístrate ahora</a></p>
                    <p><a href="#">¿Olvidaste tu contraseña?</a></p>
                </div>
            </div>
        </div>
        <!-- Right Section -->
        <div class="right-section"></div>
    </div>
    <!--Global JS-->
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

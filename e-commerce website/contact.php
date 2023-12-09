<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js"></script>
</head>

<body>
    <?php include_once("header.php") ?>

    <div class="form-container">
        <img src="images/image1.png" alt="">

        <div class="form">
            <div class="text">
                <p>Login</p>
                <p>Register</p>
            </div>
            <div></div>
            <div class="container">
                <div class="register">
                    <input type="text" placeholder="Username">
                    <input type="email" placeholder="email">
                    <input type="password" placeholder="password">

                    <button>Register</button>
                </div>

                <div class="login">
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="password">

                    <button>Register</button>
                    <p>Forgot Password</p>

                </div>

            </div>
        </div>
    </div>

    <?php include_once("footer.php") ?>



</body>

</html>
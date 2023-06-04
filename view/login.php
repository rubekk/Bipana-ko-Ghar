<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bipana ko Ghar</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    <div class="container">
        <h1><a href="./index.php">Bipana Ko Ghar</a></h1>
        <div class="form">
            <h2>Log In</h2>
            <form action="./../backend/login.php" method="post">
                <div class="inp-group">
                    <div class="inp-label">Email</div>
                    <input type="email" placeholder="example@etc.com" name="email" required>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Password</div>
                    <input type="password" name="password" required>
                </div>
                <button type="submit">Log in</button>
            </form>
            <div class="forgot">
                <a href="./forgot.php">Forgot password?</a>
            </div>
            <div class="register">
                <a href="./register.php">Create an account</a>
            </div>
        </div>
    </div>
</body>
</html>
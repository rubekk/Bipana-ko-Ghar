<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bipana ko Ghar</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">
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
        <h1><a href="./index.php"><span class="blue">Bipana</span> <span class="green">Ko</span> <span class="blue">Ghar</span></a></h1>
        <div class="form">
            <form action="./../backend/forgot.php" method="post">
                <div class="inp-group">
                    <div class="inp-label">Email</div>
                    <input type="email" placeholder="example@etc.com" name="email" required>
                </div>
                <button type="submit">Submit</button>
            </form>
            <div class="forgot">
                <a href="./index.php">Go to home</a>
            </div>
        </div>
    </div>
</body>
</html>
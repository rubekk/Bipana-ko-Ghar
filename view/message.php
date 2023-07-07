<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bipana ko Ghar</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/message.css">
</head>
<body>
    <?php session_start(); ?>
    <!-- header section -->
    <div class="header">
        <div class="left">
        <h1><a href="./index.php"><span class="blue">Bipana</span> <span class="green">Ko</span> <span class="blue">Ghar</span></a></h1>
        </div>
        <div class="right">
            <a href="./explore.php">Explore</a>
            <?php if($_SESSION && $_SESSION['loggedin']==true) { ?>
                <a href="./upload.php">Upload</a>
                <span><?php echo $_SESSION['username']; ?></span>
                <a class="login" href="./../backend/logout.php">Log Out</a>
            <?php } else { ?>
                <a href="./login.php">Upload</a>
                <a class="login" href="./login.php">Log In</a>
            <?php } ?>
        </div>
    </div>

    <div class="message">
        <?php
            if(isset($_GET['message'])){
                switch ($_GET['message']){
                    case 'registered': 
                        echo "<p class='msg'>Registered</p>";
                        break;
                    case 'notregistered': 
                        echo "<p class='msg'>Not Registered</p>";
                        break;
                    case 'notloggedin': 
                        echo "<p class='msg'>Not logged in</p>";
                        break;
                    case 'uploaded': 
                        echo "<p class='msg'>uploaded</p>";
                        break;
                    case 'notuploaded': 
                        echo "<p class='msg'>Not uploaded</p>";
                        break;
                    default:
                        echo "<p class='msg'>default</p>";
                }
            }
        ?>
        <!-- property uploaded, user registered, log in incorrect, registration failed
        Your property is uploaded successfully and live on our site. View the property.
        
        User registered successfully. Log in -->
    </div>

    <!-- footer section -->
    <div class="footer">
        <p>Copyright C 2023</p>
    </div>
</body>
</html>
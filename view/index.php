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
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>
    <?php session_start(); ?>
    <!-- header section -->
    <div class="header">
        <div class="left">
        <h1><a href="./index.php">Bipana Ko Ghar</a></h1>
        </div>
        <div class="right">
            <a href="./explore.php">Explore</a>
            <a href="./upload.php">Upload</a>
            <?php if($_SESSION && $_SESSION['loggedin']==true) { ?>
                <span><?php echo $_SESSION['username']; ?></span>
                <a class="login" href="./../backend/logout.php">Log Out</a>
            <?php } else { ?>
                <a class="login" href="./login.php">Log In</a>
            <?php } ?>
        </div>
    </div>

    <!-- search section -->
    <div class="search">
        <p class="slogan">अब सपनामा होइन बिपनामा घर किन्नुहोस !!</p>
        <div class="inp">
            <input type="text" placeholder="Godawari Bus park">
            <i class="fa-solid fa-search"></i>
        </div>
    </div>

    <!-- recent listings section -->
    <div class="recent-listings">
        <h3>Recent Listings</h3>
        <div class="recent-listings-inner">
            <div class="ind-listing">
                <div class="listing-img">
                    <img src="./imgs/kathmandu.jpg" alt="">
                </div>
                <div class="listing-text">
                    <div class="listing-name">Imadole, Mahalaxmi</div>
                    <div class="row">
                        <div class="text-left">
                            <div class="listing-price">Rs. 4500000 per aana</div>
                            <div class="listing-area"><span>area:</span> 0-3-2-0</div>
                        </div>
                        <button class="view-btn">View</button>
                    </div>
                </div>
            </div>
            <div class="ind-listing">
                <div class="listing-img">
                    <img src="./imgs/kathmandu.jpg" alt="">
                </div>
                <div class="listing-text">
                    <div class="listing-name">Imadole, Mahalaxmi</div>
                    <div class="row">
                        <div class="text-left">
                            <div class="listing-price">Rs. 4500000 per aana</div>
                            <div class="listing-area"><span>area:</span> 0-3-2-0</div>
                        </div>
                        <button class="view-btn">View</button>
                    </div>
                </div>
            </div>
            <div class="ind-listing">
                <div class="listing-img">
                    <img src="./imgs/kathmandu.jpg" alt="">
                </div>
                <div class="listing-text">
                    <div class="listing-name">Imadole, Mahalaxmi</div>
                    <div class="row">
                        <div class="text-left">
                            <div class="listing-price">Rs. 4500000 per aana</div>
                            <div class="listing-area"><span>area:</span> 0-3-2-0</div>
                        </div>
                        <button class="view-btn">View</button>
                    </div>
                </div>
            </div>
            <div class="ind-listing">
                <div class="listing-img">
                    <img src="./imgs/ktm.jpg" alt="">
                </div>
                <div class="listing-text">
                    <div class="listing-name">Imadole, Mahalaxmi</div>
                    <div class="row">
                        <div class="text-left">
                            <div class="listing-price">Rs. 4500000 per aana</div>
                            <div class="listing-area"><span>area:</span> 0-3-2-0</div>
                        </div>
                        <button class="view-btn">View</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="see-more">
            <button class="see-more-btn">
                <a href="./explore.php">See more</a>
            </button>
        </div>
    </div>

    <!-- footer section -->
    <div class="footer">
        <p>Copyright C 2023</p>
    </div>
</body>
</html>
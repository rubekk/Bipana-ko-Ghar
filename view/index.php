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
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/index.css">
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

    <!-- search section -->
    <div class="search">
        <p class="slogan" data-aos="fade-up" data-aos-duration="1500">अब सपनामा होइन बिपनामा घर किन्नुहोस !!</p>
        <form action="./explore.php" method="get" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500">
            <div class="inp-row">
                <div class="inp-group area">
                    <div class="inp-label">Area</div>
                    <input type="text" placeholder="0-4-2-0 (r-a-p-d)" name="area">
                </div>
                <div class="inp-group price">
                    <input type="number" placeholder="Maximum price" name="price">
                    <div class="inp-label">Price</div>
                </div>
            </div>
            <div class="inp-row">
                <input class="location-inp" type="text" placeholder="Imadole" name="location">
                <button class="submit-btn" type="submit"><i class="fa-solid fa-search"></i></button>
            </div>
        </form>
    </div>

    <!-- recent listings section -->
    <div class="recent-listings">
        <h3>Recent Listings</h3>
        <div class="recent-listings-inner">
            <?php
                include "./../backend/connection.php";
                include "./../backend/filter.php";

                $data=getAllData($connection);
                
                if($data){
                    $num=4;
                    if(count($data)>4) $num=4;
                    else $num=count($data);

                    for($i=0; $i<$num; $i++){
                        if(!(count($data)<4 && $i>3)){
                            $pid=$data[$i]['pid'];
                            $address=$data[$i]['address'];
                            $area=$data[$i]['area'];
                            $price=$data[$i]['price'];
                            $thumbnailPath=$data[$i]['imgPath'];

                            echo '<div class="ind-listing">
                                <div class="listing-img">
                                    <img src=' .$thumbnailPath. ' alt="">
                                </div>
                                <div class="listing-text">
                                    <div class="listing-name">'. $address .'</div>
                                    <div class="row">
                                        <div class="text-left">
                                        <div class="listing-price"> Rs. '. $price .' per aana</div>
                                        <div class="listing-area"><span>area:</span>'. $area .'</div>
                                    </div>
                                        <button class="view-btn"><a href="./listing.php?pid=' .$pid. '">View</a></button>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                }
                else{
                    echo "Sorry, no property listings to show";
                }
            ?>
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
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
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/listing.css">
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

    <!-- property detail section -->
    <div class="property-detail">
        <?php
            include "./../backend/connection.php";
            include "./../backend/listing.php";

            if(isset($_GET['pid']) && $_GET['pid']) {
                $result=filterById($connection, $_GET['pid']);
                
                $imgs=$result['imgs'];


                echo ' <h2 class="property-title">'. $result["pname"] .'</h2>
                        <div class="property-imgs">
                            <div class="img-slider">
                                <img class="slider-img" src="./imgs/kathmandu.jpg" alt="">
                            </div>
                            <div class="imgs">';

                foreach($imgs as $img) echo '<img class="small-img" src="'. $img["imgpath"] .'" alt="">';

                echo '</div>
                        </div>
                        <h3 class="property-detail-txt">Property detail</h3>
                        <div class="property-info">
                            <div>Address: <span>'. $result["address"] .'</span></div>
                            <div>Area (r-a-p-d): <span>'. $result["area"] .'</span></div>
                            <div>Price per aana: <span>'. $result["price"] .'</span></div>
                            <div>Uploaded by: <span>'. $result["uname"] .'</span></div>
                            <div>Contact: <span>'. $result["phone"] .'</span></div>
                            <div>Listed on: <span>'. $result["uploadedon"] .'</span></div>
                            <div>Description: <span>'. $result["info"] .'</span></div>
                        </div>
                        <div class="map">
                            <h3>Property location</h3>
                            <div id="map" lat="'. $result["latitude"] .'" long="'. $result["longitude"] .'"></div>
                        </div>';
            }
        ?>
    </div>

    <!-- footer section -->
    <div class="footer">
        <p>Copyright C 2023</p>
    </div>

    <script src="./js/listing.js"></script>
</body>
</html>
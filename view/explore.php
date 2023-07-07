<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore - Bipana Ko Ghar</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/explore.css">
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

    <!-- filter section -->
    <div class="filter">
        <div class="filter-top">
            <div class="filters-txt"><i class="fa-solid fa-sliders"></i> Filters</div>
        </div>
        <div class="filter-bottom hide">
            <form action="./explore.php" method="get">
            <div class="inp-row">
                <div class="inp-group">
                    <div class="inp-label col-1">Location: </div>
                    <input type="text" placeholder="eg: koteshwor" name="location" value="<?php echo isset($_GET['location'])?$_GET['location']:"" ?>">
                </div>
                <div class="inp-group">
                    <div class="inp-label">Area: </div>
                    <input type="text" placeholder="0-4-2-0 (r-a-p-d)" name="area" value="<?php echo isset($_GET['area'])?$_GET['area']:"" ?>">
                </div>
            </div>
            <div class="inp-row">
                <div class="inp-group">
                    <div class="inp-label col-1">Price: </div>
                    <input type="number" placeholder="Maximum price" name="price" value="<?php echo isset($_GET['price'])?$_GET['price']:"" ?>">
                </div>
                <div class="submit">
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- listing section -->
    <div class="listing">
        <?php
            include "./../backend/connection.php";
            include "./../backend/filter.php";
            
            if(isset($_GET['location']) && isset($_GET['price']) && isset($_GET['area']) && $_GET['location'] && $_GET['price'] && $_GET['area']){
                $data=refineLocation($connection, $_GET['location'], $_GET['area'], $_GET['price']);
            }
            else if(isset($_GET['location']) && isset($_GET['area']) && $_GET['location'] && $_GET['area']){
                $data=refineLocation($connection, $_GET['location'], $_GET['area']);
            }
            else if(isset($_GET['location']) && isset($_GET['price']) && $_GET['location'] && $_GET['price']){
                $data=refineLocation($connection, $_GET['location'], NULL, $_GET['price']);
            }
            else if(isset($_GET['area']) && isset($_GET['price']) && $_GET['area'] && $_GET['price']){
                $data=filterByAreaPrice($connection, $_GET['area'], $_GET['price']);
            }
            else if(isset($_GET['location']) && $_GET['location']){
                $data=refineLocation($connection, $_GET['location']);
            }
            else if(isset($_GET['area'])  && $_GET['area']){
                $data=filterByArea($connection, $_GET['area']);
            }
            else if(isset($_GET['price']) && $_GET['price']){
                $data=filterByPrice($connection, $_GET['price']);
            }
            else {
                $data=getAllData($connection);
            }

            if(gettype($data)=='array' && count($data)){  
                for($i=0; $i<count($data); $i++){
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
            else echo "Sorry, no listings found!";
        ?>
    </div>

    <!-- footer section -->
    <div class="footer">
        <p>Copyright C 2023</p>
    </div>

    <script src="./js/explore.js"></script>
</body>
</html>
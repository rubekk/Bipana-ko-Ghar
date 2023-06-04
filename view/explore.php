<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore - Bipana Ko Ghar</title>
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
    <!-- header section -->
    <div class="header">
        <div class="left">
            <h1><a href="./index.php">Bipana Ko Ghar</a></h1>
        </div>
        <div class="right">
            <a href="./explore.php">Explore</a>
            <a href="./upload.php">Upload</a>
            <a class="login" href="./login.php">Log In</a>
        </div>
    </div>

    <!-- filter section -->
    <div class="filter">
        <div class="filter-top">
            <div class="filters-txt"><i class="fa-solid fa-sliders"></i> Filters</div>
            <div class="sort-by">
                <div class="sort-by-txt">Sort by:</div>
                <select name="" id="">
                    <option value="">Best match</option>
                    <option value="">Price low to high</option>
                    <option value="">Price high to low</option>
                </select>
            </div>
        </div>
        <div class="filter-bottom hide">
            <div class="inp-row">
                <div class="inp-group">
                    <div class="inp-label">Location: </div>
                    <input type="text" placeholder="eg: koteshwor" name="location">
                </div>
                <div class="inp-group">
                    <div class="inp-label">Area: </div>
                    <input type="text" placeholder="0-4-2-0 (r-a-p-d)" name="area">
                </div>
            </div>
            <div class="inp-row">
                <div class="price-inp">
                    <div class="price-txt">Price: </div>
                    <div class="min-max">
                        <div class="inp-group">
                            <div class="inp-label">Min: </div>
                            <input type="number"  name="min">
                        </div>
                        <div class="inp-group">
                            <div class="inp-label">Max: </div>
                            <input type="number"  name="max">
                        </div>
                    </div>
                </div>
                <div class="submit">
                    <button class="submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- listing section -->
    <div class="listing">
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
    </div>

    <!-- footer section -->
    <div class="footer">
        <p>Copyright C 2023</p>
    </div>

    <script src="./js/explore.js"></script>
</body>
</html>
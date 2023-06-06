<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload - Bipana ko Ghar</title>
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
    <link rel="stylesheet" href="./style/upload.css">
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

    <!-- upload section -->
    <div class="upload">
        <h3>Details about property</h3>
        <form action="./../backend/upload.php" method="post">
            <div class="inp-row">
                <div class="inp-group">
                    <div class="inp-label">Property name:</div>
                    <input type="text" placeholder="eg: godawari house for sale" name="pname" required>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Address:</div>
                    <input type="text" placeholder="eg: godawari" name="address" required>
                </div>
            </div>
            <div class="inp-row">
                <div class="inp-group">
                    <div class="inp-label">Area (r-a-p-d):</div>
                    <input type="text" placeholder="eg: 0-3-2-0" name="area" required>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Price per aana:</div>
                    <input type="text" placeholder="eg: 4500000" name="price" required>
                </div>
            </div>
            <div class="inp-row start">
                <div class="inp-group">
                    <div class="inp-label">Additional info:</div>
                    <textarea name="info" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Upload images:</div>
                    <input type="file" name="images" multiple required>
                </div>
            </div>
            <div class="map">
                <div class="inp-label">Select the location on map:</div>
                <div id="map"></div>
            </div>
            <div class="submit">
                <button class="submit-btn">Submit</button>
            </div>
        </form>
    </div>

    <!-- footer section -->
    <div class="footer">
        <p>Copyright C 2023</p>
    </div>

    <script src="./js/map.js"></script>
</body>
</html>
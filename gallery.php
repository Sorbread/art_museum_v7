<!-- 
    gallery.php
    Showcases museums pictures.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel's Museum</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/images.css">
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="box">
        <div class="background_img" id="japanese_footbridge"></div>
        <div class="welcome">
            <h1 class="maori">kitea</h1> 
            <h1>Discover</h1> 
        </div>
    </div>
    <div class="box gallery">
        <a href="./a_poet_reading.php">
            <div class="image_box">
                <div class="image" id="a_poet_reading"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
            </div>
        </a>
        <a href="./an_eastern_ruler_seated.php">
            <div class="image_box">
                <div class="image" id="eastern_ruler_seated"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
        </a>
        <a href="./david_with_the_head.php">
            <div class="image_box">
                <div class="image" id="david_with_head"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
            </div>
        </a>
    </div>

    <?php include "footer.php"; ?>

</body>
</html>
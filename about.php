<!-- 
    about.php
    Displays who we are, where our art comes from and contact links.
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
    <!-- Image needs to be seperated to allow text to not be blurred -->
    <div class="box">
        <div class="background_img" id="mass_at_dordrecht"></div>
        <div class="welcome">
            <h1 class="maori">Mō</h1> 
            <h1>About</h1> 
        </div>
    </div>
    <!-- Who are we? -->
    <div class="box information_box medium">
        <div class="text"> 
            <h1>Who are we?</h1>
            <p>Formed in 1996, we Fusce risus eros, cursus eu fringilla id, placerat eu turpis.
             Nullam augue nunc, vulputate sit amet consectetur non, vestibulum ut velit. 
             Ut luctus elit sem, id molestie est molestie efficitur. 
             In dictum nulla fermentum, lobortis leo sed, vulputate magna. 
             Suspendisse potenti. Curabitur tempor arcu ut sem congue, vitae posuere odio finibus.
            </p>
        </div>
        <!-- Image fitted to the right -->
        <div class="image" id="eastern_ruler_seated"></div>
    </div>
    <!-- Where does our art come from? -->
    <!-- "reverse_information_box" is just an addon to information box styling, so formats as 'img'-'text' -->
    <div class="box information_box reverse_information_box medium">
        <div class="text"> 
            <h1>Where does our art come from?</h1>
            <p>Originally from NZ, we Fusce risus eros, cursus eu fringilla id, placerat eu turpis.
             Nullam augue nunc, vulputate sit amet consectetur non, vestibulum ut velit. 
             Ut luctus elit sem, id molestie est molestie efficitur. 
             In dictum nulla fermentum, lobortis leo sed, vulputate magna. 
             Suspendisse potenti. Curabitur tempor arcu ut sem congue, vitae posuere odio finibus.
            </p>
        </div>
        <div class="image" id="david_with_head"></div>
    </div>
    <!-- Want to join the museum? -->
    <div class="box information_box medium">
        <div class="text"> 
            <h1>Want to join the museum art catalogue?</h1>
            <p>
                Please email us at: [cc22@gmail.com]<br>
                We try to respond Fusce risus eros, cursus eu fringilla id, placerat eu turpis.
                Nullam augue nunc, vulputate sit amet consectetur non, vestibulum ut velit. 
                Ut luctus elit sem, id molestie est molestie efficitur. 
                In dictum nulla fermentum, lobortis leo sed, vulputate magna. 
                Suspendisse potenti. Curabitur tempor arcu ut sem congue, vitae posuere odio finibus
            </p>
        </div>
        <div class="image" id="a_poet_reading"></div>
    </div>
    
    <?php include "footer.php"; ?>
</body>
</html>
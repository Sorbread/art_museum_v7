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
    <!-- Welcome message -->
    <div class="box">
        <!-- Image needs to be seperated to allow text to not be blurred -->
        <div class="background_img" id="scenes_from_the_passion"></div>
        <div class="welcome">
            <h1 class="maori">Whakapā</h1> 
            <h1>Contact</h1> 
        </div>
    </div>
    <!-- Careers -->
    <div class="box information_box medium">
        <div class="text"> 
            <h2>Careers</h2>
            <p class="less_importance">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Fusce risus eros, cursus eu fringilla id, placerat eu turpis.
             Nullam augue nunc, vulputate sit amet consectetur non, vestibulum ut velit. 
             Ut luctus elit sem, id molestie est molestie efficitur. 
             In dictum nulla fermentum, lobortis leo sed, vulputate magna. 
             Suspendisse potenti. Curabitur tempor arcu ut sem congue, vitae posuere odio finibus. 
            </p>
        </div>
        <div class="image" id="a_poet_reading"></div>
    </div>
    <!-- Contact Links -->
    <div class="box information_box reverse_information_box medium">
        <div class="text"> 
            <h2>Contact Links:</h2>
            <p class="less_importance">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Fusce risus eros, cursus eu fringilla id, placerat eu turpis.
             Nullam augue nunc, vulputate sit amet consectetur non, vestibulum ut velit. 
             Ut luctus elit sem, id molestie est molestie efficitur. 
             In dictum nulla fermentum, lobortis leo sed, vulputate magna. 
             Suspendisse potenti. Curabitur tempor arcu ut sem congue, vitae posuere odio finibus. 
            </p>
        </div>
        <div class="image" id="eastern_ruler_seated"></div>
    </div>
    
    <?php include "footer.php"; ?>
</body>
</html>
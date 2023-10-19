<!-- 
    index.php
    Welcome page for website.
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
    <!-- Navbar -->
    <?php include "navbar.php"; ?>
    <!-- Welcome Message -->
    <div class="box">
        <!-- Image needs to be seperated to allow text to not be blurred -->
        <div class="background_img" id="niagara"></div>
        <div class="welcome">
            <h1 class="maori">Haere Mai</h1> 
            <h1>Welcome</h1> 
        </div>
    </div>
    <!-- Footer -->
    <?php include "footer.php"; ?>
</body>
</html>
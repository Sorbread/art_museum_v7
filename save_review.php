<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel's Museum</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/images.css">
    <link rel="stylesheet" href="./css/review.css">

</head>
<body>
<?php include "./navbar.php"; ?>
<div class="main">
    <?php
        $review_title = $_POST["review_title"];
        $review_description = $_POST["review_description"];
        $review_rating = $_POST["review_rating"];
        $artwork_id = $_POST["artwork_id"];
        $email = $_POST["email"];  
        if (empty($review_title) || empty($review_rating) || empty($artwork_id)) {

            echo "Error Occured";
            if (mysqli_connect_error()) {
                
                die("Connect Error ('".mysqli_connect_errno().")".mysqli_connect_error());
            }


        } else {
            $INSERT = "INSERT Into art_reviews (review_title, review_description, review_rating, email,artwork_id) 
            values (?,?,?,?,?)";
            $stmt = $db_connect->prepare($INSERT);
            $stmt->bind_param("ssiss",$review_title,$review_description,$review_rating,$email,$artwork_id);
            $stmt->execute();
            $stmt->close();
            
        }
    ?>
</div>
<?php include "./footer.php"; ?>
</body>
</html>
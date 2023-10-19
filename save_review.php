<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character encoding for the document -->
    <meta charset="UTF-8">

    <!-- Ensure compatibility with Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE edge">

    <!-- Define the viewport for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Set the page title -->
    <title>Daniel's Museum</title>

    <!-- Link to external CSS files for styling -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/images.css">
    <link rel="stylesheet" href="./css/review.css">
</head>
<body>
    <!-- Include the navigation bar from an external PHP file -->
    <?php include "./navbar.php"; ?>

    <div class="main">
        <?php
        // Retrieve form data
        $review_title = $_POST["review_title"];
        $review_description = $_POST["review_description"];
        $review_rating = $_POST["review_rating"];
        $artwork_id = $_POST["artwork_id"];
        $email = $_POST["email"];

        // Check for required fields
        if (empty($review_title) || empty($review_rating) || empty($artwork_id)) {
            // Display an error message if required fields are not filled
            echo "Error Occurred";
            
            // Check for database connection errors
            if (mysqli_connect_error()) {
                die("Connect Error ('" . mysqli_connect_errno() . ") " . mysqli_connect_error());
            }
        } else {
            // Prepare and execute an SQL INSERT statement
            $INSERT = "INSERT Into art_reviews (review_title, review_description, review_rating, email, artwork_id) values (?,?,?,?,?)";
            $stmt = $db_connect->prepare($INSERT);
            $stmt->bind_param("ssiss", $review_title, $review_description, $review_rating, $email, $artwork_id);
            $stmt->execute();
            $stmt->close();
        }
        ?>
    </div>

    <!-- Include the footer from an external PHP file -->
    <?php include "./footer.php"; ?>
</body>
</html>

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
    <?php include "navbar.php"; ?>

    <!-- Create a wrapper for the review section -->
    <div class="review_wrapper"> 

        <!-- Main content box -->
        <div class="box main">
            <?php 
            // Initialize search and order variables
            $search_string = "";
            $order_string = "ORDER BY `art_reviews`.`review_title` ASC";

            // Check if there is any POST data
            if (!empty($_POST)) {
                foreach($_POST as $key=>$value) {
                    // Skip empty values and 'bounds' key
                    if ($value == "" || $key == "bounds") {
                        continue;
                    } 
                    
                    // Process the 'review_rating' input
                    if ($key == "review_rating") {
                        // Sanitize and escape user input
                        $value = text_input(mysqli_real_escape_string($db_connect, $value));
                        $bound = $_POST["bounds"];
                        if ($search_string == "") {
                            $search_string .= " WHERE `$key` $bound $value ";
                        } else {
                            $search_string .= " AND `$key` $bound $value ";
                        }
                        continue;
                    }

                    // Process other input fields
                    $value = text_input(mysqli_real_escape_string($db_connect, $value));

                    // Check if the input is for ordering
                    if ($key == "order") {
                        $order_string = $value;
                        continue;
                    }

                    // Build the search string for other fields
                    if ($search_string == "") {
                        $search_string .= " WHERE `$key` LIKE '%$value%' ";
                    } else {
                        $search_string .= " AND `$key` LIKE '%$value%' ";
                    }
                }
            }

            // Construct the SQL query for displaying reviews
            $show_all = "SELECT `review_title`, `review_description`, `review_rating`, `date_posted`, `artwork_id` FROM `art_reviews`  $search_string $order_string;";
            $show_all_query = mysqli_query($db_connect, $show_all);
            $show_all_rs = mysqli_fetch_assoc($show_all_query);
            $count = mysqli_num_rows($show_all_query);
            
            // Include a PHP file to display the reviews
            include 'show_all.php';
            ?>
        </div> <!-- /main -->

        <!-- Side content box for creating reviews and searching -->
        <div class="box side create_review">
            <h2><a disabled>Search</a> | Show Main</h2>
            <p>Type part of your title/author name and then search</p>
            <hr />

            <!-- Create a form for searching reviews -->
            <form method="POST" enctype="multipart/form-data">
                <!-- Input field for searching by review title -->
                <input class="search" type="text" name="review_title" size="40" value="" placeholder="Review Title..."></input>
                <input class="submit" type="submit" value="Search"></input>

                <!-- Input field for searching by review description -->
                <input class="search" type="text" name="review_description" size="40" value="" placeholder="Review Description..."></input>
                <input class="submit" type="submit" value="Search"></input>

                <!-- Dropdown for filtering by review rating and associated search button -->
                <div class="rating">
                    <select id="rating_bound" name="bounds" class="search">
                        <option value=">">Greater Than...</option>
                        <option value="<">Less Than...</option>
                        <option value="=">Equal To...</option>
                    </select>
                    <select id="review_rating" name="review_rating" class="search">
                        <option disabled selected>Rating...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input class="submit" type="submit" value="Search"></input>

                    <!-- Dropdown for ordering and associated search button -->
                    <select id="order" name="order" class="search">
                        <option disabled selected>Order By...</option>
                        <option value="ORDER BY `date_posted` DESC">Oldest-Youngest</option>
                        <option value="ORDER BY `date_posted` ASC">Youngest-Oldest</option>
                        <option value="">Any</option>
                    </select>
                    <input class="submit" type="submit" value="Search"></input>
                </div>
            </form>
        </div>    <!-- /side -->
    </div>

    <!-- Include the footer from an external PHP file -->
    <?php include "footer.php"; ?>
</body>
</html>

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
    <!-- Navbar -->
    <?php include "navbar.php"; ?>
    <div class="review_wrapper"> 
    <div class = "box main">
            <?php 
            $search_string = "";  
            $order_string = "ORDER BY `art_reviews`.`review_title` ASC";
            if (!empty($_POST)) {
                
                foreach($_POST as $key=>$value) {
                    
                    if ($value == "" || $key == "bounds") {
                        continue;
                    } 
                    
                    if ($key == "review_rating") {
                        $value = text_input(mysqli_real_escape_string($db_connect,$value));
                        $bound = $_POST["bounds"];
                        if ($search_string == "") {
                            $search_string .= " WHERE `$key` $bound $value ";
                        } else {
                            $search_string .= " AND `$key` $bound $value ";
                        }
                        continue;
                    }

                    $value = text_input(mysqli_real_escape_string($db_connect,$value));
                    if ($key == "order") {
                        $order_string = $value;
                        continue;
                    }
                    if ($search_string == "") {
                        $search_string .= " WHERE `$key` LIKE '%$value%' ";
                    } else {
                        $search_string .= " AND `$key` LIKE '%$value%' ";
                    }
                    
                }
                
            }
            $show_all = "SELECT `review_title`,`review_description`,`review_rating`,`date_posted`,`artwork_id` FROM `art_reviews`  $search_string $order_string;";
                $show_all_query = mysqli_query($db_connect,$show_all);
                $show_all_rs = mysqli_fetch_assoc($show_all_query);
                $count = mysqli_num_rows($show_all_query);
                
                include 'show_all.php';
        ?>
        </div> <!-- /main --> 
        
        <div class="box side create_review">
            <h2><a disabled>Search</a> | Show Main</h2>
            <p>Type part of your title/author name and then search</p>
            <hr />
            <form method="POST" enctype="multipart/form-data">
                <input class="search" type="text" name="review_title" size="40" value="" placeholder="Review Title..."></input>
                <input class="submit" type="submit" value="Search"></input>

                <input class="search" type="text" name="review_description" size="40" value="" placeholder="Review Description..."></input>
                <input class="submit" type="submit" value="Search"></input>

                
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
    <?php include "footer.php"; ?>
</body>
</html>

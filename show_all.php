<!-- Display a heading with the count of found items -->
<h1>Found Items: (<?php echo $count?>)</h1>

<?php 
    // Check if there are no items found
    if (!$count){
        echo "None";
        return; // Exit the code block if no items are found
    }
    // Start a loop to display each found item
    do{
?>
<div class="results">

    <!-- Display the title of the review -->
    <p>Title: <span class="sub_heading"><?php echo $show_all_rs["review_title"];?></span></p>

    <!-- Display the description of the review -->
    <p>Description: <span class="sub_heading"><?php echo $show_all_rs["review_description"];?></span></p>

    <!-- Display the rating of the review using star icons -->
    <p>Rating: <span class="sub_heading"><?php 
    $amount = $show_all_rs["review_rating"];
    $f = "";
    // Generate star icons based on the review rating
    foreach(range(0,$amount-1) as $i) {
        $f .= "⭐";
    }
    echo "$f";
    ?></span></p>

    <!-- Display the date the review was posted -->
    <p>Posted: <span class="sub_heading"><?php echo $show_all_rs["date_posted"];?></span></p>

    <!-- Display the art piece ID associated with the review -->
    <p>For Art Piece: <span class="sub_heading"><?php echo $show_all_rs["artwork_id"];?></span></p>

</div> <!-- /results --> 

<?php 
    // Continue the loop until all items have been displayed
    }
    while($show_all_rs = mysqli_fetch_assoc($show_all_query));
?>

<h1>Found Items: (<?php echo $count?>)</h1>
<?php 
    if (!$count){
        echo "None";
        return;
    }
    do{
?>
<div class = "results">

    <p>Title: <span class="sub_heading"><?php echo $show_all_rs["review_title"];?></span></p>
    <p>Description: <span class="sub_heading"><?php echo $show_all_rs["review_description"];?></span></p>
    <p>Rating: <span class="sub_heading"><?php 
    $amount = $show_all_rs["review_rating"];
    $f = "";
    foreach(range(0,$amount-1) as $i) {
        $f .= "⭐";
    }
    echo "$f";
    ?></span></p>
    <p>Posted: <span class="sub_heading"><?php echo $show_all_rs["date_posted"];?></span></p>
    <p>For Art Piece: <span class="sub_heading"><?php echo $show_all_rs["artwork_id"];?></span></p>

</div> <!-- /main --> 

<?php 
        }
    while($show_all_rs=mysqli_fetch_assoc($show_all_query));
?>
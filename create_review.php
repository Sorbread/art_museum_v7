<form method="POST" enctype="multipart/form-data" action="save_review.php" >
    <div class="create_review">
        <h1>Create Review for this Piece</h1>
    <input class="search" type="text" name="review_title" size="40" value="" placeholder="Title..." required maxlength="125"></input>
    <textarea id="review_description" name="review_description" rows="4" cols="50" placeholder="Description..." maxlength="1000"></textarea>
    <input class="search" type="email" name="email" size="40" value="" placeholder="Email..." maxlength="100"></input>

        <select id="review_rating" name="review_rating" class="search" required>
            <option disabled selected value="" placeholder="Rating...">Rating...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    <input type="hidden" id="artwork_id" name="artwork_id" value="<?php echo substr(basename($_SERVER['PHP_SELF']),0,-4);?>"></input>
    <input class="submit" type="submit" value="Submit"></input>
</div>
</form>
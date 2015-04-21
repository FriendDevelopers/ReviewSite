<html>
<?php $name="Pizza Hut"; $starNumber=4.5; $reviewCount=58;?>
<div class="content-container">

    <div class="name-ratings-container">
        <span class="name"><i><?php echo $name  ?></i></span>
        <span class="ratings">
            <?php
            for($x=1;$x<=$starNumber;$x++) {
                echo '<img src="../image/star.ico" />';
            }
            if (strpos($starNumber,'.')) {
                echo '<img src="../image/star_half.ico" />';
                $x++;
            }

            while ($x<=5) {
                echo '<img src="../image/star_empty.ico" />';
                $x++;
            }
            ?>
        </span>
    </div>

    <div>
        <span class="details"><?php echo $reviewCount ?> reviews</span>
        <br>
        <br>
    </div>

    <div class="image-gallery">
        <img src="../image/image01.jpg" width="200" height="200" />
        <img src="../image/image02.jpg" width="200" height="200" />
        <img src="../image/image03.jpg" width="200" height="200" />
        <img src="../image/image04.jpg" width="200" height="200" />
    </div>

    <div class="review-container">
        <div>
            <br>
            <span class="review-container-title"><i>Recommended Reviews</i></span>
            <br><br>
        </div>
        <div>
            <img src="../image/image02.jpg" align="top" alt="no image available" width="60" height="60" />
            <span class="review-title">WOW!!</span>
            <span class="ratings" style="width: 800px">
            <?php
            $starNumber=3;
            for($x=1;$x<=$starNumber;$x++) {
                echo '<img src="../image/star.ico" />';
            }
            if (strpos($starNumber,'.')) {
               echo '<img src="../image/star_half.ico" />';
                $x++;
            }

            while ($x<=5) {
                echo '<img src="../image/star_empty.ico" />';
                $x++;
            }
            ?>
            </span>
            <div style="width: 800px">
                <span class="details"><p>This is an excellent new spot in an area of town that I would currently call "frontier."
                I live blocks away and while I love it there aren't that many wonderful restaurants that ventures out to 24th.
                Whether to attract-cum-hipster crowd or simply to get low rents this place is in the Vanguard in many ways.</p>
                </span>
            </div>
        </div>
        <div>
            <img src="../image/image04.jpg" align="top" alt="no image available" width="60" height="60" />
            <span class="review-title">Amazing Experience :)</span>
            <span class="ratings" style="width: 800px">
            <?php
            $starNumber=3.5;
            for($x=1;$x<=$starNumber;$x++) {
                echo '<img src="../image/star.ico" />';
            }
            if (strpos($starNumber,'.')) {
                echo '<img src="../image/star_half.ico" />';
                $x++;
            }

            while ($x<=5) {
                echo '<img src="../image/star_empty.ico" />';
                $x++;
            }
            ?>
            </span>
            <div style="width: 800px">
                <span class="details"><p>Casual yet classy...with high quality dishes.  It was a bit disappointing when they ran out of the
                        foie-ly salad and stuffed trout, but I'm not gonna ding'em for that cause I know I'll be back to try that next time.
                        I ordered a flight of rose and...</p>
                </span>
            </div>
        </div>
    </div>

</div>


</html>
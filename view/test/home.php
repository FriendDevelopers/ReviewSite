<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link href="/ReviewSite/css/homestyle.css" media="all" type="text/css" rel="stylesheet">
</head>

<body>
<div class="pageLayout">
    <div class="myReview clearfix">
        <h2>Write Your Review</h2>
        <div class="propic">

        </div>
        <div class="myReview-content">
            <div class="main-container review-widget review-widget--decorated">
                <form method="POST" action="#">
                    <div class="review-stars clearfix">
                        <fieldset class="star-rating-widget inline-block" data-component-bound="true">
                            <legend class="offscreen">Rating</legend>
                            <ul class="stars-0">
                                <li>
                                    <input type="radio" value="1" name="rating" id="rating-1">
                                    <label for="rating-1"></label>
                                </li>
                                <li>
                                    <input type="radio" value="2" name="rating" id="rating-2">
                                    <label for="rating-2"></label>
                                </li>
                                <li>
                                    <input type="radio" value="3" name="rating" id="rating-3">
                                    <label for="rating-3"></label>
                                </li>
                                <li>
                                    <input type="radio" value="4" name="rating" id="rating-4">
                                    <label for="rating-4"></label>
                                </li>
                                <li>
                                    <input type="radio" value="5" name="rating" id="rating-5">
                                    <label for="rating-5"></label>
                                </li>
                            </ul>
                            <p class="description"></p>
                        </fieldset>


                        <div style="display:none" class="auto-save" data-component-bound="true">
                            <small><span class="js-save-link pseudoLink">Save Now</span></small>
                            <small data-component-bound="true" class="saving-msg" style="display: none;"></small>
                        </div>
                    </div>

                    <input type="hidden" value="ynra-homepage" name="review_origin">

                    <div class="review-textbox">
                        <textarea autocomplete="off" class="review-textarea expanded placeholder" data-component-bound="true" style="height: 182px;">Start your review...</textarea>
                        <div class="hidden-text-measurer" data-component-bound="true" style=""><br><br><br></div>
                    </div>

                    <div class="post-review-actions clearfix yform">
                        <div class="pull-left">
                            <a id="js_6f" class="UFICommentStickerButton" data-reactid=".gb.1:4.0.$right.0.0.0.1.1" href="#" data-tooltip-alignh="center" data-hover="tooltip" aria-label="Post a sticker">
                                <div class="UFICommentStickerIcon" data-reactid=".gb.1:4.0.$right.0.0.0.1.1.0" tabindex="0">
                                </div>
                            </a>

                        </div>
                        <div class="action-buttons" data-component-bound="true" style="display: block;">
                            <a class="cancel" href="javascript:;">Cancel</a>
                            <button class="ybtn ybtn-primary ybtn-small ytype" value="submit" type="submit"><span>Post Review</span></button>
                        </div>
                        <span data-component-bound="true" class="saving-msg" style="display: none;"></span></div>
                </form>

            </div>

        </div>
    </div>

    <div class="topReviewers">
        <h2 class="tr_title ">
            <span class="title_left"></span>
            <span class="title_right"></span>
            Top Reviewers in Bangladesh
            <a class="more" href="/">More</a>
        </h2>
        <div class="tr_body" style="padding-top:0; overflow:hidden; width:auto; ">
            <div style="padding:5px; 0;">
                <span class="user_item top_helpers" style="width:32%">
                    <a href="/profile/view/id/29396">
                        <img width="36" height="36" src="../image/user.png">
                    </a>
                    <div class="clear"></div>
                    <p>
                        <a href="/profile/view/id/29396" style="text-transform:capitalize; font-size:11px;"> Yusuf </a>
                    </p>
                    <p style="font-size:10px;">
                        <a href="/profile/reviews/id/29396" style="font-size:11px;"> 949 </a>
                        <span style="font-size:11px; color:#595959; padding:1px 0 0 1px;"> reviews </span>
                    </p>
                </span>
                <span class="user_item top_helpers" style="width:32%">
                    <a href="/profile/view/id/33605">
                    <img width="36" height="36" src="../image/user.png">
                    </a>
                    <div class="clear"></div>
                    <p>
                        <a href="/profile/view/id/33605" style="text-transform:capitalize; font-size:11px;"> Fariba </a>
                    </p>
                    <p style="font-size:10px;">
                        <a href="/profile/reviews/id/33605" style="font-size:11px;"> 796 </a>
                        <span style="font-size:11px; color:#595959; padding:1px 0 0 1px;"> reviews </span>
                    </p>
                </span>
                <span class="user_item top_helpers" style="width:32%">
                    <a href="/profile/view/id/36146">
                    <img width="36" height="36" src="../image/user.png">
                    </a>
                    <div class="clear"></div>
                    <p>
                        <a href="/profile/view/id/36146" style="text-transform:capitalize; font-size:11px;"> Sakib </a>
                    </p>
                    <p style="font-size:10px;">
                        <a href="/profile/reviews/id/36146" style="font-size:11px;"> 678 </a>
                        <span style="font-size:11px; color:#595959; padding:1px 0 0 1px;"> reviews </span>
                    </p>
                </span>
                <div class="clear"></div>
            </div>
        </div>
     </div>
    <div class="revTab">Review Tab</div>
    <div class="revCmnt">Review Comment</div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link href="/ReviewSite/css/homestyle.css" media="all" type="text/css" rel="stylesheet">
</head>

<body>
<div class="clearfix layout-block layout-a layout-border">
    <div class="column column-alpha main">
        <div class="myReview clearfix">
            <h2>Write Your Review</h2>
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
        <div id="activity-feed" class="ysection clearfix" data-component-bound="true">
            <div class="arrange arrange--12 arrange--baseline">
                <div class="arrange_unit arrange_unit--fill">
                    <h2>Recent Activity</h2>
                </div>
            </div>
            <div class="content">
                    <div class="feeds feed-module">
                        <ul class="content-list">
                            <li data-section-id="near_you" data-component-bound="true">
                            <ul class="ylist ylist-bordered">
                            <li class="biz_photo-block media-block media-block--12">
                                <div class="media-avatar">
                                    <div class="photo-box pb-60s">
                                        <a href="/user_details?userid=Rx302jq_e0I45TZeCp-iYg">
                                            <img width="60" height="60" src="http://s3-media4.fl.yelpcdn.com/photo/sMkUQ3YGNyhtIqgZOZ6U7A/60s.jpg" class="photo-box-img" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="media-story">
                                    <div class="feed-content">
                                        <div class="media-title item-title clearfix">
                                            <div class="title-text">
                                                <a data-hovercard-id="2tgUX0HmW2E9nUF98ACU8Q" href="/user_details?userid=Rx302jq_e0I45TZeCp-iYg" class="user-name">Keya H.</a>
                                                added 2 <b>photos</b> for     <a data-hovercard-id="TniYmrUtpnGjNnHz-XEEqg" href="/biz/abuelos-lubbock" class="biz-name">Abuelo’s
                                                </a>
                                            </div>
                                            <div class="time-stamp">
                                                2 hours ago
                                            </div>
                                        </div>
                                        <div class="item-description">
                                            <ul class="photo-box-grid clearfix js-content-expandable" data-component-bound="true">
                                                <li style="width: 220px; height: 220px;">
                                                    <div class="photo-box photo-box--interactive">
                                                        <img width="220" height="220" src="//s3-media1.fl.yelpcdn.com/bphoto/vqL7VFuX-XmCG276D33hYA/258s.jpg" class="photo-box-img" alt="Traditional Flan">
                                                        <div class="photo-box-overlay js-overlay">
                                                            <div class="photo-box-overlay_caption">Traditional Flan</div>
                                                        </div>
                                                        <a href="/biz_photos/abuelos-lubbock?select=vqL7VFuX-XmCG276D33hYA" class="biz-shim">
                                                            <span class="offscreen">Traditional Flan</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li style="width: 220px; height: 220px;">
                                                    <div class="photo-box photo-box--interactive">
                                                        <img width="220" height="220" src="//s3-media1.fl.yelpcdn.com/bphoto/grtay9iLA8DnCamTUEnRDg/258s.jpg" class="photo-box-img" alt="Pescado Guerrero">
                                                        <div class="photo-box-overlay js-overlay">
                                                            <div class="photo-box-overlay_caption">Pescado Guerrero</div>
                                                        </div>
                                                        <a href="/biz_photos/abuelos-lubbock?select=grtay9iLA8DnCamTUEnRDg" class="biz-shim">
                                                            <span class="offscreen">Pescado Guerrero</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="biz_photo-block media-block media-block--12">
                                <div class="media-avatar">




                                    <div class="photo-box pb-60s">
                                        <a href="/user_details?userid=aDApE1ZHOYH6mMLBVWEKEQ">
                                            <img width="60" height="60" src="http://s3-media2.fl.yelpcdn.com/photo/oPKSGPEozIcN8jIA8B2Kjg/60s.jpg" class="photo-box-img" alt="">
                                        </a>
                                    </div>


                                </div>
                                <div class="media-story">


                                    <div class="feed-content">
                                        <div class="media-title item-title clearfix">
                                            <div class="title-text">
                                                <a data-hovercard-id="MeVOn9SEaDe7Exq0K03O4Q" href="/user_details?userid=aDApE1ZHOYH6mMLBVWEKEQ" class="user-name">Aarun C.</a>
                                                added 3 <b>photos</b> for     <a data-hovercard-id="qcDXbt1UyNALk0WMc7dGGQ" href="/biz/howard-johnson-inn-lubbock-lubbock" class="biz-name">Howard Johnson Inn Lubbock</a>


                                            </div>
                                            <div class="time-stamp">
                                                3 hours ago
                                            </div>
                                        </div>
                                        <div class="item-description">
                                            <ul class="photo-box-grid clearfix js-content-expandable" data-component-bound="true">


                                                <li style="width: 348px; height: 348px;">
                                                    <div class="photo-box photo-box--interactive">

                                                        <img width="348" height="348" src="//s3-media1.fl.yelpcdn.com/bphoto/1WES4tMeYMUlFvrp6bq6Qw/348s.jpg" class="photo-box-img" alt="Clean, and roomy.">



                                                        <div class="photo-box-overlay js-overlay">
                                                            <div class="photo-box-overlay_caption">Clean, and roomy.</div>
                                                        </div>




                                                        <a href="/biz_photos/howard-johnson-inn-lubbock-lubbock?select=1WES4tMeYMUlFvrp6bq6Qw" class="biz-shim">
                                                            <span class="offscreen">Clean, and roomy.</span>
                                                        </a>

                                                    </div>

                                                </li>


                                                <li style="width: 168px; height: 168px;">
                                                    <div class="photo-box photo-box--interactive">

                                                        <img width="168" height="168" src="//s3-media1.fl.yelpcdn.com/bphoto/OualkO0IeWqXgD7kR-8cgw/168s.jpg" class="photo-box-img" alt="Clean, spacious bathroom">



                                                        <div class="photo-box-overlay js-overlay">
                                                            <div class="photo-box-overlay_caption">Clean, spacious bathroom</div>
                                                        </div>




                                                        <a href="/biz_photos/howard-johnson-inn-lubbock-lubbock?select=OualkO0IeWqXgD7kR-8cgw" class="biz-shim">
                                                            <span class="offscreen">Clean, spacious bathroom</span>
                                                        </a>

                                                    </div>

                                                </li>


                                                <li style="width: 168px; height: 168px;">
                                                    <div class="photo-box photo-box--interactive">

                                                        <img width="168" height="168" src="//s3-media4.fl.yelpcdn.com/bphoto/j-BCcZbE0pDXLZOfYIsRLw/168s.jpg" class="photo-box-img" alt="Our stuff is kind of all over, but you can see it is nice.">



                                                        <div class="photo-box-overlay js-overlay">
                                                            <div class="photo-box-overlay_caption">Our stuff is kind of all over, but you can see it is nice.</div>
                                                        </div>




                                                        <a href="/biz_photos/howard-johnson-inn-lubbock-lubbock?select=j-BCcZbE0pDXLZOfYIsRLw" class="biz-shim">
                                                            <span class="offscreen">Our stuff is kind of all over, but you can see it is nice.</span>
                                                        </a>

                                                    </div>

                                                </li>

                                            </ul>


                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="biz_photo-block media-block media-block--12">
                                <div class="media-avatar">




                                    <div class="photo-box pb-60s">
                                        <a href="/user_details?userid=izKAkYt07FoXvXBV8V9lbg">
                                            <img width="60" height="60" src="http://s3-media2.fl.yelpcdn.com/photo/jEIONiC-I38_xtnJMGEbgA/60s.jpg" class="photo-box-img" alt="">
                                        </a>
                                    </div>


                                </div>
                                <div class="media-story">


                                    <div class="feed-content">
                                        <div class="media-title item-title clearfix">
                                            <div class="title-text">
                                                <a data-hovercard-id="FDYd8YfagxAP1LJBxToFQQ" href="/user_details?userid=izKAkYt07FoXvXBV8V9lbg" class="user-name">Sydney T.</a>
                                                added 2 <b>photos</b> for     <a data-hovercard-id="UF_lyrNbiKqu119Tj6Gm0g" href="/biz/one-guy-from-italy-lubbock-2" class="biz-name">One Guy From Italy</a>


                                            </div>
                                            <div class="time-stamp">
                                                3 hours ago
                                            </div>
                                        </div>
                                        <div class="item-description">
                                            <ul class="photo-box-grid clearfix js-content-expandable" data-component-bound="true">


                                                <li style="width: 258px; height: 258px;">
                                                    <div class="photo-box photo-box--interactive">

                                                        <img width="258" height="258" src="//s3-media2.fl.yelpcdn.com/bphoto/XOqXibChfDnZdTNANsCkjg/258s.jpg" class="photo-box-img" alt="massive pizza slices!">



                                                        <div class="photo-box-overlay js-overlay">
                                                            <div class="photo-box-overlay_caption">massive pizza slices!</div>
                                                        </div>




                                                        <a href="/biz_photos/one-guy-from-italy-lubbock-2?select=XOqXibChfDnZdTNANsCkjg" class="biz-shim">
                                                            <span class="offscreen">massive pizza slices!</span>
                                                        </a>

                                                    </div>

                                                </li>


                                                <li style="width: 258px; height: 258px;">
                                                    <div class="photo-box photo-box--interactive">

                                                        <img width="258" height="258" src="//s3-media2.fl.yelpcdn.com/bphoto/Ted8kvdv7dvL4jsYXow2SQ/258s.jpg" class="photo-box-img" alt="Took the top off of my yummy calzone so I could eat the insides. pepperonis under all that too!">



                                                        <div class="photo-box-overlay js-overlay">
                                                            <div class="photo-box-overlay_caption">Took the top off of my yummy calzone so I could eat the insides. pepperonis under all that too!</div>
                                                        </div>




                                                        <a href="/biz_photos/one-guy-from-italy-lubbock-2?select=Ted8kvdv7dvL4jsYXow2SQ" class="biz-shim">
                                                            <span class="offscreen">Took the top off of my yummy calzone so I could eat the insides. pepperonis under all that too!</span>
                                                        </a>

                                                    </div>

                                                </li>

                                            </ul>


                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="review-block media-block media-block--12">
                                <div class="media-avatar">
                                    <div class="photo-box pb-60s">
                                        <a href="/user_details?userid=aDApE1ZHOYH6mMLBVWEKEQ">
                                            <img width="60" height="60" src="http://s3-media2.fl.yelpcdn.com/photo/oPKSGPEozIcN8jIA8B2Kjg/60s.jpg" class="photo-box-img" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="media-story">
                                    <div class="feed-content">
                                        <div class="media-title item-title clearfix">
                                            <div class="title-text">
                                                <a data-hovercard-id="MeVOn9SEaDe7Exq0K03O4Q" href="/user_details?userid=aDApE1ZHOYH6mMLBVWEKEQ" class="user-name">Aarun C.</a>
                                                wrote a <b>review</b> for     <a data-hovercard-id="qcDXbt1UyNALk0WMc7dGGQ" href="/biz/howard-johnson-inn-lubbock-lubbock?hrid=41wHiA5L8kbe94w4KEJOtw" class="biz-name">Howard Johnson Inn Lubbock</a>
                                            </div>
                                            <div class="time-stamp">
                                                3 hours ago
                                            </div>
                                        </div>
                                        <div class="item-description">
                                            <div class="biz-rating biz-rating-very-large clearfix">
                                                <div>
                                                    <div class="rating-very-large">
                                                        <i title="4.0 star rating" class="star-img stars_4">
                                                            <img width="84" height="303" src="//s3-media4.fl.yelpcdn.com/assets/srv0/yelp_styleguide/c2252a4cd43e/assets/img/stars/stars_map.png" class="offscreen" alt="4.0 star rating">
                                                        </i>
                                                    </div>
                                                </div>
                                                <span class="rating-qualifier">
                                                    4/29/2015
                                                </span>
                                            </div>
                                            <p class="js-content-expandable">
                                                <span class="js-content-toggleable">
                                                I have been reading a lot of bad reviews for this place and was a little sketched out, but booked it because of the low price. <br><br>The front desk clerks were both very nice, and had my reservation printed out when I got there. They made small talk and were actually quite funny. <br>I got precisely the room I booked, and was charged exactly what I was told I would be by <a rel="nofollow" target="_blank" href="/redir?url=http%3A%2F%2Fbooking.com&amp;s=c178a46bcdd8acf675af1d0cc8c8d35ab72dc1a82c627540cafb59919d30f279">booking.com</a><br><br>I went up to look at the room before we lugged all of our stuff in, &nbsp;just in case. &nbsp;The room was spotless and very nice!! I was shocked because the reviews I read were mostly terrible. We ended up with the…<a class="read-more js-content-expander" href="/biz/howard-johnson-inn-lubbock-lubbock?hrid=41wHiA5L8kbe94w4KEJOtw">Read more</a>
                                                 </span>
                                                <span class="js-content-toggleable hidden">I have been reading a lot of bad reviews for this place and was a little sketched out, but booked it because of the low price. <br><br>The front desk clerks were both very nice, and had my reservation printed out when I got there. They made small talk and were actually quite funny. <br>I got precisely the room I booked, and was charged exactly what I was told I would be by <a rel="nofollow" target="_blank" href="/redir?url=http%3A%2F%2Fbooking.com&amp;s=c178a46bcdd8acf675af1d0cc8c8d35ab72dc1a82c627540cafb59919d30f279">booking.com</a><br><br>I went up to look at the room before we lugged all of our stuff in, &nbsp;just in case. &nbsp;The room was spotless and very nice!! I was shocked because the reviews I read were mostly terrible. We ended up with the handicapped room, and it was quite spacious. <br><br>The Internet wasn't SUPER fast, but it worked just fine for me to give a few online violin Lessons. <br><br>Other than the pool not being open until next month, everything has gone swimmingly (ha)</span>
                                            </p>
                                            <div data-review-id="41wHiA5L8kbe94w4KEJOtw" class="rateReview voting-feedback">
                                                <p class="voting-intro voting-prompt">
                                                    Was this review …?
                                                </p>
                                                <ul data-csrf-token="cd4781c7d3fc88ff1247fdb823abde6762bfe7fecaefd93c24e8316a9e124249" class="voting-buttons">
                                                    <li class="vote-item inline-block">
                                                        <a class="ybtn ybtn-small useful" rel="useful" href="javascript:;">
                                                            <span class="i-wrap ig-wrap-common i-ufc-useful-common-wrap button-content"><i class="i ig-common i-ufc-useful-common"></i>     <span class="vote-type">Useful</span>
                                                                <span class="count">

                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="vote-item inline-block">
                                                        <a class="ybtn ybtn-small funny" rel="funny" href="javascript:;"><span class="i-wrap ig-wrap-common i-ufc-funny-common-wrap button-content"><i class="i ig-common i-ufc-funny-common"></i>     <span class="vote-type">Funny</span>
                                                             <span class="count"></span></span></a>
                                                    </li>
                                                    <li class="vote-item inline-block">
                                                        <a class="ybtn ybtn-small cool" rel="cool" href="javascript:;"><span class="i-wrap ig-wrap-common i-ufc-cool-common-wrap button-content"><i class="i ig-common i-ufc-cool-common"></i>     <span class="vote-type">Cool</span><span class="count"></span></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            </ul>
                            <a class="link-bar" href="javascript:;">
                                <span data-component-bound="true" class="loading-msg">See more recent activity</span>
                            </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>

    </div>

    <div class="column column-beta sidebar">
    <!--top reviewers-->
    <div class="topReviewers">
        <h2 class="tr_title ">
            <span class="title_left"></span>
            <span class="title_right"></span>
            Top Reviewers in Food Bank
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
    <!--top restaurants-->
    <div class="table_new table_large" id="place_type">
    <h1 class="title ">
        <span class="title_left"></span>
        <span class="title_right"></span>
        Top Restaurants        </h1><div style="padding:0; " class="body">    <table width="100%" style="margin-bottom:0; border-collapse:collapse;" class="horizontal_list_table">
    <thead style="  ">
    <tr>    <th width="50%" valign="middle" align="left" style="padding:5px 0 5px 5px;">
            Restaurant Name                    <a class="sort_down" href="/browse/id/54/Asia.html?page=1&amp;sort=name&amp;direction=up">up</a>            </th>
        <th width="35%" valign="middle" align="left" style="padding:5px 0 5px 0px;">
            Address    </th>
        <th width="15%" valign="middle" align="left" style="padding:5px 0 5px 0px;">
            Rating                    <a class="sort_down" href="/browse/id/54/Asia.html?page=1&amp;sort=rating&amp;direction=up">up</a>            </th>
    </tr>
    </thead>
    <tbody>
        <tr id="module_place_list_tr">
            <td>
                <div style="padding:0px 5px 0 7px;">
                    <a href="/restaurants/Barbara-s-Restaurant-Manila-Manila-198926.html" style="font-weight:normal; font-size:11px; word-wrap: break-word;">
                        Barbara's Restaurant                    </a>
                </div>
            </td>
            <td align="center" style="text-align:left;">
                <div style="width:110px; padding:0 10px 0 0;" class="module_place_list_wrap">
                    Plaza San Luis Complex,
                    <br>
                    Manila, Manila                </div>
            </td>
            <td align="left">
                <div style="width:90px; padding:5px 0 5px 0;" class="module_place_list_wrap3">
                    <div data="4.33333_5" class="place_ratings small" style="height: 16px; width: 80px; overflow: hidden; z-index: 1; position: relative;">
                        <div class="jRatingColor" style="width: 69.3333px;">
                        </div>
                        <div class="jRatingAverage" style="width: 0px; top: -16px;">
                        </div>
                        <div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;">
                        </div>
                        <div class="jRatingColor" style="width: 69.3333px;"></div>
                        <div class="jRatingAverage" style="width: 0px; top: -16px;"></div>
                        <div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div>
                    </div>
                    <div class="num_review_box">
                        <div>4.3/5.0</div>
                        <div>
                            <a href="/restaurants/rid/198926/Barbara-s-Restaurant-Manila-Manila/Reviews.html">
                                4
                            </a>
                            <span>reviews</span>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    <tr id="module_place_list_tr">
        <td>
            <div style="padding:0px 5px 0 7px;">
                <a href="/restaurants/village-the-soul-of-india-Ahmedabad-Gujarat-198082.html" style="font-weight:normal; font-size:11px; word-wrap: break-word;">
                    village the soul of india                    </a>
            </div>
        </td>
        <td align="center" style="text-align:left;">
            <div style="width:110px; padding:0 10px 0 0;" class="module_place_list_wrap">
                3rd Floor, Himalaya Mall, Drive In Road, Memnagar,
                <br>
                Ahmedabad, Gujarat                </div>
        </td>
        <td align="left">
            <div style="width:90px; padding:5px 0 5px 0;" class="module_place_list_wrap3">
                <div data="4.2_5" class="place_ratings small" style="height: 16px; width: 80px; overflow: hidden; z-index: 1; position: relative;"><div class="jRatingColor" style="width: 67.2px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div><div class="jRatingColor" style="width: 67.2px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="num_review_box">
                    <div>4.2/5.0</div>
                    <div>
                        <a href="/restaurants/rid/198082/village-the-soul-of-india-Ahmedabad-Gujarat/Reviews.html">
                            3	        </a>
	        <span>
	            reviews	        </span>
                    </div>
                </div>                </div>
        </td>
    </tr>
    <tr id="module_place_list_tr">
        <td>
            <div style="padding:0px 5px 0 7px;">
                <a href="/restaurants/Zark-s-Burgers-Malate-Manila-198872.html" style="font-weight:normal; font-size:11px; word-wrap: break-word;">
                    Zark's Burgers                    </a>
            </div>
        </td>
        <td align="center" style="text-align:left;">
            <div style="width:110px; padding:0 10px 0 0;" class="module_place_list_wrap">
                2464 Archer’s Nook, Taft Avenue,,
                <br>
                Malate, Manila                </div>
        </td>
        <td align="left">
            <div style="width:90px; padding:5px 0 5px 0;" class="module_place_list_wrap3">
                <div data="4.16667_5" class="place_ratings small" style="height: 16px; width: 80px; overflow: hidden; z-index: 1; position: relative;"><div class="jRatingColor" style="width: 66.6667px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div><div class="jRatingColor" style="width: 66.6667px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="num_review_box">
                    <div>4.2/5.0</div>
                    <div>
                        <a href="/restaurants/rid/198872/Zark-s-Burgers-Malate-Manila/Reviews.html">
                            4	        </a>
	        <span>
	            reviews	        </span>
                    </div>
                </div>                </div>
        </td>
    </tr>
    <tr id="module_place_list_tr">
        <td>
            <div style="padding:0px 5px 0 7px;">
                <a href="/restaurants/Conti-s-Bake-Shop-and-Restaurant-Taguig-Rizal-199080.html" style="font-weight:normal; font-size:11px; word-wrap: break-word;">
                    Conti's Bake Shop and Restaurant                    </a>
            </div>
        </td>
        <td align="center" style="text-align:left;">
            <div style="width:110px; padding:0 10px 0 0;" class="module_place_list_wrap">
                Unit 1C-17 Serendra, Bonifacio Global City,
                <br>
                Taguig, Rizal                </div>
        </td>
        <td align="left">
            <div style="width:90px; padding:5px 0 5px 0;" class="module_place_list_wrap3">
                <div data="4.16667_5" class="place_ratings small" style="height: 16px; width: 80px; overflow: hidden; z-index: 1; position: relative;"><div class="jRatingColor" style="width: 66.6667px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div><div class="jRatingColor" style="width: 66.6667px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="num_review_box">
                    <div>4.2/5.0</div>
                    <div>
                        <a href="/restaurants/rid/199080/Conti-s-Bake-Shop-and-Restaurant-Taguig-Rizal/Reviews.html">
                            4	        </a>
	        <span>
	            reviews	        </span>
                    </div>
                </div>                </div>
        </td>
    </tr>
    <tr id="module_place_list_tr">
        <td>
            <div style="padding:0px 5px 0 7px;">
                <a href="/restaurants/CASA-VERDE-Cebu-City-Cebu-198842.html" style="font-weight:normal; font-size:11px; word-wrap: break-word;">
                    CASA VERDE                    </a>
            </div>
        </td>
        <td align="center" style="text-align:left;">
            <div style="width:110px; padding:0 10px 0 0;" class="module_place_list_wrap">
                stall 304, 3rd level The Terraces Ayala Center Cebu,
                <br>
                Cebu City, Cebu                </div>
        </td>
        <td align="left">
            <div style="width:90px; padding:5px 0 5px 0;" class="module_place_list_wrap3">
                <div data="4_5" class="place_ratings small" style="height: 16px; width: 80px; overflow: hidden; z-index: 1; position: relative;"><div class="jRatingColor" style="width: 64px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div><div class="jRatingColor" style="width: 64px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="num_review_box">
                    <div>4.0/5.0</div>
                    <div>
                        <a href="/restaurants/rid/198842/CASA-VERDE-Cebu-City-Cebu/Reviews.html">
                            3	        </a>
	        <span>
	            reviews	        </span>
                    </div>
                </div>                </div>
        </td>
    </tr>
    <tr id="module_place_list_tr">
        <td>
            <div style="padding:0px 5px 0 7px;">
                <a href="/restaurants/Ziggurat-Cuisine-Makati-Rizal-198764.html" style="font-weight:normal; font-size:11px; word-wrap: break-word;">
                    Ziggurat Cuisine                    </a>
            </div>
        </td>
        <td align="center" style="text-align:left;">
            <div style="width:110px; padding:0 10px 0 0;" class="module_place_list_wrap">
                101, Sunette Tower, Makati Ave corner Durban St.,
                <br>
                Makati, Rizal                </div>
        </td>
        <td align="left">
            <div style="width:90px; padding:5px 0 5px 0;" class="module_place_list_wrap3">
                <div data="4_5" class="place_ratings small" style="height: 16px; width: 80px; overflow: hidden; z-index: 1; position: relative;"><div class="jRatingColor" style="width: 64px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div><div class="jRatingColor" style="width: 64px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="num_review_box">
                    <div>4.0/5.0</div>
                    <div>
                        <a href="/restaurants/rid/198764/Ziggurat-Cuisine-Makati-Rizal/Reviews.html">
                            3	        </a>
	        <span>
	            reviews	        </span>
                    </div>
                </div>                </div>
        </td>
    </tr>
    </tbody>
    </table>    </div>
    </div>

    <div class="upcomingEvents">
        <h1 class="title ">
            <span class="title_left"></span>
            <span class="title_right"></span>
            Upcoming Events
        </h1>
        <div class="fbEventsDashboardSection" data-store="{"date":"section1"}">
            <div class="fbEventsDashboardSection" data-store="{"date":"2015-05-08"}">
                <div id="dashboard_item_1375513602778247" class="_4cbb">
                    <div class="fbEventDashboardItem">
                        <div class="clearfix _a19">
                            <div class="_1qdc lfloat _ohe">
                                <a class="_mxp _mxq" href="/events/1375513602778247/?ref=2&ref_dashboard_filter=upcoming">
                                    <div class="uiScaledImageContainer" style="width: 150px; height: 100px;">
                                        <img class="scaledImageFitWidth img" width="150" height="193"
                                             alt="The Institution of Engineers Bangladesh's photo." style="top:-13px;"
                                             src="https://m.ak.fbcdn.net/sphotos-b.ak/hphotos-ak-xtp1/v/t1.0-9/s200x200/11138498_801924753233263_2097667677509367113_n.jpg?oh=2ee52d07606d1789c35fca812ce5bea9&oe=55C202E4&__gda__=1439641971_2dfc3fd7a9206ce8d618775aa44ef9ca">
                                    </div>
                                    <div class="_18im _mxs">
                                        <div class="_38le">MAY</div>
                                        <div class="_38lf">08</div>
                                    </div>
                                </a>
                            </div>
                            <div class="_42ef">
                                <div class="_3ydv">
                                    <div class="_1qdd" aria-label="Young Engineers Summit" data-tooltip-display="overflow" data-hover="tooltip">
                                        <a href="/events/1375513602778247/?ref=2&ref_dashboard_filter=upcoming">Young Engineers Summit </a>
                                    </div>
                                    <span class="_5p0a _4cbc">
                                        <span>Today at 9:00am</span>
                                    </span>
                                    <div class="_5p0b fsm fwn fcg">
                                        <span>
                                            <span class="_5inl" aria-label="Ramna, Dhaka 1000, Bangladesh " data-tooltip-display="overflow" data-hover="tooltip">Ramna, Dhaka 1000, Bangladesh </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</div>
</body>
</html>
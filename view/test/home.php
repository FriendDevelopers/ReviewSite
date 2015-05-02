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

    <div class="table_new table" id="home_rating">
    <div class="title ">
        <span class="title_left"></span>
        <span class="title_right"></span>
        Top Restaurants in United States            <a href="/place/index/aid/192" class="more">More</a>
    </div><div style="padding-top:5px; " class="body">    <table width="100%" style="margin-bottom:0; border-collapse:collapse;" class="horizontal_list_table">
    <thead style="  ">
    <tr>    <th valign="middle" align="left" style="padding:0px 0 5px 41px;">Restaurant Name &amp; Address</th>
        <th valign="middle" align="left" style="padding:0px 0 5px 9px;">Rating</th>
    </tr>
    </thead>
    <tbody>            <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Mavi-Bloomfield-Connecticut-185715.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="27" height="36" class="photo_2454 mini" src="/upload/place/54/2454.41680.23454_mini.jpg">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Mavi-Bloomfield-Connecticut-185715.html" class="similar_places_view_place">
                    Mavi                    </a>
                <p class="similar_places_list_address">39 Jerome Avenue</p>
                <p class="similar_palces_list_location">Bloomfield, Connecticut</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.88235_5" class="place_ratings small"><div class="jRatingColor" style="width: 78.1176px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.9/5.0</div>
                        <div>
                            <a href="/restaurants/rid/185715/Mavi-Bloomfield-Connecticut/Reviews.html">
                                32	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Abracci-Cafe-Coral-Gables-Florida-33362.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Abracci-Cafe-Coral-Gables-Florida-33362.html" class="similar_places_view_place">
                    Abracci Cafe                    </a>
                <p class="similar_places_list_address">318 Aragon Ave</p>
                <p class="similar_palces_list_location">Coral Gables, Florida</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.6875_5" class="place_ratings small"><div class="jRatingColor" style="width: 75px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.7/5.0</div>
                        <div>
                            <a href="/restaurants/rid/33362/Abracci-Cafe-Coral-Gables-Florida/Reviews.html">
                                14	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Romeo-s-Pizza-Canton-Ohio-198580.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Romeo-s-Pizza-Canton-Ohio-198580.html" class="similar_places_view_place">
                    Romeo's Pizza                    </a>
                <p class="similar_places_list_address">4887 Portage St NW</p>
                <p class="similar_palces_list_location">Canton, Ohio</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.66667_5" class="place_ratings small"><div class="jRatingColor" style="width: 74.6667px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.7/5.0</div>
                        <div>
                            <a href="/restaurants/rid/198580/Romeo-s-Pizza-Canton-Ohio/Reviews.html">
                                10	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Masse-s-Pastries-Berkeley-California-13881.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Masse-s-Pastries-Berkeley-California-13881.html" class="similar_places_view_place">
                    Masse's Pastries                    </a>
                <p class="similar_places_list_address">1469 Shattuck St</p>
                <p class="similar_palces_list_location">Berkeley, California</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.63636_5" class="place_ratings small"><div class="jRatingColor" style="width: 74.1818px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.6/5.0</div>
                        <div>
                            <a href="/restaurants/rid/13881/Masse-s-Pastries-Berkeley-California/Reviews.html">
                                9	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/La-Fleur-De-Lis-Lovettsville-Virginia-166785.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/La-Fleur-De-Lis-Lovettsville-Virginia-166785.html" class="similar_places_view_place">
                    La Fleur De Lis                    </a>
                <p class="similar_places_list_address">2 South Church Street</p>
                <p class="similar_palces_list_location">Lovettsville, Virginia</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.63636_5" class="place_ratings small"><div class="jRatingColor" style="width: 74.1818px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.6/5.0</div>
                        <div>
                            <a href="/restaurants/rid/166785/La-Fleur-De-Lis-Lovettsville-Virginia/Reviews.html">
                                9	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Robin-s-Woodfire-Bbq-Grill-Pasadena-California-172479.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Robin-s-Woodfire-Bbq-Grill-Pasadena-California-172479.html" class="similar_places_view_place">
                    Robin's Woodfire Bbq &amp; Grill                    </a>
                <p class="similar_places_list_address">395 N. Rosemead Blvd</p>
                <p class="similar_palces_list_location">Pasadena, California</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.61905_5" class="place_ratings small"><div class="jRatingColor" style="width: 73.9048px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.6/5.0</div>
                        <div>
                            <a href="/restaurants/rid/172479/Robin-s-Woodfire-Bbq-Grill-Pasadena-California/Reviews.html">
                                19	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Nobu-New-York-New-York-65725.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Nobu-New-York-New-York-65725.html" class="similar_places_view_place">
                    Nobu                    </a>
                <p class="similar_places_list_address">105 Hudson St</p>
                <p class="similar_palces_list_location">New York, New York</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.61111_5" class="place_ratings small"><div class="jRatingColor" style="width: 73.7778px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.6/5.0</div>
                        <div>
                            <a href="/restaurants/rid/65725/Nobu-New-York-New-York/Reviews.html">
                                16	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Harold-s-Chicken-Shack-Chicago-Heights-Illinois-17586.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Harold-s-Chicken-Shack-Chicago-Heights-Illinois-17586.html" class="similar_places_view_place">
                    Harold's Chicken Shack                    </a>
                <p class="similar_places_list_address">801 E Lincoln Hwy</p>
                <p class="similar_palces_list_location">Chicago Heights, Illinois</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.6_5" class="place_ratings small"><div class="jRatingColor" style="width: 73.6px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.6/5.0</div>
                        <div>
                            <a href="/restaurants/rid/17586/Harold-s-Chicken-Shack-Chicago-Heights-Illinois/Reviews.html">
                                8	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Maddox-Ranch-House-Brigham-City-Utah-40503.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Maddox-Ranch-House-Brigham-City-Utah-40503.html" class="similar_places_view_place">
                    Maddox Ranch House                    </a>
                <p class="similar_places_list_address">1900 S Highway 89</p>
                <p class="similar_palces_list_location">Brigham City, Utah</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.6_5" class="place_ratings small"><div class="jRatingColor" style="width: 73.6px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.6/5.0</div>
                        <div>
                            <a href="/restaurants/rid/40503/Maddox-Ranch-House-Brigham-City-Utah/Reviews.html">
                                18	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td align="left" style="padding:10px 0 5px 0px; border-bottom:1px solid #DFDFDF;">
            <a href="/restaurants/Tastee-Sub-Shop-Edison-New-Jersey-65137.html" style="font-weight:normal;font-size:11px;font-weight:bold; float:left;">
                <img width="36" height="36" src="/images/placepic.png">                </a>
            <div style="padding:0px 0 0 5px; float:left; word-wrap:break-word; width:167px;">
                <a href="/restaurants/Tastee-Sub-Shop-Edison-New-Jersey-65137.html" class="similar_places_view_place">
                    Tastee Sub Shop                    </a>
                <p class="similar_places_list_address">267 Plainfield Ave</p>
                <p class="similar_palces_list_location">Edison, New Jersey</p>
            </div>
        </td>
        <td align="left" style="padding:3px 0; border-bottom:1px solid #DFDFDF;">
            <div style="padding:5px 0px 5px 10px; font-size:11px;">
                <div style="margin-right: -5px; width: 80px; height: 16px; overflow: hidden; z-index: 1; position: relative;" data="4.6_5" class="place_ratings small"><div class="jRatingColor" style="width: 73.6px;"></div><div class="jRatingAverage" style="width: 0px; top: -16px;"></div><div class="jStar" style="width: 80px; height: 16px; top: -32px; background: url(&quot;/images/stars_2v.png&quot;) repeat-x scroll 0% 0% transparent;"></div></div>
                <div class="module_similar_place_list_rating">
                    <div class="num_review_box">
                        <div>4.6/5.0</div>
                        <div>
                            <a href="/restaurants/rid/65137/Tastee-Sub-Shop-Edison-New-Jersey/Reviews.html">
                                23	        </a>
	        <span>
	            reviews	        </span>
                        </div>
                    </div>                    </div>
            </div>
        </td>
    </tr>
    <tr>
        <td valign="middle" align="center" colspan="3">
            <a style="margin-top:3px; display:inline-block;" class="module_similar_place_list_view_on_map" href="/place/search/local_id/192                    ">
                View on Map
            </a>
        </td>
    </tr>
    </tbody>
    </table>    </div>
    </div>


</div>

</body>
</html>
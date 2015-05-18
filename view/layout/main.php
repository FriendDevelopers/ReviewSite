<!DOCTYPE html>
<html class="js" lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <title>Food Review Site</title>
        <link href="/ReviewSite/css/style.css" media="all" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->app->relativeUrl(); ?>css/restaurantView.css">
        <script src="<?php echo $this->app->relativeUrl();?>js/test.js"></script>
    </head>
    <body id="yelp_main_body" class="country-us logged-in ytype jquery">
        <div>
            <div class="app-header">
                <div class="content-container clearfix">
                    <div id="logo" class="logo">
                        <a href="/">Review Site</a>
                    </div>
                    <form id="header_find_form" class="header-search-form" role="search" action="/search" method="get" data-component-bound="true">
                        <div class="search-field-container with-suggestions-list flex-container-inline find-decorator">
                            <div class="search-field flex-container-inline">
                                <label class="label" for="find_desc">Reach</label>
                                <div class="flex-box input-holder">
                                    <input id="find_desc" tabindex="1" aria-autocomplete="list" value="" placeholder="Restaurent, Item" name="find_desc" maxlength="64" autocomplete="off" data-component-bound="true">
                                </div>
                            </div>
                            <div class="suggestions-list-container search-suggestions-list-container hidden" data-component-bound="true">
                                <ul class="suggestions-list" aria-label="Search results" role="listbox"></ul>
                            </div>
                        </div>
                        <div class="search-field-container with-suggestions-list flex-container-inline near-decorator user-logged-in">
                            <div class="search-field flex-container-inline">
                                <label class="label" for="dropperText_Mast">Location</label>
                                <div class="flex-box input-holder">
                                    <input id="dropperText_Mast" tabindex="2" aria-autocomplete="list" value="" placeholder="Address" name="find_loc" maxlength="80" autocomplete="off" data-component-bound="true">
                                    <input type="hidden" value="1" name="ns">
                                </div>
                            </div>
                            <div class="suggestions-list-container location-suggestions-list-container hidden" data-component-bound="true">
                                <ul class="suggestions-list" aria-label="Search results" role="listbox"></ul>
                            </div>
                        </div>
                        <div class="button-container">
                            <button id="header-search-submit" class="ybtn ybtn-primary header-button" value="submit" type="submit" title="Search" tabindex="3">
                            <i class="i ig-common_sprite i-search-common_sprite"></i>
                            </button>
                        </div>
                    </form>
                    <ul id="header-nav" class="header-nav pull-left">
                        <li id="home-link" class="inline-block">
                            <a class="header-nav-link" href="/"> Home </a>
                        </li>
                        <li id="about-me" class="inline-block">
                            <a class="header-nav-link" href="/user_details?userid=q96CMbvawvoUtHUMbdR6ug"> XXXXX </a>
                        </li>
                        <li id="write-review" class="inline-block">
                            <a class="header-nav-link" href="/"> XXXX </a>
                        </li>
                        <li id="find-friends" class="inline-block">
                            <a class="header-nav-link" href="/find_friends/"> XXXX </a>
                        </li>
                        <li id="messaging" class="inline-block">
                            <a class="header-nav-link" href="/mail"> XXXX </a>
                        </li>
                        <li id="talk" class="inline-block">
                            <a class="header-nav-link" href="/talk"> XXXX </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="body-container">
            <?php echo $content ?>
        </div>
    </body>
</html>
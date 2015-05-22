<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> Profile </title>
    <link href="/ReviewSite/css/forgetpassstyle.css" media="all" type="text/css" rel="stylesheet">
</head>

<body>
<div class="main-content-box ">
    <div class="content-container">
        <div class="clearfix">
            <div class="signup-wrapper">
                <div class="flow-start signup-visible" data-component-bound="true">

                    <div class="signup-form-container">

                        <div class="header">
                            <h2>Forgot Password</h2>
                            <p class="subheading">Please enter your email address and we will send you password through email. </p>
                        </div>


                        <div class="main">
                            <div class="one">
                                <div class="register">
                                    <h3>Create your account</h3>
                                    <form id="reg-form">
                                        <div>
                                            <label for="email">Email</label>
                                            <input type="text" id="email" spellcheck="false" placeholder="sakib@xyz.com"/>
                                        </div>
                                        <div>
                                            <label></label>
                                            <input type="submit" value="Send" id="send" class="button"/>
                                        </div>
                                        <div class="formLabel">
                                            <a href="/forgot">Return to Log In?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="picture-container">
                <img src="<?php echo $this->app->relativeUrl() ?>/image/forgot_pass.png">
            </div>
        </div>
    </div>
</div>
</body>
</html>
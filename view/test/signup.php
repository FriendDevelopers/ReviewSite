<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> Profile </title>
    <link href="/ReviewSite/css/signupstyle.css" media="all" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="main-content-box ">
        <div class="content-container">
            <div class="clearfix">
                <div class="signup-wrapper">
                    <div class="flow-start signup-visible" data-component-bound="true">

                            <div class="signup-form-container">

                                <div class="header">
                                    <h2>Sign up for Food Bank</h2>
                                    <p class="subheading">Join To Be a Reviewer</p>
                                </div>


                                <div class="main">
                                    <div class="one">
                                        <div class="register">
                                            <h3>Create your account</h3>
                                            <form id="reg-form">
                                                <div>
                                                    <label for="name">Name</label>
                                                    <input type="text" id="name" spellcheck="false" placeholder="Sakib Muntaheen"/>
                                                </div>
                                                <div>
                                                    <label for="email">Email</label>
                                                    <input type="text" id="email" spellcheck="false" placeholder="sakib@xyz.com"/>
                                                </div>
                                                <div>
                                                    <label for="username">Username</label>
                                                    <input type="text" id="username" spellcheck="false" placeholder="sakib52" />
                                                </div>
                                                <div>
                                                    <label for="password">Password</label>
                                                    <input type="password" id="password" />
                                                </div>
                                                <div>
                                                    <label for="password-again">Password Again</label>
                                                    <input type="password" id="password-again" />
                                                </div>
                                                <div>
                                                    <label for="zip-code">ZIP Code</label>
                                                    <input type="text" id="zip-code" />
                                                </div>
                                                <div>
                                                    <label></label>
                                                    <input type="submit" value="Create Account" id="create-account" class="button"/>
                                                </div>
                                            </form>
                                            <div class="sep">
                                                <span class="or">OR</span>
                                            </div>
                                            <div class="connect">
                                                <div class="social-buttons facebook">
                                                    <a href="#">
                                                        <span>Facebook</span>
                                                    </a>
                                                </div>
                                                <div class="social-buttons twitter">
                                                    <a href="#">
                                                        <span>Twitter</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="picture-container">
                    <img src="<?php echo $this->app->relativeUrl() ?>/image/signup_button.png">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
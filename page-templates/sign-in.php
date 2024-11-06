<?php
/**
 * template name: Sign In Page
 */
get_header();
?>
<section class="sign-in-form lk-relative">
    <div class="lk-row">
        <div class="lk-col-5 lk-relative">
            <div class="form-left-bg"></div>
        </div>
        <div class="lk-col-7">
            <div class="form-box">
                <div class="form-box-inner">
                    <div class="section-heading">
                        <h1 class="form-title">
                            Get more things done with Loggin platform.
                        </h1>
                    </div>
                    <div class="login-form">
                        <form method="post">
                            <div class="lk-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="login-btn-g">
                                    <div class="lk-row">
                                        <div class="lk-col-6">
                                            <div class="form-check">
                                                <span>
                                                    <input type="text" class="checkbox" id="account" name="Create an Account?">
                                                    <label for="account">Remember Me</label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="lk-col-6">
                                            <div class="forget-password text-right">
                                                <a href="#">Forgot Password ?</a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="lk-col-12">
                                    <button type="submit" class="btn-medium">Login</button>
                                </div>
                                <div class="lk-col-12">
                                    <div class="sign-up-text">
                                        <span>
                                            Don't have an account?
                                            <a href="#" id="sign-up">Sign Up</a>
                                        </span>
                                    </div>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

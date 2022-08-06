    <?php echo do_shortcode( '[viacep-api]' ); ?>
    <?php if( $attributes['show_title'] ) : ?>
    <h1><?php _e( 'Sign In', 'custom-wp-login' ); ?></h1>
    <?php endif; ?>

    <!-- errors if any -->
    <?php if( count( $attributes['errors'] ) > 0 ) : ?>
    <?php foreach( $attributes['errors'] as $error ) : ?>
    <p class="login-error">
        <?php echo $error; ?>
    </p>
    <?php endforeach; ?>
    <?php endif; ?>

    <!-- registered message -->
    <?php if( $attributes['registered'] ) : ?>
    <p class="login-info">
        <?php
                printf( __( 'You have successfully registered to <b>%s</b>.', 'custom-wp-login' ), get_bloginfo( 'name' ) );
            ?>
    </p>
    <?php endif; ?>

    <!-- password reset message -->
    <?php if( $attributes['lost_password_sent'] ) : ?>
    <p class="login-info">
        <?php _e( 'Check your email for a link to reset your password', 'custom-wp-login' ); ?>
    </p>
    <?php endif; ?>

    <!-- password changed message -->
    <?php if( $attributes['password_updated'] ) : ?>
    <p class="login-info">
        <?php _e( 'You have successfully reset your password', 'custom-wp-login' ); ?>
    </p>
    <?php endif; ?>

    <!-- logged out message -->
    <?php if( $attributes['logged_out'] ) : ?>
    <p class="login-info">
        <?php _e( 'Signed out', 'custom-wp-login' ); ?>
    </p>
    <?php endif; ?>

    <div class="form-wrap">
        <div class="tabs-content">
            <div id="login-tab-content" class="active">
                <p class="login-card-description">Sign into your account</p>
                <form id="loginform" action="<?php echo wp_login_url(); ?>" method="post" autocomplete="off">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="user_login" type="text" name="log" autocomplete="off"
                                placeholder="<?php _e( 'Username', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="user_pass" type="password" name="pwd" autocomplete="off"
                                placeholder="<?php _e( 'Password', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md">
                        </div>
                    </div>
                    <div class="form-group mx-auto">
                        <input type="submit" name="wp-submit" class="btn btn-primary btn-block font-weight-bold btn-green"
                            value="<?php _e( 'Login', 'custom-wp-login' ); ?>" />
                        <input type="hidden" name="redirect_to" value="" />
                    </div>
                </form>

                <a href="<?php echo wp_lostpassword_url(); ?>">
                    <?php _e( 'Forgot your password?', 'custom-wp-login' ); ?>
                </a>

                <div class="form-group mx-auto d-flex align-items-center">
                    <div class="border-bottom w-100 ml-5"></div>
                    <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                    <div class="border-bottom w-100 mr-5"></div>
                </div>

                <div class="form-group mx-auto">
                    <div class="button">
                        <a class="sign-up active btn btn-primary btn-block py-2 btn-register"
                            href="#signup-tab-content">
                            <span class="font-weight-bold">Register</span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="signup-tab-content">

                <?php if( $attributes['show_title'] ) : ?>
                <h1><?php _e( 'Register', 'custom-wp-login' ); ?></h1>
                <?php endif; ?>

                <!-- errors if any -->
                <?php if( count( $attributes['errors'] ) > 0 ) : ?>
                <?php foreach( $attributes['errors'] as $error ) : ?>
                <p class="register-error">
                    <?php echo 'The following errors were found with your submission:<br>'; ?>
                    <?php echo $error; ?>
                </p>
                <?php endforeach; ?>
                <?php endif; ?>

                <?php
                    //$special_query_results = get_transient( 'special_query_results' );
                ?>

                <p class="login-card-description">Register your account</p>
                <form id="signupform" action="<?php echo wp_registration_url(); ?>" method="post" autocomplete="off">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input type="text" name="username" id="username" autocomplete="off"
                                placeholder="<?php _e( 'Username', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input type="password" name="password" id="password"
                                placeholder="<?php _e( 'Password', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input type="text" name="first_name" id="first-name"
                                placeholder="<?php _e( 'First name', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input type="text" name="last_name" id="last-name"
                                placeholder="<?php _e( 'Last name', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input type="text" name="email" id="email" autocomplete="off"
                                placeholder="<?php _e( 'Email', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-location-arrow text-muted"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="zip" id="zip" autocomplete="off"
                                placeholder="<?php _e( 'CEP', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md" data-mask="(00) 0000-0000" data-mask-selectonfocus="true">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-location-arrow text-muted"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="address" id="address" autocomplete="off"
                                placeholder="<?php _e( 'Address', 'custom-wp-login' ); ?>"
                                class="form-control bg-white border-left-0 border-md">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-location-arrow text-muted"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="number" id="number" autocomplete="off"
                                    placeholder="<?php _e( 'Number', 'custom-wp-login' ); ?>"
                                    class="form-control bg-white border-left-0 border-md">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-location-arrow text-muted"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="district" id="district" autocomplete="off"
                                    placeholder="<?php _e( 'District', 'custom-wp-login' ); ?>"
                                    class="form-control bg-white border-left-0 border-md">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-location-arrow text-muted"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="city" id="city" autocomplete="off"
                                    placeholder="<?php _e( 'City', 'custom-wp-login' ); ?>"
                                    class="form-control bg-white border-left-0 border-md">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                                            <i class="fa fa-location-arrow text-muted"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="state" id="state" autocomplete="off"
                                    placeholder="<?php _e( 'State', 'custom-wp-login' ); ?>"
                                    class="form-control bg-white border-left-0 border-md">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <?php if ( $attributes['recaptcha_site_key'] ) : ?>
                        <div class="recaptcha-container">
                            <div class="g-recaptcha" data-sitekey="<?php echo $attributes['recaptcha_site_key']; ?>">
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>-->
                    <div class="form-group mx-auto">
                        <input type="submit" name="submit" id="submit-button"
                            class="btn btn-primary btn-block font-weight-bold btn-green"
                            value="<?php _e( 'Register', 'custom-wp-login' ); ?>" />
                    </div>
                </form>

                <div class="form-group mx-auto d-flex align-items-center">
                    <div class="border-bottom w-100 ml-5"></div>
                    <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                    <div class="border-bottom w-100 mr-5"></div>
                </div>

                <div class="form-group mx-auto">
                    <div class="button">
                        <a class="log-in btn btn-primary btn-block py-2 btn-register" href="#login-tab-content">
                            <span class="font-weight-bold">Login</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SOCIAL MEDIA LOGIN -->
    <!--<div class="form-group mx-auto">
        <div class="btn btn-primary btn-block py-2 btn-facebook">
            <i class="fa fa-facebook-f mr-2"></i>
            <span class="font-weight-bold">Continue with Facebook</span>
        </div>
        <div class="btn btn-primary btn-block py-2 btn-google">
            <i class="fa fa-twitter mr-2"></i>
            <span class="font-weight-bold">Continue with Twitter</span>
        </div>
        <div class="btn btn-primary btn-block py-2 btn-twitter">
            <i class="fa fa-twitter mr-2"></i>
            <span class="font-weight-bold">Continue with Twitter</span>
        </div>
    </div> -->
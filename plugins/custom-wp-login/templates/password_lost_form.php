<div id="password-lost-form">
	<?php if( $attributes['show_title'] ) : ?>
        <h1><?php _e( 'Forgot Your Password?', 'custom-wp-login' ); ?></h1>
    <?php endif; ?>

    <!-- errors if any -->
    <?php if( count( $attributes['errors'] ) > 0 ) : ?>
        <?php foreach( $attributes['errors'] as $error ) : ?>
            <p class="login-error">
                <?php echo $error; ?>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>

    <p style="text-align: center;">
        <?php
            _e( "Enter your email or username and we'll send you a link to create a new password.", 'custom-wp-login' );
        ?>
    </p>

    <div class="page_form">
        <form id="signupform" action="<?php echo wp_lostpassword_url(); ?>" method="post" autocomplete="off">
            <p class="form-row">
                <label for="user_login"><?php _e( 'Email or Username', 'custom-wp-login' ); ?></label>
                <input type="text" name="user_login" id="user_login" autocomplete="off" placeholder="<?php _e( 'Email', 'custom-wp-login' ); ?>">
            </p>

            <p class="form-row">
                <input type="submit" name="submit" class="primary-btn" id="lostpassword-button" value="<?php _e( 'Reset Password', 'custom-wp-login' ); ?>">
            </p>
        </form>
    </div>
</div>
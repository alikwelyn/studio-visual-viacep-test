  <div class="container user-auth">
    <div class="row vertical-center">
      <div class="col-md-12 mx-auto">
        <div class="card flex-row my-5 border-0 shadow overflow-hidden">
          <div class="card-body p-4 p-sm-5">

            <div class="card-body">
              <div class="row d-flex justify-content-between">
                <div class="col-md-12">
                  <div class="d-flex">
                    <div class="mr-auto">
                      <div class="brand-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.svg" alt="logo" class="logo" width="200">
                      </div>
                    </div>
                    <!--<div class="tabs">
                      <span class="login-tab"><a class="log-in active" href="#login-tab-content"><span>Login<span></a></h3>
                    	<span class="signup-tab"><a class="sign-up" href="#signup-tab-content"><span>Sign Up</span></a></>
                    </div>-->
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-wrap">
                      <div class="tabs-content">
                          <div id="login-tab-content" class="active">
                              <p class="login-card-description">Dashboard - Account details</p>
                              <?php 

                                  global $current_user;
                                  $user_id = get_current_user_id();
                                  $username = $current_user->user_login;
                                  $firstName = get_user_meta($user_id, 'first_name', true);
                                  $lastName = get_user_meta($user_id, 'last_name', true);
                                  $email = $current_user->user_email;
                                  $zip = get_user_meta($user_id, 'zip', true);
                                  $address = get_user_meta($user_id, 'address', true);
                                  $number = get_user_meta($user_id, 'number', true);
                                  $district = get_user_meta($user_id, 'district', true);
                                  $city = get_user_meta($user_id, 'city', true);
                                  $state = get_user_meta($user_id, 'state', true);

                                ?>
                              

                              <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input type="text" name="username" id="username" autocomplete="off"
                                placeholder="<?php echo $username; ?>"
                                class="form-control bg-white border-left-0 border-md" disabled>
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
                                placeholder="<?php echo $firstName; ?>"
                                class="form-control bg-white border-left-0 border-md" disabled>
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
                                placeholder="<?php echo $lastName; ?>"
                                class="form-control bg-white border-left-0 border-md" disabled>
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
                                placeholder="<?php echo $email; ?>"
                                class="form-control bg-white border-left-0 border-md" disabled>
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
                                placeholder="<?php echo $zip; ?>"
                                class="form-control bg-white border-left-0 border-md" disabled max="8">
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
                                placeholder="<?php echo $address; ?>"
                                class="form-control bg-white border-left-0 border-md" disabled>
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
                                    placeholder="<?php echo $number; ?>"
                                    class="form-control bg-white border-left-0 border-md" disabled>
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
                                    placeholder="<?php echo $district; ?>"
                                    class="form-control bg-white border-left-0 border-md" disabled>
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
                                    placeholder="<?php echo $city; ?>"
                                    class="form-control bg-white border-left-0 border-md" disabled>
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
                                    placeholder="<?php echo $state; ?>"
                                    class="form-control bg-white border-left-0 border-md" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mx-auto">
                      <a class="btn btn-primary btn-block py-2 btn-green"
                          href="<?php echo wp_logout_url(); ?>">
                          <span class="font-weight-bold"><?php _e( 'Logout', 'custom-wp-login' ); ?></span>
                      </a>
                    </div>



                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="card-img-left d-none d-md-flex">
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">

                <div class="carousel-item bg bg1 active">
                  <div class="carousel-caption">
                    <h1>Example</h1>
                    <p>Slide 1</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
                <div class="carousel-item bg bg2">
                  <div class="carousel-caption">
                    <h1>Example</h1>
                    <p>Slide 2</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
                <div class="carousel-item bg bg3">
                  <div class="carousel-caption">
                    <h1>Example</h1>
                    <p>Slide 3</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>

              </div>
            </div>
                    
          </div>
        </div>
      </div>
    </div>
  </div>
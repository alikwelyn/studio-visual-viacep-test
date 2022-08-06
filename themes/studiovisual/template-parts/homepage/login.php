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
                <?php echo do_shortcode( '[custom-login-form]' ); ?>
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
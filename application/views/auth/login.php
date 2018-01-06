<div  class="bg-full-page ms-hero-bg-dark ms-hero-img-airplane back-fixed">
  <div class="col-lg-5 col-md-6 absolute-center" >

    <!--Card Dark-->
    <?php if( $message ) : ?>
      <div class="alert alert-primary" role="alert">
        <?php echo $message;?>
      </div>
    <?php endif ?>

    <div class="card card-dark">

      <div class="ms-hero-bg-primary ms-hero-img-mountain">
        <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Login Form</h2>
      </div>

      <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-transparent indicator-primary" role="tablist">
        <li class="nav-item current">
          <a class="nav-link <?= $tab == 'login' ? 'active' : '' ?>" 
          data-toggle="tab" href="#loginTab" role="tab" 
          aria-selected="<?= $tab == 'login' ? 'true' : 'false' ?>">
          <i class="zmdi zmdi-account"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $tab == 'registration' ? 'active' : '' ?>" 
            data-toggle="tab" href="#registrationTab" role="tab" 
            aria-selected="<?= $tab == 'registration' ? 'true' : 'false' ?>">
            <i class="zmdi zmdi-account-add"></i> Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $tab == 'recovery' ? 'active' : '' ?>" 
            data-toggle="tab" href="#recoveryTab" role="tab" 
            aria-selected="<?= $tab == 'recovery' ? 'true' : 'false' ?>">
            <i class="zmdi zmdi-key"></i> Recovery</a>
        </li>
      </ul> 
      <!--Card content-->
      <div class="card-block">

        <div class="tab-content">
            <!--Panel 1-->
            <div class="tab-pane <?= $tab == 'login' ? 'active show' : 'fade' ?>" id="loginTab" role="tabpanel">
              <?php echo form_open("auth/login");?>
              <fieldset>
                <div class="form-group label-floating is-empty">
                  <div class="input-group md-form">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-account"></i>
                    </span>
                    <?php echo lang('login_identity_label', 'identity', 'class="control-label"');?>
                    <?php echo form_input($identity, '', 'class="form-control"');?>
                  </div>
                </div>
                <div class="form-group label-floating is-empty">
                  <div class="input-group md-form">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-lock"></i>
                    </span>
                    <?php echo lang('login_password_label', 'password', 'class="control-label"');?>
                    <?php echo form_input($password, '', 'class="form-control"');?>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-5">
                    <div class="form-group mt-1">
                      <div class="checkbox">
                        <label>
                          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                          <span class="checkbox-material"><span class="check"></span></span> Remember 
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-7 text-right">
                    <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-raised btn-primary"');?>
                  </div>
                </div>
              </fieldset>
              <?php echo form_close();?>
            </div>
            <!--/.Panel 1-->

            <!--Panel 2-->
            <div class="tab-pane  <?= $tab == 'registration' ? 'active show' : 'fade' ?>" id="registrationTab" role="tabpanel">
              <?php if( $registration_message ) : ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $registration_message;?>
                    </div>
              <?php endif ?>

              <?php echo form_open("auth/register_user");?>
              
              <fieldset>
                <div class="form-group label-floating is-empty">
                  <div class="input-group md-form">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-account"></i>
                    </span>
                    <label class="control-label" for="ms-form-user">Username</label>
                    <?php echo form_input($first_name,'','class="form-control"');?>
                  </div>
                </div>
                <div class="form-group label-floating is-empty">
                  <div class="input-group md-form">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-email"></i>
                    </span>
                    <label class="control-label" for="ms-form-email">Email</label>
                    <?php echo form_input($email,'','class="form-control"');?>
                  </div>
                </div>
                <div class="form-group label-floating is-empty">
                  <div class="input-group md-form">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-lock"></i>
                    </span>
                    <label class="control-label" for="ms-form-pass">Password</label>
                    <?php echo form_input($password,'','class="form-control"');?>
                  </div>
                </div>
                <div class="form-group label-floating is-empty">
                  <div class="input-group md-form">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-lock"></i>
                    </span>
                    <label class="control-label" for="ms-form-pass">Re-type Password</label>
                    <?php echo form_input($password_confirm,'','class="form-control"');?>
                  </div>
                  <input type="hidden" name="registration" value="1">
                </div>
                <div class="form-group text-center">
                  <?php echo form_submit('submit', 'Register Now', 'class="btn btn-raised btn-block btn-primary"');?>
                </div>
              </fieldset>
              <?php echo form_close();?>
            </div>
            <!--/.Panel 2-->

            <!--Panel 3-->
            <div class="tab-pane  <?= $tab == 'recovery' ? 'active show' : 'fade' ?>" id="recoveryTab" role="tabpanel">
              
              <?php echo form_open("auth/forgot_password");?>
              <fieldset>
                <div class="form-group label-floating is-empty">
                  <div class="input-group md-form">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-account"></i>
                    </span>
                    <label class="control-label" for="ms-form-user">Username</label>
                    <?php echo form_input($first_name,'','class="form-control"');?>
                  </div>
                </div>
                <div class="form-group label-floating is-empty">
                  <div class="input-group md-form">
                    <span class="input-group-addon">
                      <i class="zmdi zmdi-email"></i>
                    </span>
                    <label class="control-label" for="ms-form-email">Email</label>
                    <?php echo form_input($identity,'','class="form-control"');?>
                  </div>
                  <div class="form-group text-center">
                    <?php echo form_submit('submit', 'Send Password', 'class="btn btn-raised btn-block btn-primary"');?>
                  </div>
                </div>
              </fieldset>
              <?php echo form_close();?>
            </div>
              <!--/.Panel 3-->
        </div>
      </div>
      <!--/.Card content-->
    </div>
  </div>
</div>
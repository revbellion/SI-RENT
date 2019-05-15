
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('template/docs/') ?>css/main.css">
    <!-- Font-icon css-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>SI-RENTCAR | Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
       
      <div class="login-box">
        <form class="login-form" action="<?php echo base_url('auth') ?>" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-car"></i> SI-RENTCAR</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input name="username" class="form-control" type="text" autofocus value="<?php echo set_value('username') ?>">
            <small class="font-weight-bold text-danger"><?php echo form_error('username') ?></small>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input name="password" class="form-control" type="password">
            <small class="font-weight-bold text-danger"><?php echo form_error('password') ?></small>
          </div>
           
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url('template/docs/') ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url('template/docs/') ?>js/popper.min.js"></script>
    <script src="<?php echo base_url('template/docs/') ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('template/docs/') ?>js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url('template/docs/') ?>js/plugins/pace.min.js"></script>
     
  </body>
</html>
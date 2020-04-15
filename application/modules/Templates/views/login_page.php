<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/login_styel.css">
</head>
<body class="login_body">
  <?php 
  $first_bit =$this->uri->segment(1);
  $form_location=base_url().$first_bit.'/submit_login';
  ?>
  

  
  <!------ Include the above in your HEAD tag ---------->

  <div class="container">
    <div class="col-sm-offset-3 col-xs-offset-1 col-md-offset-4 " style="text-align: center; padding-left: 130px; padding-bottom: 0px; padding-top: 40px">
      <img style="max-width: 120px;height: auto" src="<?php echo base_url();?>assets/img/logi_user.png" class="img-circle img-responsive">
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form"  action="<?= $form_location?>" method="post">
          <fieldset>
            <h2 style="text-align: center;">Please Sign In</h2>
            <hr class="colorgraph">
            <div class="form-group">
              <input id="email" class="form-control input-lg" name="username" value="<?= $username?>" class="form-control" placeholder ="Enter Username or Email Address">
            </div>
            <div class="form-group">
              <input type="password" id="password" class="form-control input-lg" name="pword"  placeholder="Enter Password">
            </div>
            <span class="button-checkbox">
             <?php
             if ($first_bit=="youraccount") {
              ?>
              <button type="button" class="btn" data-color="info">Remember Me</button>
              <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
              <?php 
            } ?>
            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
          </span>
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success btn-block">
                Sin In
              </button>
            </div>
            <?php
             if ($first_bit=="youraccount") {
              ?>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <a href="<?= base_url()?>youraccount/start" class="btn btn-lg btn-primary btn-block" >Register</a>
            </div>
            <?php 
            }
             ?>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

</div>

<script
src="http://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous">   
</script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url()?>assets/js/login_style.js"></script>
</body>
</html>
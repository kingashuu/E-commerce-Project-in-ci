<?php 
$first_bit =$this->uri->segment(1);
$form_location=base_url().$first_bit.'/submit_login';
?>

<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">

            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" action="<?= $form_location?>" method="post">
                            <div class="form-group ">
                                  <label for="username" class="text-white">Username:</label>
                                <input type="text" name="username" value="<?= $username?>" class="form-control" placeholder ="Enter Username or Email Address">
                            </div>
                            <div class="form-group">
                                  <label for="password" class="text-white">Password:</label>
                                <input type="password" name="pword"  class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="checkbox">
                              <?php
                              if ($first_bit=="youraccount") {
                                ?>
                              
                            <label>
                                 <input type="checkbox" name="remember" value="remember-me" class="text-white">
                                 <label class="text-white">Remember me</label> 
                             </label>
                             <?php
                             }
                             ?>
                             </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block login_btn" type="submit" name="submit" value="submit">Sign in <i class="fas fas-unlock"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form role="form">
      <fieldset>
        <h2>Please Sign In</h2>
        <hr class="colorgraph">
        <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
        </div>
        <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
        </div>
        <span class="button-checkbox">
          <button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
          <a href="" class="btn btn-link pull-right">Forgot Password?</a>
        </span>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="" class="btn btn-lg btn-primary btn-block">Register</a>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

</div>
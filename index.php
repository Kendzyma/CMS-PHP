<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kendzyma</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> -->
    <link rel="stylesheet" href="extensions/fontawesome-free-5.14.0-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="extensions/bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <!-- Login form start-->
      <div class="row justify-content-center wrapper" id="login-box">
        <div class="col-lg-10 my-auto">
          <div class="card-group myshadow" >
            <div class="card rounded-left p-4" style="flex-grow:1.4;">
              <h1 class="text-center font-weight-bold text-primary">Sign in to account</h1>
              <hr class="my-3" >
                <!-- input for email -->
              <form class="px-3" id="login-form" action="#" method="post">
                <div id="loginAlert">

                </div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="far fa-envelope fa-lg"></i>
                    </span>
                  </div>
                  <input type="email" name="email"  id="email" class="form-control rounded-0" placeholder="E-mail" required value="<?php if(isset($_COOKIE['email'])){
                    echo $_COOKIE['email'];
                  } ?>">
                </div>
                  <!-- input for password -->
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="fas fa-key fa-lg"></i>
                    </span>
                  </div>
                  <input type="password" name="password"  id="password" class="form-control rounded-0" placeholder="password" required required value="<?php if(isset($_COOKIE['password'])){
                    echo $_COOKIE['password'];
                  } ?>">
                </div>
                <!--  remember me checkbox  -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox float-left">
                    <input  type="checkbox" name="rem" class="custom-control-input" id="customCheck" <?php if(isset($_COOKIE['email'])) {

                    ?>>Checked<?php } ?>">
                    <label for="customCheck" class="custom-control-label">Remember me</label>
                  </div>
                  <!-- forget password -->
                  <div class="forgot float-right">
                    <a href="#" id="forgot-link">Forgot password</a>
                  </div>
                  <div class="clearfix">

                  </div>
                </div>
                <!-- submit button -->
                <div class="form-group">
                  <input type="submit" id="login-btn" value="Sign in" class="btn btn-primary btn-lg btn-block myBtn ">

                </div>
              </form>
            </div>
              <!-- Seconds card -->
              <div class="card justify-content-center rounded-right myColor p-4">
                <h1 class="text-center font-weight-bold text-white">Hello friends!</h1>
                <hr class="my-3 bg-light myHr">
                <p class="text-center font-weight-bolder text-light lead">Enter your personal details and start your journey with us!</p>
                <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="register-link">Sign up</button>

              </div>

              </div>

            </div>

          </div>
        </div>
      </div>


      <!-- login form end -->

      <!-- register form start -->

      <div class="row justify-content-center wrapper"id="register-box" style="display:none;">
        <div class="col-lg-10 my-auto">
          <div class="card-group myshadow" >
            <div class="card justify-content-center rounded-left myColor p-4">
              <h1 class="text-center font-weight-bold text-white">Welcome back</h1>
              <hr class="my-3 bg-light myHr">
              <p class="text-center font-weight-bolder text-light lead">To keep connected  with us please login with your personal info</p>
              <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="login-link">Sign in</button>

            </div>

            <div class="card rounded-right p-4" style="flex-grow:1.4;">
              <h1 class="text-center font-weight-bold text-primary">Create account</h1>
              <hr class="my-3" >

              <!-- input for user -->

              <form class="px-3" id="register-form" action="#" method="post">
                <div class="" id="regAlert">

                </div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="far fa-user fa-lg"></i>
                    </span>
                  </div>
                  <input type="text" name="name"  id="name" class="form-control rounded-0" placeholder="Full name" required >
                </div>
                <!-- input for email -->

                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="far fa-envelope fa-lg"></i>
                    </span>
                  </div>
                  <input type="email" name="email"  id="remail" class="form-control rounded-0" placeholder="E-mail" required >
                </div>
                  <!-- input for password -->
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="fas fa-key fa-lg"></i>
                    </span>
                  </div>
                  <input type="password" name="password"  id="rpassword" class="form-control rounded-0" placeholder="password" required minlength="5">
                </div>

                <!-- confirm password -->

                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="fas fa-key fa-lg"></i>
                    </span>
                  </div>
                  <input type="password" name="cpassword"  id="cpassword" class="form-control rounded-0" placeholder="confirm password" required minlength="5">
                </div>
                <div class="form-group">
                  <div class="text-danger font-weight-bold" id="passError">

                  </div>

                </div>
                <!-- submit button -->
                <div class="form-group">
                  <input type="submit" id="register-btn" value="Sign up" class="btn btn-primary btn-lg btn-block myBtn ">

                </div>
              </form>
            </div>
              <!-- Seconds card -->

              </div>

            </div>

          </div>
        </div>
      </div>


      <!-- register form ends -->

      <!-- forgot password start -->
      <div class="row justify-content-center wrapper"id="forogt-box" style="display:none;">
        <div class="col-lg-10 my-auto">
          <div class="card-group myshadow" >
            <div class="card justify-content-center rounded-left myColor p-4">
              <h1 class="text-center font-weight-bold text-white">Reset password</h1>
              <hr class="my-3 bg-light myHr">

              <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="back-link">Back</button>

            </div>
            <div class="card rounded-right p-4" style="flex-grow:1.4;">
              <h1 class="text-center font-weight-bold text-primary">Forgot your password</h1>
              <hr class="my-3" >
              <p class="lead text-center text-secondary">To reset your password enter the registered email address and we will send your the reset instruction on your email!</p>
                <!-- input for email -->
              <form class="px-3" id="forgot-form" action="#" method="post">
                <div id="forgotAlert">
                  
                </div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="far fa-envelope fa-lg"></i>
                    </span>
                  </div>
                  <input type="email" name="email"  id="femail" class="form-control rounded-0" placeholder="E-mail" required >
                </div>
                <!-- submit button -->
                <div class="form-group">
                  <input type="submit" id="forgot-btn" value="reset password" class="btn btn-primary btn-lg btn-block myBtn ">

                </div>
              </form>
            </div>
              <!-- Seconds card -->


              </div>

            </div>

          </div>
        </div>
      </div>
      <!-- forgot password ends -->

    </div>

  <script type="text/javascript" src="extensions/jquery-3.5.1.min.js">
  </script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"> -->
  <script type="text/javascript" src="extensions/bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js">
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#register-link").click(function(){
      $('#login-box').hide();
      $('#register-box').show();
    })

    $("#login-link").click(function(){
    $("#login-box").show();
    $("#register-box").hide();
  });

    $("#forgot-link").click(function(){
      $("#login-box").hide();
      $("#forogt-box").show();
    });
    $("#back-link").click(function(){
      $("#login-box").show();
      $("#forogt-box").hide();

    });
      // Register ajax request
      $("#register-btn").click(function (e){
        if ($("#register-form")[0].checkValidity()){
          e.preventDefault();
          $("#register-btn").val('please wait.....');
          if ($("#rpassword").val() != $("#cpassword").val()) {
            $("#passError").text('* Password did not match!');
              $("#register-btn").val('Sign Up');

          }
          else {
            $("#passError").text('');
            $.ajax({
              url:'assets/php/action.php',
              method: 'POST',
              data : $("#register-form").serialize()+'&action=register',
              success: function(response){
                $("#register-btn").val('Sign Up');
                if(response == 'register'){
                  window.location='home.php';
                }
                else{
                  $("#regAlert").html(response);

                }
              }
            })
          }
        }

      });
      // Login ajax request
      $("#login-btn").click(function(e){
        if($("#login-form")[0].checkValidity()){
          e.preventDefault();
          $("#login-btn").val('please wait....');
          $.ajax({
            url: 'assets/php/action.php',
            method: 'post',
            data: $("#login-form").serialize()+'&action=login',
            success: function(response){
              console.log(response);
                $("#login-btn").val('Sign In');
              if(response=='login'){
                window.location='home.php';
              }
              else{
                $("#loginAlert").html(response);
              }
            }
          })
        }

      });
      // forgot password ajax request
      $("#forgot-btn").click(function(e){
        if($("#forgot-form")[0].checkValidity()){
          e.preventDefault();
          $("#forgot-btn").val('please wait....');
          $.ajax({
            url: 'assets/php/action.php',
            method: 'post',
            data:$("#forgot-form").serialize()+'&action=forgot',
            success:function(response){
              $("#forgot-btn").val('Reset password');
              $("#forgot-form")[0].reset();
              $("#forgotAlert").html(response);
            }
          })
        }
      })
    });
  </script>


</body>
</html>

<?php

require_once 'assets/php/auth.php';

$user=new Auth();
$msg='';
if(isset($_GET['email']) && isset($_GET['token'])){
  $email=$user->test_input($_GET['email']);
  $token=$user->test_input($_GET['token']);

  $auth_user=$user->reset_pass_auth($email,$token);
  if($auth_user!=null){

  if(isset($_POST['submit'])){
    $newpass=$_POST['pass'];
    $cnewpass=$_POST['cpass'];
    
    $hnewpass=password_hash($newpass, PASSWORD_DEFAULT);
    if($newpass==$cnewpass){
      $user->update_new_pass($hnewpass,$email);
      $msg='Password changed successfully!<br><a href="index.php">Login Here!</a>';
    }
    else{
      $msg='Password did not match!';
    }

  }

  }
  else{
    header('location:index.php');
    exit();
  }
}
else{
  header('location:index.php');
    exit();
}




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset password</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> -->
    <link rel="stylesheet" href="extensions/fontawesome-free-5.14.0-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="extensions/bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <!-- Login form start-->
      <div class="row justify-content-center wrapper" >
        <div class="col-lg-10 my-auto">
          <div class="card-group myshadow" >
            <div class="card justify-content-center rounded-left myColor p-4">
              <h1 class="text-center font-weight-bold text-white">Reset you password here</h1>

            </div>
            <div class="card rounded-right p-4" style="flex-grow:2;">
              <h1 class="text-center font-weight-bold text-primary">Enter new password</h1>
              <hr class="my-3" >
              <div class="text-center lead mb-2"><?= $msg; ?></div>
                <!-- input for email -->
              <form class="px-3" action="#" method="post">



                  <!-- input for password -->
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="fas fa-key fa-lg"></i>
                    </span>
                  </div>
                  <input type="password" name="pass"  class="form-control rounded-0" name='pass' placeholder="New Password" required minlength="5">
                </div>
                <!-- confirm new password -->
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                    <i class="fas fa-key fa-lg"></i>
                    </span>
                  </div>
                  <input type="password" name="cpass"  class="form-control rounded-0"  name='pass' placeholder="Confirm new Password" required minlength="5">
                </div>

                <!-- submit button -->
                <div class="form-group">
                  <input type="submit" name="submit" value="Reset Password" class="btn btn-primary btn-lg btn-block myBtn ">

                </div>
              </form>
            </div>
              <!-- Seconds card -->


              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
    </body>
    </html>

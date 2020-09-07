<?php
require_once 'assets/php/session.php';

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?= ucfirst(basename($_SERVER['PHP_SELF'],'.php')) ?>| Kendzyma</title>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> -->
     <link rel="stylesheet" href="extensions/fontawesome-free-5.14.0-web/css/all.min.css">
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="extensions/bootstrap-4.5.2-dist/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" type="text/css" href="../extensions/DataTables/datatables.min.css"> -->
     <style media="screen" type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap");
        *{
          font-family: 'maven pro',sans-serif;
        }

     </style>
   </head>
   <body>
     <nav class="navbar navbar-expand-md bg-dark navbar-dark">
 <!-- Brand -->
 <a class="navbar-brand" href="index.php"><i class="fas fa-code fa-lg"></i>&nbsp;&nbsp;Kendzyma</a>

 <!-- Toggler/collapsibe Button -->
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   <span class="navbar-toggler-icon"></span>
 </button>

 <!-- Navbar links -->
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="navbar-nav ml-auto" >
     <li class="nav-item">
       <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) =="home.php")?"active":"";  ?>" href="home.php"><i class="fas fa-home"></i>&nbsp;Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) =="profile.php")?"active":"";  ?>" href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
     </li>
     <li class="nav-item">
       <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) =="feedback.php")?"active":"";  ?>" href="feedback.php"><i class="fas fa-comment-dots"></i>&nbsp;Feedback</a>
     </li>
     <li class="nav-item">
       <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) =="Notification.php")?"active":"";  ?>" href="Notification.php"><i class="fas fa-bell"></i>&nbsp;Notification</a>
     </li>
     <li class="nav-item dropdown">
       <a href="#" class="nav-link dropdown-toggle" id=navbardrop data-toggle="dropdown">
         <i class="fas fa-user-cog"></i>&nbsp;Hi!<?=$fname;?>
       </a>
       <div class="dropdown-menu">
         <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;Settings</a>
         <a href="assets/php/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
       </div>
     </li>
   </ul>
 </div>
</nav>

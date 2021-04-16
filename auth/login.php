<?php 
//phpinfo();
error_reporting(0); 
session_start();
unset($_SESSION["loginstatus"]);

$user_name=$_POST["email"];
$user_passward=$_POST["passward"];

if(isset($_POST['submitation']))
{
      if(!empty($user_name) && !empty($user_passward)  )
      {

        if($_POST['email'] =='admin@gmail.com' && $_POST['passward']=='123456')
        {
            $_SESSION["loginstatus"]='yes';

            print"<script>location='index.php?pages=patient-tracking'</script>";
        }
        else
        {
            print '<script>alert("invailed user")</script>';
        }
    }
    
}

?>

<!-- <link rel="stylesheet" href="public/css/login.css" type="text/css"> -->
<!-- <section>
    <div class="container">
     <form  class="form-horizontal" method="post" action="">

      <div class="container" style="height:700px;">
        <div class="col-lg-offset-3 " style="margin-top:60px;">
            
          <div class="row">
            <div class="col-lg-6 col-md-6 col-s-12 col-xs-12  ">

            </div>
        </div>
        <div class="form-group has-warning has-feedback" style="margin-top:50px;">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
              
          </div>
      </div>
      <div class="form-group text-primary has-feedback">
        <label for="inputPassword4" class="col-sm-2 control-label">Password</label>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <input type="password" name="passward" class="form-control" id="inputPassword4" placeholder="Password" required="">
         
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
      </label>
  </div>
</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" name="submitation" class="btn btn-primary">Sign in</button>
  </div>
</div>
</form>
</div>
</section> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css" type="text/css">

<style type="text/css">
.login-form-page{
 /*    background: url('../public/images/docdoc.jpg');
     background-size: contain;
     background-position: top left;
     background-repeat: no-repeat;*/
}
button{
  font-family: sans-serif;
  font-weight: 600;
  font-size: 18px;
  text-transform: uppercase;
  padding: 10px 50px !important;
}
label{
  font-family: sans-serif;
  font-weight: 300;
  font-size: 18px;
  text-transform: capitalize;
}
</style>
  </head>
  <body>
  
  <section class="login-form-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 d-none d-md-block doctor-banner">
          <img src="public/images/docdo.jpg" class="img-fluid">
        </div>
        <div class="col-xl-3 offset-xl-1 col-lg-4 offset-lg-1 col-md-12 align-self-center py-lg-0 py-5">
          <form class="form-horizontal" method="post" action="">
            <div class="form-group">
              <label for="inputEmail3">Email address</label>
              <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label for="inputPassword4">Password</label>
              <input type="password" name="passward" class="form-control" id="inputPassword4" placeholder="Password" required="">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="check1">
              <label class="form-check-label" for="check1">Remember me</label>
            </div>
            <button type="submit" name="submitation" class="btn btn-primary">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </section>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
  </body>
</html>
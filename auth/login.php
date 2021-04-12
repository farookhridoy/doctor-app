<?php 
error_reporting(0); 
session_start();
unset($_SESSION["loginststus"]);

$user_name=$_POST["email"];
$user_passward=$_POST["passward"];

if(isset($_POST['submitation']))
{
      if(!empty($user_name) && !empty($user_passward)  )
      {

        if($_POST['email'] === 'admin@gmail.com' && $_POST['passward']==='123456')
        {
            $_SESSION["loginststus"]='yes';

            print"<script>location='index.php?pages=patient-tracking'</script>";
        }
        else
        {
            print '<script>alert("invailed user")</script>';
        }
    }
    
}

?>

<link rel="stylesheet" href="public/css/login.css" type="text/css">
<section>
    <div class="container">
     <form  class="form-horizontal" method="post" action="">

      <div class="container" style="height:700px;">
        <div class="col-lg-offset-3 " style="margin-top:60px;">
            <span class="text-center col-lg-2 col-sm-2 col-md-1 col-xs-2">LogIn Bicroy.com</span>
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
</section>


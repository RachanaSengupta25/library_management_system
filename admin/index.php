<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
$ret=mysqli_query($con,"SELECT * FROM admin WHERE name='".$_POST['email']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="../library/index.php";
$_SESSION['alogin']=$_POST['email'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";

echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>

</head>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div>
          <center><h2>SIGN IN TO LIBRARY MANAGEMENT ADMIN</h2></center>
          <br>   
        </div>


<div class="container">
<br>
  <form id="login-form" class="login-form" action="" method="post">
     <p style="color: #F00"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
    <div class="form-group">
      <label for="uname">Username:</label>
      <div class="controls">
        <div class="input-with-icon  right">                                       
          <i class=""></i>
          <input type="text" name="email" id="txtusername" class="form-control">                                 
        </div>
            </div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
     <div class="controls">
        <div class="input-with-icon  right">                                       
          <i class=""></i>
          <input type="password" name="password" id="txtpassword" class="form-control">                                 
        </div>
            </div>
    </div>
    <button class="btn btn-primary btn-cons pull-right" name="login" type="submit">Login</button>
  </form>
</div>
  
  </div>
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
	<script type="text/javascript" src="js/exporting.js"></script>	
</body>
</html>
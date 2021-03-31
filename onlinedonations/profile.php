<?php

include("config.php");
if(!isset($_SESSION['login_sess']))
{
    header("location:login.php");
}
$email=$_SESSION['login_email'];
$find=mysqli_query($con,"select * from users where (email='$email')");
if ($r=mysqli_fetch_array($find)){
    $firstname=$r['firstname'];
    $lastname=$r['lastname'];
    $username=$r['username'];
}
?>
<html>
<head>
<title> Givers--Donate here</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body style="background-color:white;background-image: images/back4.jpg">
<div id="block">

<a href="home.php"><img src = "images/Capturre.jpg"; height=120px; width=200px></a>
</div>
<hr>
<center>
<p style="color:gold;font-size:50px;font-family:vivaldi">Profile Details</p></center>
<div id="come">
<div id="form">
<label> Firstname *: </label><br/>
<input type="text" name="fname" class="inputFields"  value="<?php echo  $firstname;?>" /><br><br/>
<label> Lastname *: </label><br/>
<input type="text" name="lname" class="inputFields"  value="<?php echo  $lastname;?>"  /><br><br/>
<label> Username *: </label><br/>
<input type="text" name="uname" class="inputFields"   value="<?php echo $username;?>"  /><br><br/>
<label>Email *: </label><br/>
<input type="email" name="email" class="inputFields"  value="<?php echo $email;?>"  /><br><br/>
</div>
</div>

</body>
</html>

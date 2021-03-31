<?php

include("config.php");
if(!isset($_SESSION['login_sess']))
{
    header("location:login.php");
}
$email=$_SESSION['login_email'];
$find=mysqli_query($con,"select * from users where (email='$email')");
if ($r=mysqli_fetch_array($find)){
    $username=$r['username'];
}
?>
<html>
<head>
<title> Givers--Donate here</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body style="background-color:white;background-image:none">
<div id="block">

<a href="home.php"><img src = "images/Capturre.jpg"; height=120px; width=200px></a>
</div>
<?php
  if(isset($_POST['rsubmit']))
  {
	   
	   $uname=$username;
	   $NGO=$_POST['ngo'];
	   $mob=$_POST['number'];
       $aadhar=$_POST['aadhar'];
	   $account=$_POST['account'];
	   $amount=$_POST['amount'];
	   if(!preg_match('/^[0-9]{10}$/',$mob))
	   {
		$error[]=die('Mobile No:Please enter 10 digits');
	   }
       if(!preg_match('/^[0-9]{12}$/',$aadhar))
	   {
		$error[]=die('Aadhar card:Please enter 12 digits');
	   }
       if(!preg_match('/^[0-9]{11}$/',$account))
	   {
		$error[]=die('Account No:Please enter 11 digits');
	   }
	
       $result1=mysqli_query($con,"INSERT into info values('$uname','$NGO','$mob','$aadhar','$amount','$account')");
		   if($result1)
		   {
                  echo 'successfully paid';
		   }
		   else{
			   echo 'Failed:Something went wrong';
		   }
  }
?>
<hr>
<center>
<p style="color:gold;font-size:50px;font-family:vivaldi">Donation Details</p></center>
<div id="come">
<div id="form">
<form method="POST" action="">
<?php
echo "<p style='color:orange;font-size:25px'><b>Hello ,$username</strong></p></b>";
echo "<p style='color:gold;font-family:impact;font-size:15px'>Please fill out the below details to carry out your Good Work</p>";
?>

<label>Select your NGO: </label><br/>
<select name="ngo">
<option>Sarthak Foundation</option><option>Humsafar</option><option>Pratham</option>

<option>Dada-Dadi </option>
<option>NHFDC</option>
</select>

<br/><br/>
<label>Mobile Number: </label><br/>
<input type="text" name="number" class="inputFields"  required /><br><br/>
<label>Aadhar Number: </label><br/>
<input type="text" name="aadhar" class="inputFields" required /><br><br/>
<label>Account No: </label><br/>
<input type="text" name="account" class="inputFields" required /><br><br/>
<label>Donation Amount: </label><br/>
<input type="text" name="amount" class="inputFields" required/><p style='font-size:15px'>Example:10000,50000,100000</p>
<input type="submit" class="thebuttons" name="rsubmit" value="Make Payment" /><br>
Before donate see different NGO's? <a href="ngo.html"> click here</a>
</div>
</div>

</body>
</html>

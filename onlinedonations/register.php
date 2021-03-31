<?php
include ("config.php");
?>
<html>
<head>
<title> Givers--Donate here</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body>
<div id="block">
<a href="home.php"><img src = "images/Capturre.jpg"; height=120px; width=200px></a>
</div>
<?php
  if(isset($_POST['submit']))
  {
	   $fname=$_POST['fname'];
	   $lname=$_POST['lname'];
	   $uname=$_POST['uname'];
	   $email=$_POST['email'];
	   $password=$_POST['password'];
	   $passwordconfirm=$_POST['passwordconfirm'];
	   $occupation=$_POST['occupation'];
	   $gen=$_POST['gen'];
	   if(strlen($fname)<3)
	   {
		   $error[]=die('Please enter first-name 3 characters atleast');
	   }
	   if(strlen($fname)>20)
	   {
		   $error[]=die('firstname is not greater than 20 characters');
	   }
	   if(!preg_match("/^[a-zA-Z _]*[a-zA-Z ]+[a-zA-Z _]*$/",$fname)){
		$error[]=die('Invalid entry firstname.please enter letters without any digit or special symbols');
	   }
	   if(strlen($lname)<3)
	   {
		   $error[]=die('Please enter lastname 3 characters atleast');
	   }
	   if(strlen($lname)>20)
	   {
		   $error[]=die('lastname is not greater than 20 characters');
	   }
	   if(!preg_match("/^[a-zA-Z _]*[a-zA-Z ]+[a-zA-Z _]*$/",$lname)){
		$error[]=die(' Invalid entry lastname.please enter letters without any digit or special symbols');
	   }
	   if(strlen($uname)<3)
	   {
		   $error[]=die('Please enter username 3 characters atleast');
	   }
	   if(strlen($uname)>20)
	   {
		   $error[]=die('username is not greater than 20 characters');
	   }
	   if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/",$uname)){
		$error[]=die(' Invalid entry username.please enter  lowercase letters without any space and no number at the start');
	   }
	   
	   if(strlen($email)>40)
	   {
		   $error[]=die('email is not greater than 40 characters');
	   }
	   if(strlen($password)<5)
	   {
		   $error[]=die('Please enter password 5 characters atleast');
	   }
	   if(strlen($password)>20)
	   {
		   $error[]=die('password is not greater than 20 characters');
	   }
	   if($passwordconfirm='')
	   {
		$error[]=die('Please enter password confirm');
	   }
	   if ($password !== $passwordconfirm) 
	   {
		  $errors[] =die('Password and Confirm password should match!!'); 
	   }
		   $options= array("cost"=>4);
		   $password=password_hash($password,PASSWORD_BCRYPT,$options);
		   $result=mysqli_query($con,"INSERT into users values('$fname','$lname','$uname','$email','$password','$gen','$occupation')");
		   if($result)
		   {
                  echo 'successfully register';
				  header("location:login.php");
		   }
		   else{
			   echo 'Failed:Something went wrong';
		   }
  }
?>
<hr>
<div id="come">
			

<div id="form">
<form method="POST" action="" enctype="multipart/form-data">
<p><strong>Register here...</strong></p>
<label> Firstname *: </label><br/>
<input type="text" name="fname" class="inputFields"   minlength="3" maxlength="20" required /><br><br/>
<label> Lastname *: </label><br/>
<input type="text" name="lname" class="inputFields"  minlength="3" maxlength="20" required /><br><br/>
<label> Username *: </label><br/>
<input type="text" name="uname" class="inputFields"  minlength="3" maxlength="20" required /><br><br/>
<label>Email *: </label><br/>
<input type="email" name="email" class="inputFields" maxlength="40" required /><br><br/>
<label>Password *: </label><br/>
<input type="password" name="password" class="inputFields" minlength="5" maxlength="20" required /><br><br/>
<label>Re-enter Password *: </label><br/>
<input type="password" name="passwordconfirm" class="inputFields" minlength="5" maxlength="20" required/><br><br/>
<label>Occupation *: </label><br/>
<input type="text" name="occupation" class="inputFields" required /><br><br/>
<label>Gender *:</label>
<input type="radio" name="gen" value="male" >Male
<input type="radio" name="gen" value="female" >Female<br><br/>
<input type="submit"  name="submit"  value="Signup" class="thebuttons"/><br><br/>
Already have an Account click here to <a href="login.php"> Login</a>
</div>
</div>
</form>

</body>
</html> 
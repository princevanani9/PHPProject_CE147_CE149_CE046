<html>
<head>
<title> Givers--Donate here</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body>
<div id="block">

<a href="home.php"><img src = "images/Capturre.jpg"; height=120px; width=200px></a>
</div>
<hr>
<div id="come">



<div id="form">
<form method="POST" action=""><br><br><br><br>
<p><strong>Login here...</strong></p>
<label>Username: </label><br/>
<input type="text" name="username" class="inputFields" required /><br><br/>
<label>Password: </label><br/>
<input type="password" name="password1" class="inputFields" required/><br><br/>

<input type="submit" class="thebuttons" name="sublogin"  value="Login"/><br>
Need an account? click here to <a href="register.php"> Register</a>
</div>

</div>
</form>
<?php
include ("config.php");
if(isset($_POST['sublogin']))
{
     $ul=$_POST['username'];
     $pl=$_POST['password1'];
    $query="select * from users where (username='$ul')";
    $res=mysqli_query($con,$query);
    $numRows=mysqli_num_rows($res);
    if($numRows ==1){
        $row=mysqli_fetch_assoc($res);
        if(password_verify($pl,$row['password'])){
            $_SESSION["login_sess"]="1";
            $_SESSION["login_email"]=$row['email'];
            header("location:home.php");
        }
        else{
            header("location:login.php");
        }
    }
    else{
        header("location:login.php");
    }
}
?>
</body>
</html>
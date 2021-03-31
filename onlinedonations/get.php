
<html>
<head>
<title> Givers--Donate here</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body>
<div id="block">
			 	<a href="home.php"><img src = "images/Capturre.jpg"; height=120px; width=200px; border="1"></a>
</div>
<div id="menuu">
<a href="profile.php"><strong>Profile</strong></a>
              <a href="register.php"><strong>Sign Up</strong></a>
			  <a href="login.php"><strong>Login</strong></a>
			  <a href="logout.php"><strong>Logout</strong></a>
</div>
<br><br>
<hr>
<div id="come">
<div id="form">
<p><strong><h1>Total Fund collected</h1></strong></p>
</div>
<?php
include("config.php");
$query1="select * from info where (NGO='Sarthak Foundation')";
$query2="select * from info where (NGO='Humsafar')";
$query3="select * from info where (NGO='Pratham')";
$query4="select * from info where (NGO='Dada-Dadi ')";
$query5="select * from info where (NGO='NHFDC')";
$result1=mysqli_query($con,$query1);
echo '<h2>Funds for Sarthak Foundation :</h2>';
echo "<br/>";
while ($row = mysqli_fetch_assoc($result1)) {
    echo $row['username'].":-";
    echo $row['Amount'];
    echo "<br/>";
    }

    $result2=mysqli_query($con,$query2);
    echo "<br/>";
    echo '<h2>Funds for Humsafar :</h2>';
    echo "<br/>";
while ($row = mysqli_fetch_assoc($result2)) {
    echo $row['username'].":-";
    echo $row['Amount'];
    echo "<br/>";
    }
    echo "<br/>";
    echo '<h2>Funds for Pratham :</h2>';
    echo "<br/>";

    $result3=mysqli_query($con,$query3);
while ($row = mysqli_fetch_assoc($result3)) {
    echo $row['username'].":-";
    echo $row['Amount'];
    echo "<br/>";
    }
    echo "<br/>";
    echo '<h2>Funds for Dada-Dadi :</h2>';
    echo "<br/>";
    echo "<br/>";
    $result4=mysqli_query($con,$query4);
while ($row = mysqli_fetch_assoc($result4)) {
    echo $row['username'].":-";
    echo $row['Amount'];
    echo "<br/>";
    }
    echo "<br/>";
    echo '<h2>Funds for NHFDC :</h2>';
    echo "<br/>";
    echo "<br/>";
    $result5=mysqli_query($con,$query5);
    while ($row = mysqli_fetch_assoc($result5)) {
        echo $row['username'].":-";
        echo $row['Amount'];
        echo "<br/>";
        }
    

?>
</div>
</form>
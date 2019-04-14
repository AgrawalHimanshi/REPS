<?php

$host='localhost';
$user='root';
$password='';
$dbname='admin';
$dbconn=mysqli_connect($host,$user,$password,$dbname);
session_start();
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $myusername=mysqli_real_escape_string($dbconn, $_POST['Username']);
    $mypassword=mysqli_real_escape_string($dbconn, $_POST['Password']);
    
    $sql="SELECT a_id FROM account where Username = '$myusername' and Password = '$mypassword'";
    $result=mysqli_query($dbconn, $sql);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    
    if(mysqli_num_rows($result)==1){
      $_SESSION['Username']=$myusername;
         //echo "<script>alert('correct Username and Password')</script>";
    header("Location:profile.php");
    }
    else{
        echo "<script>alert('Incorrect Username and Password')</script>";
    }
    
}

?>









<html>
<head>
	<title>Revolutionary Electronic Polling System/Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body
		{
			background-image:url(bg1.jpg);
			background-size:cover;
			background-repeat:no-repeat;
			margin:0;
			padding:0;
			/*font-family:Arial;*/
		}
		.ECI h1
		{
			color: white;
			padding-top: 0px;
			padding-right: 1px;

		}
		
		
		.login
		{
			/*border:2px #ff267e groove;*/
			margin:200px 5px 15px 250px;
			/*position:absolute;*/
			width:400px;
			height: 220px;
			box-shadow:0px 8px 16px 0px rgba(0,0,0,0.9);
			padding:80px 40px;
			padding-top: 20px;
			margin-top:150px;
			background-color: (0,0,0,0.4);
			border-radius:15px;
			-webkit-border-radius:15px;
			-o-border-radius:15px;
			-moz-border-radius:15px;
			box-shadow: inset -4px -4px rgba(0,0,0,0.5);
			background: linear-gradient(to left, #36486b 1%, #000066 90%); 
		}

		.admin
		{
			width: 150px;
			height: 120px;
			/*overflow: hidden;*/
			position: absolute;
			top:calc(-100px/2);
			top:calc(50% -50px);
			margin-top: 398px;
			margin-left: 125px;
		}
		
		h1
		{
			margin:0 0 30px 0;
			padding:15px;
			color:#ff267e;
			text-align:center;
		}
		
		input
		{
			width:100%;
			margin-bottom:10px;
		}
		
		input[type=text],input[type=password]
		{
			border:none;
			outline:none;
			border:2px #fff dotted;
			background:transparent;
			border-radius:20px;
			box-sizing:border-box;
			color:#FEFFFF;
			font-size:14px;
			font-weight: bolder;
			padding:5px;
			text-align:center;
		}
		

		*::-webkit-input-placeholder 
		{
    		color: white;
		}
		*:-moz-placeholder 
		{
    		color: white;
		}
		*::-moz-placeholder 
		{
    		color: white;
		}
		*:-ms-input-placeholder {
   			color: white;
		}

		input[type=Submit]
		{
			border:none;
			outline:none;
			padding:10px;
			margin-top: 30px;
			color:#fff;
			font-size:20px;
			font-family:Arial;
			background:#ff267e;
			cursor:pointer;
			border-radius:20px;
		}
		
		input[type=Submit]:hover
		{
			bakground:#efed40;
			color:#262626;
		}

		<div style="border:1px solid red;float:left">
	   		<input type="radio" />
		</div>

		
	</style>
</head>
<body>
	<div id="grad1">
	
	<div class="image">
		<img src="image\REPS img2.png" 
		alt="ECI logo" style="width:175px;height:146px;">
	</div>
	<div class="ECI">
		<center>
		<h1><font face="Times New Roman">Revolutionary Electronic Polling System </font></h1>
		</center>
	</div>
</div>

	<header>
		<nav>
			<ul id="nav">
				<li><a class="homeblack" href="index.php">Home</a></li>
				<li><a class="homered" href="Administrator_Login.php">Log In</a></li>
				<!--<li><a class="homeblack" href="Candidate_Registration.php">Candidate Registration</a></li>
				<li><a class="homeblack" href="#">Upload Result</a></li>-->
				
			
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

<!-- log strip ends..............................-->
	<tr>
	<td height="53">
		<img src="image/eci_logostrip.jpg" style="width: 100%;">
	</td>
 </tr>

 <!-- log strip ends..............................-->


<div class="login">
	<img src="image/administrator1.png" class="admin">
	<h1>Administrator Login</h1>
	<form method="post" action="#" >
	
		<input type="text" placeholder="User-Name" name="Username" >
		<input type="password" placeholder="Password" name="Password" >
		<input type="Submit" value="Submit" name="">
		
	</form>

</div>

	<!--footer starts-->
<footer>
	<div id="footer-inner">
		<!--<section class="one-third" id="footer-third">
			<h3>contact</h3>
			<p class="footercontent">The reps is revolutioanry electronic polling system</s><br>
			</p>
		</section>-->
		<section class="one-third" id="footer-third">
			<h3>social</h3>
			<br>
			<ul class="social">
				<li><a href="https://www.facebook.com/Revolutionary-Electronic-Polling-System-247817965747003/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="http://www.youtube.com/eci" target="_blank"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</section>

		<section class="one-third" id="footer-third-last">
			<h3>Pages</h3>
			<br>
			<h5>
				<a href="index.php">Home</a> -
				<a href="Administrator_Login.php">Log In</a> 
				<!--<a href="Candidate_Registration.php">Candidate Registration</a> -
				<a href="#">Upload Result</a> -->
				

				
			</h5>

		</section>
	</div>
</footer>
<footer class="second">
	<p>&copy REVOLUTIONARY ELECTRONIC POLLING SYSTEM, 2017</p>
</footer>

</body>
</html>>
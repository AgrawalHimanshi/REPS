<!DOCTYPE html>
<html>
<head>
	<title>Revolutionary Electronic Polling System</title>
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
			/*background:rgba(0,0,0,0.5);*/
			background: linear-gradient(to left, #36486b 2%, #000066 90%); 
		}

		.user
		{
			width: 150px;
			height: 150px;
			/*overflow: hidden;*/
			position: absolute;
			top:calc(-100px/2);
			top:calc(50% -50px);
			margin-top: 398px;
			margin-left: 125px;
		}
		
		.main
		{
			height: 320%;
		}
		.ECI h1
		{
			
			color: white;
			padding-top: 0px;
			padding-right: 1px; 
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
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<li><a class="homeblack" href="User_Registration2.php">Registration</a></li>
				<li><a class="homered" href="User_Login.php">Log In</a></li>
				
				
				
				 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="AboutECI.php">About ECI</a>
      <a href="AboutREPS.php">About REPS</a>
    </div>
  </li>
  			<li><a class="homeblack" href="contact.php">Contact</a></li>
  			<?php  
                $dbcon=mysqli_connect("localhost","root","");  
                mysqli_select_db($dbcon,"admin");
                $status="select * from result";
                 $run=mysqli_query($dbcon,$status);
                $row = mysqli_fetch_array($run);
                if($row['status']==0)
                { }
                else{
            ?>
  			<li><a class="homeblack" href="resultend.php">Result</a></li>
                <?php } ?>
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


	
	<div class="main">
<div class="login">
	<img src="image/login3.png" class="user">
	<h1>Login</h1>
	<form>
	
		<input type="text" placeholder="User-Name" User-name="">
		<input type="password" placeholder="Password" PAssword="">
		<input type="Submit" value="Submit" name=""> 
	</form>

</div>
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
				<a href="User_Registration2.php">Registration</a> -
				<a href="User_Login.php">Log In</a> -
				

				<a href="AboutREPS.php">About</a> - 
				<a href="contact.php">Contact</a>
				
			</h5>

		</section>
	</div>
</footer>
<footer class="second">
	<p>&copy REVOLUTIONARY ELECTRONIC POLLING SYSTEM, 2017</p>
</footer>
</body>
</html>
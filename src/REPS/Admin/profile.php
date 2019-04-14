<?php  
session_start();  
  
if(!$_SESSION['Username'])  
{  
  
    header("Location: Administrator_Login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Revolutionary Electronic Polling System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
        .table1{
            
            border-collapse: collapse;
            margin-left: 450px;
            border-radius: 20%;
             width: auto;
            height: 70px;
            
            background: black;
            box-shadow: grey 1px 5px 4px;
            border-radius: 10px;
            
            
        }
        .log1{
            text-decoration: none;
            color: white;
        }
        .log1:hover{
            text-decoration: underline;
            color:darkgrey;
        }
        .can1{
            text-decoration: none;
            color: white;
        }
        .can1:hover{
            text-decoration: underline;
            color:darkgrey;
        }
    .admin
		{
			width: 150px;
			height: 120px;
			/*overflow: hidden;*/
			position: absolute;
			top:calc(-100px/2);
			top:calc(50% -50px);
			margin-top: 300px;
			margin-left: 605px;
            margin-right: auto;
		}
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
		<h1 style="padding-right: 16px;"><font face="Times New Roman">Revolutionary Electronic Polling System </font></h1>
		</center>
	</div>
</div>

	<header>
		<nav>
			<ul id="nav">
				<li><a class="homeblack" href="process.php">Home</a></li>
				<!--<li><a class="homered" href="profile.php">Profile</a></li>-->
				<li><a class="homered" href="profile.php">Profile</a></li>
				<li><a class="homeblack" href="Candidate_Registration.php">Candidate Registration</a></li>
				<li><a class="homeblack" href="result.php">Upload Result</a></li>
				
				
				
				
			</ul>
		</nav>
	</header>  
<div class="divider"></div>  
  
<img src="image/administrator1.png" class="admin" >
<h1 style="color: black;  margin-top: 150px; " align='center'>Welcome <?php  
   
echo  $_SESSION['Username'];  
?>  </h1><br>  

<table class="table1" cellspacing="10px" cellpadding="30px" style=" align: center" >
				<tr>
					
				<td>
						<a class="can1" href="viewUser.php" style="font-size: 30px" >Candidate's Details</a>
					
				</td>
				
				<td>
						<a class='log1' href="logout.php"  style="font-size: 30px" >Logout</a>
					
				</td>
				</tr>

			</table>
 
  

  
</body>  
  
</html>  
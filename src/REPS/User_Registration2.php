<?php
    $host='localhost';
    $user='root';
    $password='';
    $dbname='admin';
    $dbconn=mysqli_connect($host,$user,$password,$dbname);

    
    if(isset($_POST['Done']))
    {
            $f_n=$_POST["f_name"];
            $l_n=$_POST["l_name"];    
            $dob=$_POST["DOB"];
            $acn=$_POST["ACN"];
            $contact=$_POST["C_number"];
            $eid=$_POST["E_id"];
            $constituency=$_POST["Constituency"];
            $vid=$_POST["V_id"];
            $add=$_POST["Address"];
            $gen=$_POST["gender"];
            $query = mysqli_query($dbconn,"SELECT V_id FROM voter WHERE V_id='$vid'");

            if (mysqli_num_rows($query) > 0)
            {
                echo '<script> alert("User Already Exist!")</script>';
            }

            else
            {
                $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $string_shuffled = str_shuffle($string);
                $password = substr($string_shuffled, 1, 7);
                $insert_q = "INSERT INTO voter (f_name,l_name,DOB,Address,ACN,C_number,E_id,Constituency,V_id,gender,password) VALUES  ('$f_n','$l_n','$dob','$add','$acn','$contact','$eid','$constituency','$vid','$gen','$password')";
                $q=mysqli_query($dbconn,$insert_q);
                if($q)
                {
                    echo "<script> alert('Successfully Registered!')</script>";
                    // ---------------- SEND MAIL FORM ----------------
                    
	               $to = "$eid";
                    $subject = "REPS";
         

                    $message = "<h1>VOTING DETAILS - username:$vid password:$password</h1>";
         
                    $header = "From:reps815@gmail.com \r\n";
         
                    $header  = "MIME-Version: 1.0\r\n";
                    $header  = "Content-type: text/html\r\n";
         
                    $retval = mail ($to,$subject,$message,$header);
         
                    if( $retval == true ) {
                        echo "<script> alert('Check Your Mail-id for Voting Details.')</script>";;
                    }else {
                    echo "Error!";
            }
	                 
                    
                }
            }
        }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Revolutionary Electronic Polling System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body
		{
			margin:0;
			padding:0;
		}

		.ECI h1
		{
			color: white;
			padding-top: 0px;
			padding-right: 1px;
		}
				
		.register
		{
			margin:200px 5px 15px 250px;
			width:400px;
			height: 560px;
			box-shadow:0px 8px 16px 0px rgba(0,0,0,0.9);
			padding:80px 40px;
			padding-top: 70px;
			margin-top:150px;
			background-color: (0,0,0,0.4);
			border-radius:15px;
			-webkit-border-radius:15px;
			-o-border-radius:15px;
			-moz-border-radius:15px;
			box-shadow: inset -4px -4px rgba(0,0,0,0.5);		
			background:linear-gradient(to left,#36486b 2%,#000066 90%);
		}

		.user
		{
			width: 150px;
			height: 150px;
			position: absolute;
			top:calc(-100px/2);
			top:calc(50% -50px);
			margin-top: 392px;
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
		
		input[type=text],input[type=text],input[type=text],input[type=text],input[type=date],input[type=tel],input[type=email],input[type=text],input[type=text],input[type=number]
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
		input[type="radio"]
		{
			opacity:100%;
			width:10px;
			margin-left: 80px;
			color:#FEFFFF;
			padding-left: 50px;
		}

		{		
			color:#ce1010;
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
		<h1><font face="Times New Roman">Revolutionary Electronic Polling System</font></h1>
		</center>
	</div>
</div>

	<header>
		<nav>
			<ul id="nav">
				<li><a class="homeblack" href="index.php">Home</a></li>
				<li><a class="homered" href="User_Registration2.php">Registration</a></li>
				<li><a class="homeblack" href="User_Login.php">Log In</a></li>
				
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
<div class="register">
	<img src="image/register1.png" class="user">
	<h1>Register Here</h1>
	<form name="Reg" method="post" encrypt="multipart/form-data">
		<input type="text" placeholder="First Name" name="f_name" required="">
		<input type="text" placeholder="Last Name" name="l_name" required="">
		<input type="text" placeholder="Aadhar Card Number" name="ACN" required="" maxlength="12">
		<input type="text" placeholder="Permanent Address" name="Address" required="">
		<input type="radio" name="gender" value="male"/>Male
		<input type="radio" name="gender" value="female"/>Female
		<input type="date" placeholder="Date of Birth" name="DOB" required="">
		<input type="tel" placeholder="Contact Number" name="C_number" required="" pattern="[789][0-9]{9}">
		<input type="email" placeholder="Email ID" name="E_id" required="">
		<input type="text" placeholder="Constituency" name="Constituency" required="">
		<input type="text" placeholder="Voter ID" name="V_id" required="">
		<input type="Submit" value="Submit" name="Done"> 
	</form>
</div>
</div>
<!--footer starts-->
<footer>
	<div id="footer-inner">

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
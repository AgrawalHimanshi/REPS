<?php
session_start();
$_SESSION['messages']='';
if(isset($_POST['submitted']))
{
    $host='localhost';
$user='root';
$password='';
$dbname='admin';
$dbconn=mysqli_connect($host,$user,$password,$dbname);
    
    
    
   /* $validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);

if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {

if ($_FILES["file"]["error"] > 0) {
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
} else {

echo "<span>Your File Uploaded Succesfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <b>already exists.</b> ";
} else {
move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
$imgFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "upload/" . $_FILES["file"]["name"];
echo "<b>Stored in:</b><a href = '$imgFullpath' target='_blank'> " .$imgFullpath.'<a>';

}

}
} else {
echo "<span>***Invalid file Size or Type***<span>";
}
}
?>*/
    
    
    
    
    
    
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$acn = $_POST['acn'];
    $vid = $_POST['vid'];
    $address = $_POST['address'];
    $constituency = $_POST['constituency'];
    $gender=$_POST['gender'];
    $dob = $_POST['dob'];
    $number = $_POST['number'];
    $mail = $_POST['mail'];
    $pname = $_POST['pname'];
    
    $pic = $_POST['pic'];
    
    //This is the directory where images will be saved 
$target = "upload/"; 
$target = $target . basename( $_FILES['fileupload']['name']); 

//This gets all the other information from the form 
$pic = ($_FILES['fileupload']['name']);
    
    
if(preg_match("!image!",$_FILES['fileupload']['type'])){
//Writes the photo to the server 
if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target)) { 
    //Tells you if its all ok 
    echo "<script>alert('The file ". basename( $_FILES['fileupload']['name']). " has been uploaded, and your information has been added to the directory')</script>"; 
} else { 
    //Gives an error if its not 
    echo "Sorry, there was a problem uploading your file.";
} 

    
    $sql= "insert into c_register(fname,lname,acn,vid,address,constituency,gender,dob,number,mail,pname,pic)values('$fname','$lname','$acn','$vid','$address','$constituency','$gender','$dob','$number','$mail','$pname','$target')";

   
    
    
    if(mysqli_query($dbconn, $sql))
{
    echo "<script>alert('successfully registerd')</script>";
}
    else{
        echo "<script>alert('unsuccessfully registered')</script>";
    }

    }
    else{
        /*$_SESSION['messages']="Please upload only jpg,png,gif file";*/
          echo "<script>alert('Please upload only GIF, PNG or JPG images!')</script>";
    } 
    mysqli_close($dbconn);
    
}

?>






<html>
<head>
	<title>Revolutionary Electronic Polling System/Resistration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body
		{
			/*background-image:url(bg.jpg);
			background-size:cover;
			background-repeat:no-repeat;*/
			margin:0;
			padding:0;
			/*font-family:Arial;*/
		}
		
		.ECI h1
		{
			color: white;

		}
		.register
		{
			/*border:2px #ff267e groove;*/
			margin:200px 5px 15px 250px;
			/*position:absolute;*/
			width:400px;
			height: 650px;
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
			background: linear-gradient(to left, #36486b 1%, #000066 90%); 
		}

		.user
		{
			width: 150px;
			height: 150px;
			/*overflow: hidden;*/
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
		
		input[type=text],input[type=text],input[type=number],input[type=text],input[type=text],input[type=text],input[type=date],input[type=number],input[type=email],input[type=text],input[type=text],input[type=file],input[type=tel]
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
		/*
		.radio-label 
		{
    		float: left;
    		margin-right: 3%;
		}
		.radio-input 
		{
    		float: left;
		}
		fieldset
		{
    		text-align: center;
		}
		div 
		{
    		display: inline-block;
    		margin: auto;
    		border: 1px solid black;
		}
		*/
		input[type="radio"]
		{
			opacity:100%;
			width:10px;
			margin-left: 80px;
			color:#FEFFFF;
			padding-left: 50px;
		}
		label[for="male"],label[for="female"]
		{
			margin-bottom:10px;
			display:inline-block;
			padding-left: 0px;
			padding-right: 30px;
			/*background: url(check.png) no-repeat;
			background-position: 0 -32px;*/
			line height:24px;
			color:#FEFFFF;
			cursor:pointer;
			/*text-align: center;*/
		}
		/*input:checked + label[for="male"],
		input:checked + label[for="female"]*/
		{
			/*background-position: 0 0;*/
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
			margin-top: 10px;
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
				<li><a class="homeblack" href="process.php">Home</a></li>
				<li><a class="homeblack" href="profile.php">Profile</a></li>
				<li><a class="homered" href="Candidate_Registration.php">Candidate Registration</a></li>
				<li><a class="homeblack" href="#">Upload Result</a></li>
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


<div class="register">
	<img src="image/register1.png" class="user">
	<h1>Register Here</h1>
	<form action="#" method="post" enctype="multipart/form-data" >
	
		<input type="text" name="fname" placeholder="First Name" >
		<input type="text" name="lname" placeholder="Last Name" >
		<input type="number" name="acn" placeholder="Aadhar Card Number" >
		<input type="text" name="vid" placeholder="Voter ID" >
		<input type="text" name="address" placeholder="Permanent Address" >
		<input type="text" name="constituency" placeholder="Constituency" >
		<input type="radio" id="male" name="gender" value="male"  >Male
		<!--<label for="male" >Male</label>-->
		<input type="radio" id="female" name="gender" value="female" >Female
		<!--<label for="female">Female</label>-->
		<input type="date" name="dob" placeholder="Date of Birth" >
		<input type="tel" name="number" placeholder="Contact Number" >
		<input type="email" name="mail" placeholder="Email ID" >	
		<input type="text" name="pname" placeholder="Party Name" >
		<input type="file" name="fileupload" value="fileupload" id="fileupload">
				<label for="fileupload">Select a emblem to upload</label>
				<!--<input type="image">-->	
		<input type="Submit" value="Submit" name="submitted"> 
		
	</form>
</div>
<div id="message">
<?php include 'uploadphp.php';?>
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
				<a href="process.php">Home</a> -
				<a href="profile.php">Profile</a> -
				<a href="Candidate_Registration.php">Candidate Registration</a> -
				<a href="#">Upload Result</a> 
				
			</h5>

		</section>
	</div>
</footer>
<footer class="second">
	<p>&copy REVOLUTIONARY ELECTRONIC POLLING SYSTEM, 2017</p>
</footer>

</body>
</html>
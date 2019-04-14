<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Revolutionary Electronic Polling System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style type="text/css">
    body
    {
      color: black;
    }
    .main
    {
      height: 90%;
      margin-bottom: -7px;

    }
    .icon-third
{
  width: 25%;
  float: left;
  margin: 0%;
  margin-left: 2%;
  margin-right: -6%;
}
.icon-third i
{
  color: #F0F0F0;
  font-size: 255%;
  padding: 20%;
}
    .circle
{
  margin: 10 auto;

  width: 60px;
  height: 60px;
  background: #405580;
  border-radius: 40%;
}
    .ECI h1
    {
      color: white;
       border-bottom-style: none;
       text-decoration: none;
    }
    h1
    {
      /*text-decoration: underline;*/
      font-size: 50px;
      color: #000066;
      
     /* border-bottom: 2px solid 212121;
       border-bottom-style: solid;*/
       border-color: #212121;
       margin-bottom: 0%;

    }
    header li a:hover
    {
      color: white;
    }
    h2
    {
      margin-left: 15%;
       color: #000066;
      font-size: 28px;
      text-decoration: none;
    
    }
    h5
    {
      color: #000066;
      margin-left: 0%;
      font-size: 23px;
    }
    span
    {
      margin-left: 22%;
    }
    li a
    {
      text-decoration: none;
      color: black;
    }
     li a:hover
    {
      color: blue;
      text-decoration: underline;
    }
    
    footer h5
    {
      color: white;
    }

    .social li
{
  margin-bottom: 2%;
  display: inline;
}
.social i
{
  font-size: 245%;
  padding: 0% 20%;
  color: #959595;
  
}
.social i:hover
{
  color: #F5F5F5;
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
		<h1><font face="Times New Roman">Revolutionary Electronic Polling System</font></h1>
		</center>
	</div>
</div>

	<header>
		<nav>
			<ul id="nav">
				<li><a class="homeblack" href="index.php">Home</a></li>
				<li><a class="homeblack" href="User_Registration2.php">Registration</a></li>
        <li><a class="homeblack" href="User_Login.php">Log In</a></li>
				
			
				
				 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="AboutECI.php">About ECI</a>
      <a href="AboutREPS.php">About REPS</a>
    
    </div>
  </li>
  <li><a class="homered" href="contact.php">Contact</a></li>
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
  <!--logstrip starts.............................-->
  <tr>
  <td height="53">
    <img src="image/eci_logostrip.jpg" style="width: 100%;">
  </td>
 </tr>

 <!-- log strip ends..............................-->
<div class="main">

<tbody><tr>
       <!-- <td><img src="image/AboutECI_tm.png" About ECI width="142" height="30"></td>-->
       <td><h1 style="margin-left: 15%;margin-top: 2%;">Contact</h1>
        <br>
        <h2>General inquiries</h2>
      <ul> <section class="icon-third">
           <div class="circle">
            <td><i class="fa fa-phone"></i></td>
          </div>
          </section>

        <li class="contact-item contact-item--phone">
          <div class="contact-item__content">
           
            <h5 class="contact-item__title">Toll free Number:</h5>
            <span class="t-block" style="font-weight:bold; margin-left: 1%;">1-800-426-9870</span>
            <br><br>
            <span class="t-block" style="font-weight:bold;">Available: 8:30 a.m. to 5:30 p.m.</span>
          </div>
        </li>
       

        <section class="icon-third">
          <div class="circle">
          <td><i class="fa fa-mobile"></i></td>
           </div>
          </section>
       <li class="contact-item">
          <div class="contact-item__content--offset">
           
            <h5 class="contact-item__title" style="font-weight:bold;">Local Number:</h5>
            <span class="t-block" style="font-weight:bold;">202-674-1670</span>
          </div>
        </li>

        <section class="icon-third">
          <div class="circle">
          <td><i class="material-icons">email</i></td>
           </div>
          </section>        
      <li class="contact-item contact-item--email">
          <div class="contact-item__content">
             <h5 class="contact-item__title">Mail:</h5>
            <span class="t-block" style="font-weight:bold;"><a href="mailto:info@fec.gov">REPS@abc.gov</a></span>
          </div>
        </li></ul></td>
      </tr>
</tbody>
</div>
      
	<!--<article class="main">
  <div class="container">
   
    <div class="main__content--full u-padding--top">
     <div class="usa-width-one-third">
      <h2>General inquiries</h2>
      <ul>
        <li class="contact-item contact-item--phone">
          <div class="contact-item__content">
            <h5 class="contact-item__title">Toll free</h5>
            <span class="t-block">1-800-424-9530</span>
            <span class="t-block">8:30 a.m. to 5:30 p.m. Eastern Time</span>
          </div>
        </li>
        <li class="contact-item">
          <div class="contact-item__content--offset">
            <h5 class="contact-item__title">Local</h5>
            <span class="t-block">202-694-1000</span>
          </div>
        </li>
        <li class="contact-item">
          <div class="contact-item__content--offset">
            <h5 class="contact-item__title">Teletypewriter (TTY) for the hearing impaired</h5>
            <span class="t-block">202-219-3336</span>
          </div>
        </li>
        <li class="contact-item contact-item--email">
          <div class="contact-item__content">
            <span class="t-block"><a href="mailto:info@fec.gov">info@fec.gov</a></span>
          </div>
        </li>
      </ul>
      <h2>Mailing address</h2>
      <ul>
        <li class="contact-item contact-item--mail">
          <div class="contact-item__content">
            <span class="t-block">Federal Election Commission</span>
            <span class="t-block">999 E St NW</span>
            <span class="t-block">Washington, DC 20463</span>
          </div>
        </li>
      </ul>
      <h2>Website feedback</h2>
      <ul>
        <li class="contact-item contact-item--email">
          <div class="contact-item__content">
            <span class="t-block"><a href="mailto:webmanager@fec.gov">webmanager@fec.gov</a></span>
          </div>
        </li>
        <li class="contact-item contact-item--github">
          <div class="contact-item__content">
            <span class="t-block"><a href="https://github.com/18F/fec/issues">GitHub repository</a></span>
          </div>
        </li>
      </ul>
    </div>
   
  </div>
</div>
</article>-->




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
        <a href="User_Registration.php">Registration</a> -
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
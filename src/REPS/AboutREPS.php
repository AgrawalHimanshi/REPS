<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Revolutionary Electronic Polling System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body
		{
			color: black;
		}
		.main
		{
			height: 210%;
		}
		.ECI h1
		{
			color: white;
		}
		h1
		{
			color: #000066;
			margin-left: 1%;
		}
		h5
		{
			color: #959595;
		}
		td h3
		{
			 font-weight:bold;
			font-size: 1.17em;
			color: #000066;
		}
		p
		{
			
			font-size: 1em;
			/*font-family: sans-serif;*/
		}
		td ul li a
		{

			text-decoration: none;
			color: black;
		}
		td ul li a:hover
		{
			color: blue;
			text-decoration: underline;
		}
		.dropdown .dropbtn {
    background-color: red;
    height: 32px;
    margin-top: -11px;
    padding: 15px 10px 22px 10%;
    text-decoration: underline;
}
		.dropdown:hover .dropbtn {
    background-color: red;
    height: 32px;
    margin-top: -11px;
    padding: 15px 10px 22px 10%;
    text-decoration: underline;
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
				<li><a class="homeblack" href="User_Registration.php">Registration</a></li>
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
<tbody><tr>
       <!-- <td><img src="image/AboutECI_tm.png" About ECI width="142" height="30"></td>-->
       <td><h1>About REPS</h1></td>
      </tr>
      <tr>
        <td><table width="90%" border="0" align="center" cellpadding="1" cellspacing="1">
          <tbody><tr>
            <td width="50%"><ul>
              <li><a href="#introduction">REPS</a></li>
               <li><a href="#REPS working">Working of REPS</a></li>
              <li><a href="#appointment-tenure">ATM Network &amp; User Identification</a></li>
              <li><a href="#transaction">Ubiquity of ATM</a></li>
              <li><a href="#elcmachinery">Benefits</a></li>
             
            </ul></td>
           
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td align="left">
        
        <table width="98%" border="0" cellpadding="0" cellspacing="0" align="center">
          <tbody><tr>
            <td><h3><a name="introduction" id="introduction"></a>REPS</h3>
              <p align="justify">Revolutionary Electronic Polling System (REPS) replaces the traditional electronic voting system. We propose a system where we are going to use Automated Teller Machine (ATM) instead of Electronic Voting Machine (EVM). As the ATM network used in the banking system today is possibly the World’s most secure and accurate publicly used computer system. It is tamper proof, extremely accurate, extremely fast and shares information between banks, accounts, etc. It is accessible from all over the World.  </p>
              <p align="justify">People can cast their vote in any ATM, where the voter can vote from any location, which in turn increases both participation rates in the elections and the user's satisfaction as it eases the voting process and saves a lot of time. As its being known that ATM’s network is highly secure, alteration in votes will not be possible anymore. Because votes being secured are the basic need election system should take care off. </p>
              <p align="justify">So, elections system must be very much particular when it comes to security and confidentiality of votes being recorded and also in reveling out the result without any alteration or manipulation.   The system caters for integrity of an election process in terms of the functional and non-functional requirements. </p>
              <p align="justify"> The functional requirements embedded in the design of the proposed system warrant well-secured identification and authentication processes for the voter through the use of fingerprint scanner.  The fingerprint accepted by fingerprint scanner will be matched by the AADHAR database. For verifying whether the vote caster is eligible to vote or not, the eligibility of voting will be further authenticated by voter’s id database. </p>
              <p align="justify">The main aim of the RPS is to minimize the expenditure of elections to such an extent that it would be negligible as compared to the cost spent today for elections, to stop manipulation of votes and to provide ease to voters.</p>
              
              <div id="tt" align="right"><a href="#"><img src="./image/top.jpg" width="40" height="32" border="0"></a></div>

              <h3><a name="REPS Working" id="REPS workingt"></a>Working of REPS</h3>
              <p align="justify">1.Registration of user-
				Register adhaar data with the voter id or just register the user and create a user-id and password.</p>
				<p align="justify">2. Login of user-
				Login of voter using user-id and password.</p>
				<p align="justify">3.Vote Casting-
				Cast the vote of user and lock the user so he/she can't cast the vote again.</p>
				<p align="justify">4. Database-
				Create a database of the user data and number of votes to the constituencies.</p>
				<p align="justify">5. Email/Message Reporting-
				When the vote has been successfully casted, the REPS will report it on the voters’ registered email id/phone number</p>

              <div id="Div4" align="right"><a href="#"><img src="./image/top.jpg" width="40" height="32" border="0"></a></div>
              
              <h3><a name="appointment-tenure" id="appointment-tenure"></a>ATM Network &amp; User Identification</h3>
              <p align="justify"> As is the case in most countries, ATMs in India are also linked to an interbank network that provides a highly reliable way of identifying the user. Basically, by putting in our card the ATM can access a lot of information about us.  </p>

              <p align="justify"> The networks that ATMs tap into could also cross reference with other networks and personal information databases, such as the electoral registry. As such, when selecting the voting option (when voting is open), the user may or may not have put in their bank pin. They would then be required to type some unique identification code - the last 4 digits of their Adhaar Number (for example). A uniform solution would be to have the last 4 digits of whatever ID is used in that particular state and cross reference it to the electoral database.</p>

              <div id="Div1" align="right"><a href="#"><img src="./image/top.jpg" width="40" height="32" border="0"></a></div>
              <h3><a name="transaction" id="transaction"></a>Ubiquity of ATM</h3>
              <p align="justify"> Using ATMs as a means to vote could massively increase convenience and efficiency. There are around 60,000 ATMs of State Bank of India and around 148227 ATMs of different Public Sector Banks. Moreover, it is easier to locate a bank branch in India even compared to many developed countries. India has 42.54 bank branches per 1,000 sq. km. </p>

              <div id="Div2" align="right"><a href="#"><img src="./image/top.jpg" width="40" height="32" border="0"></a></div>
              <h3><a name="elcmachinery" id="elcmachinery"></a>Benefits</h3>
              <p align="justify">The application of these basic technologies helps ensure voting security because lost ballots are more easily accounted for. As the code is scrambled, crooked voting counters are much less likely to "lose" the ballot, and double counting would cease to be possible as the scanner could recognize the unique code - much like a ticket on an airplane flashes green. </p>
              <p align="justify"> A further benefit is that ATMs have already been configured to be highly accessible for disabled people: for example, they contain headphone jacks and brail for the blind. Indeed, this might very well be the most anonymous way that blind people can vote. </p>
             
              </p><div id="Div3" align="right"><a href="#"><img src="./image/top.jpg" width="40" height="32" border="0"></a></div>
            
          </tr>
        </tbody></table></td>
      </tr>
    </tbody>
</table>
</td>
</tr>
</tbody>
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
				<a href="index.html">Home</a> -
				<a href="User_Registration.php">Registration</a> -
				<a href="User_Login.php">Log In</a> -
				<a href="#">Result</a> -

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
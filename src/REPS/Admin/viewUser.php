<html>  
<head >  
    <meta charset="UTF-8">  
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>Revolutionary Electronic Polling System</title>
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
        border-collapse: collapse;
  
    }  
    
  
</style>  
  
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
				<!--<li><a class="homered" href="profile.php">Profile</a></li>-->
				<li><a class="homered" href="profile.php">Profile</a></li>
				<li><a class="homeblack" href="Candidate_Registration.php">Candidate Registration</a></li>
				<li><a class="homeblack" href="result.php">Upload Result</a></li>
				
				
				
				
			</ul>
		</nav>
	</header>  
	<div class="divider"></div>  
<div class="table-scrol">  
    <h1 align="center" style="color: black;">Registered Candidate Details</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
 
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed; color: black;" cellpadding='4px'; border="1px black";  >  
        <thead>  
  
        <tr>  
  
           <!-- <th>User Id</th> -->  
            <th>First Name</th>
            <th>Last Name</th>  
            <th>Adhar Card No.</th>
            <th>Candidate Id</th>  
            <th>Permanent Address</th>  
            <th>Constituency</th>
            <th>Gender</th>  
            <th>Date Of Birth</th>
            <th>Phone Number</th>
            <th>Email Id</th>
            <th>Party Name</th>
            <th>Emblem</th>
        </tr>  
        </thead>  
  
        <?php  
         $dbcon=mysqli_connect("localhost","root","");  
        mysqli_select_db($dbcon,"admin");  
        $view_users_query="select * from cd_register";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
      
            $user_fname=$row[0];  
            $user_lname=$row[1];  
            $user_acn=$row[2];
            $user_cid=$row[3];
            $user_address=$row[4];
            $user_constituency=$row[5];
            $user_gender=$row[6];
            $user_dob=$row[7];
            $user_pno=$row[8];
            $user_email=$row[9];
            $user_pname=$row[10];
            $user_emblem=$row[11];
        
  
        ?>  
  
        <tr >  
<!--here showing results in the table -->  
          <!-- <td></*?php echo $user_id;  ? */></td> --> 
            <td><?php echo $user_fname;  ?></td> 
            <td><?php echo $user_lname;  ?></td> 
            <td><?php echo $user_acn;  ?></td>
            <td><?php echo $user_cid;  ?></td>
            <td><?php echo $user_address;  ?></td>
            <td><?php echo $user_constituency;  ?></td>
            <td><?php echo $user_gender;  ?></td>
            <td><?php echo $user_dob;  ?></td>
            <td><?php echo $user_pno;  ?></td>              
            <td><?php echo $user_email;  ?></td>  
            <td><?php echo $user_pname;  ?></td>  
            <td><img src="upload/<?php echo $user_emblem;  ?>" style="width:100px; height:100px;" /></td>   
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  
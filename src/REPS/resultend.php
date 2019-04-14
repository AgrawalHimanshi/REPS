<html>  
<head >  
    <title>Revolutionary Electronic Polling System</title>
    <meta charset="UTF-8">  
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View Result</title>  
</head>  
<style> 
    
    
    .login-panel {  
        margin-top: 150px;  
    }  
    .table,thead,td {  
        margin-top: 50px;  
        border-collapse: collapse;
            
           
            margin-left: 450px;
            border-radius: 20%;
             width: auto;
            height: 70px;
            
            background: white;
            box-shadow: grey 1px 5px 4px;
            border-radius: 10px;
            
    
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
				<li><a class="homeblack" href="User_Registration2.php">Registration</a></li>
				<li><a class="homeblack" href="User_Login.php">Log In</a></li>
			
				 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="AboutECI.html">About ECI</a>
      <a href="AboutREPS.html">About REPS</a>
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
  			<li><a class="homered" href="resultend.php">Result</a></li>
                <?php } ?>
			</ul>
		</nav>
	</header>
	<div class="divider"></div>
   
     <div class="table-scrol">  
    <h1 align="center" style="color: black">Voting Result</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
 
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed; color: black;" cellpadding='10px'; border="1px black";  >  
        <thead style="background-color:black;color: white;">  
  
        <tr>  
  
           <!-- <th>User Id</th> -->  
            <th>Emblem</th>
            <th>First Name</th>  
            <th>Last Name</th>
            <th>No. of Votes</th>
        </tr>  
        </thead>  
  
        <?php  
         $dbcon=mysqli_connect("localhost","root","");  
        mysqli_select_db($dbcon,"admin"); 
        
        /*SELECT DISTINCT no_of_votes FROM cd_register a WHERE 3 >= (SELECT COUNT(DISTINCT no_of_votes) FROM cd_register b WHERE b.no_of_votes >= a.no_of_votes) ORDER BY a.no_of_votes DESC
        
        SELECT fname,lname,no_of_votes FROM cd_register a WHERE 3 >= (SELECT COUNT(DISTINCT no_of_votes) FROM cd_register b WHERE b.no_of_votes >= a.no_of_votes) ORDER BY a.no_of_votes DESC*/
        
        $view_users_query="select pic,fname,lname,no_of_votes from cd_register a where 3 >= (SELECT COUNT(DISTINCT no_of_votes) FROM cd_register b WHERE b.no_of_votes >= a.no_of_votes) ORDER BY a.no_of_votes DESC";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
             $user_emblem=$row[0];  
            $user_fname=$row[1];  
            $user_lname=$row[2]; 
            $user_no_of_votes=$row[3];  
        ?>  
  
        <tr >  
<!--here showing results in the table -->  
          <!-- <td></*?php echo $user_id;  ? */></td> --> 
            <td><img src="upload/<?php echo $user_emblem;  ?>" style="width:100px; height:100px;" /></td>
            <td><?php echo $user_fname;  ?></td> 
            <td><?php echo $user_lname;  ?></td> 
            <td><?php echo $user_no_of_votes;  ?></td>
           
        </tr>  
  
        <?php } ?> 
        
          <?php  
        /* $dbcon=mysqli_connect("localhost","root","");  
        mysqli_select_db($dbcon,"admin");  
        $view_users_query="select c_id,max(no_of_votes) from result group by c_id";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
        if(mysqli_num_rows($run)==1){
            echo c_id;
         //echo "<script>alert('correct Username and Password')</script>";
    header("Location:profile.php");
    }*/
    ?>
    </table>  
        </div>  
</div>  
  
       
         
           
               
    </body>
</html>
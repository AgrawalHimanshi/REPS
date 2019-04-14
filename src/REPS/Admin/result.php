<html>  
<head >  
  <title>Revolutionary Electronic Polling System</title>
    <meta charset="UTF-8">  
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View Users</title>  
</head>  
<style>
    input[type=button]{
     
        display: inline-block;
        margin-left: 10px;
  padding: 15px 20px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: midnightblue;
  border: none;
  border-radius: 15px;
  box-shadow: 0 7px #999;
        
    }
    input[type=button]:hover{
     
        background-color: black;
            
    }
    input[type=button]:active{
        background-color: black;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
    }
    
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
				<li><a class="homeblack" href="process.php">Home</a></li>
				<!--<li><a class="homered" href="profile.php">Profile</a></li>-->
				<li><a class="homeblack" href="profile.php">Profile</a></li>
				<li><a class="homeblack" href="Candidate_Registration.php">Candidate Registration</a></li>
				<li><a class="homered" href="result.php">Upload Result</a></li>
				
				
				
				
			</ul>
		</nav>
	</header>  
	<div class="divider"></div>  
<div class="table-scrol">  
    <h1 align="center" style="color: black">Voting Result</h1>  
  
    
      <input type="button" value="Upload on User End" onclick="<?php $dbcon=mysqli_connect("localhost","root","");  
        mysqli_select_db($dbcon,"admin");  
             $status="update result set status=1;";
                 $run=mysqli_query($dbcon,$status);
            
             ?>">
 
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
 
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed; color: black;" cellpadding='10px'; border="1px black";  >  
        <thead style="background-color:black;color: white;">  
  
        <tr>  
  
           <!-- <th>User Id</th> -->  
            <th>Emblem</th>
            <th>First Name</th>  
            <th>Last Name</th>
            <th>Candidate Id</th>  
            <th>No. of Votes</th>
        </tr>  
        </thead>  
  
        <?php  
         $dbcon=mysqli_connect("localhost","root","");  
        mysqli_select_db($dbcon,"admin");  
        $view_users_query="select pic,fname,lname,c_id,max(no_of_votes) from cd_register group by pic, fname,lname,c_id";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
             $user_emblem=$row[0];  
            $user_fname=$row[1];  
            $user_lname=$row[2];  
            $user_cid=$row[3];
            $user_no_of_votes=$row[4];  
        ?>  
  
        <tr >  
<!--here showing results in the table -->  
          <!-- <td></*?php echo $user_id;  ? */></td> --> 
            <td><img src="upload/<?php echo $user_emblem;  ?>" style="width:100px; height:100px;" /></td>
            <td><?php echo $user_fname;  ?></td> 
            <td><?php echo $user_lname;  ?></td> 
            <td><?php echo $user_cid;  ?></td>
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
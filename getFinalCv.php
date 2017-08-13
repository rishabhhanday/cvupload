<?php
session_start();
$error="";
$success="";
 $userName="";
        $userId ="";
        $userPro =""; 
        $userAdd ="";
        $userEmail ="";
        $userPhone ="";
        $userAdvanced ="";
        $userIntermediate ="";
        $userLearning ="";
        $userLanguage ="";
         $userProject1 ="";
        $userDate1 ="";
        $userDis1 ="";
         $userProject2 ="";
         $userDate2 ="";
        $userDis2 ="";
        $userSchool1 ="";
        $userUpto1 ="";
        $userSchool2 ="";
        $userCollege ="";
        $userSem ="";
        $userUpto2="";
     if(isset($_POST["submit"])){
         $conn = mysqli_connect("localhost","id2476037_root","RishabH@007","id2476037_test");
         $userId = $_POST["userId1"];
         $_SESSION["userSessionId"] = $userId; 
         $sql = "SELECT * FROM UploadCv WHERE userId ='$userId'";
         $result = mysqli_query($conn, $sql);
         if(mysqli_num_rows($result) > 0 ){
             $row = mysqli_fetch_assoc($result);
             $userName = $row["userName"];
             $userId = $row["userId"];
             $userPro = $row["userPro"];
             $userAdd = $row["userAdd"];
             $userEmail = $row["userEmail"];
             $userPhone = $row["userPhone"];
             $userAdvanced = $row["userAdvanced"];
             $userIntermediate = $row["userIntermediate"];
             $userLearning = $row["userLearning"];
             $userLanguage = $row["userLanguage"];
             $userProject1 = $row["userProject1"];
             $userDate1 = $row["userDate1"];
             $userDis1 = $row["userDis1"];
             $userProject2 = $row["userProject2"];
             $userDate2 = $row["userDate2"];
             $userDis2 = $row["userDis2"];
             $userSchool1 = $row["userSchool1"];
             $userUpto1 = $row["userUpto1"];
             $userSchool2 = $row["userSchool2"];
             $userUpto2 = $row["userUpto2"];
             $userCollege = $row["userCollege"];
             $userSem = $row["userSem"];
             $success="click here to view Cv";
             
         }
         else{
             header("Location: index.html");
             
         }
         
     }
     

?>
<!DOCTYPE html>
<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style type="text/css">
	#outer{
	background-color:#F1F1F1;
	}
	#inner1{
	background-color:#FFFDFD;
	}
	</style>
        
	</head>
	<body>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><b>CV</b> Upload <span class="glyphicon glyphicon-briefcase"></span></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#div1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="div1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               
                <li><a href="insert.php"><span class="glyphicon glyphicon-user"></span>Create Account</a></li>
                <li><a href="getYourCv.php"><span class="fa fa-sign-in"></span> Login</a></li>
               
            </ul>
            </div>
        </div>
        
    </nav>
            
            
            
            
            
            
            
                
            
		<div class="container-fluid" id="outer">
			<div class="container">
				<div class="row">
					<div class="col-md-4" id="inner1">
                                            <img src="getYourImage.php" class="img-rounded" height="300px" width="300px"></img>
					<br><br>
					<b>Name: <?= $userName ?></b><br>
					<b><span class="glyphicon glyphicon-user"></span><?= $userId ?></b>
					<hr/>
					<h5><span class="glyphicon glyphicon-folder-close" aria-hidden="false" style="color:#5D9406"> </span>  <?= $userPro ?></h5>
					<h5><span class="glyphicon glyphicon-home" aria-hidden="false" style="color:#5D9406"> </span>  <?= $userAdd ?></h5>
					<h5><span class="glyphicon glyphicon-envelope" aria-hidden="false" style="color:#5D9406"> </span>  <?= $userEmail ?></h5>
					<h5><span class="glyphicon glyphicon-earphone" aria-hidden="false" style="color:#5D9406"> </span>  <?= $userPhone ?></h5>
					<hr/>
					<h4><span class="glyphicon glyphicon-pencil" style="color:#5D9406"></span>Skills</h4>
					<br>
					<span class="glyphicon glyphicon-list"></span>
					<div style="background-color:#F1F0F0">
						<h4>Advacnced skills :</h4>
						
						<p><?= $userAdvanced ?></p>
						<br>
					</div>
					<div style="background-color:#F1F0F0">
						
						<h4>Intermediate :</h4>
						
						<br>
						<p><?= $userIntermediate ?></p>
						</div>
						<div style="background-color:#F1F0F0">
						<h4>Learning State :</h4>
						
						<p><?= $userLearning ?></p>
						</div>
						<hr/>
						
						<h4><span class="glyphicon glyphicon-globe" style="color:#5D9406"></span>   Languages</h4>
						<br>
						 <div style="background-color:#F1F0F0">
						
						
						<p><?= $userLanguage ?></p>
						</div>
				</div>
					
					<div class="col-md-1" ></div>
					<div class="container-fluid" style="background-color:#FFFDFD">
					<div class="col-md-5">
					
						<div class="row">
							<br>
							<h2><span class="glyphicon glyphicon-briefcase" style="color:#5D9406"></span> <b>Work Experience</b></h2>
							<br>
							<h4><b><?= $userProject1 ?></b></h4>
							<h6><span class="glyphicon glyphicon-calendar" style="color:#5D9406"></span><?= $userDate1 ?></h6>
							<br>
							<p><?= $userDis1 ?></p>
							<hr/>
							<h4><b><?= $userProject2 ?></b></h4>
							<h6><span class="glyphicon glyphicon-calendar" style="color:#5D9406"></span><?= $userDate2 ?></h6>
							<br>
							<p><?= $userDis2 ?></p>
							<br>
							<hr/>
							<h2><span class="glyphicon glyphicon-education" style="color:#5D9406"></span> <b>Education</b></h2>
							<br>
							<h4><b><?= $userSchool1 ?></b></h4>
							<h6><span class="glyphicon glyphicon-calendar" style="color:#5D9406"></span><?= $userUpto1 ?></h6>
							<br>
							<h4><b><?= $userSchool2 ?></b></h4>
							<h6><span class="glyphicon glyphicon-calendar" style="color:#5D9406"></span><?= $userUpto2 ?></h6>
							<br>
							<h4><b><?= $userCollege ?></b></h4>
							<h6><span class="glyphicon glyphicon-calendar" style="color:#5D9406"></span><?= $userSem ?></h6>
							<br>
							
						</div>
						
						</div>
						<div class="col-md-2">
							<center><a href="insert.php" class="btn btn-success">Next Page/Skip</a></center>
						</div>
						</div>
					
						
					
				</div>
			</div>
		</div>
		<div class="container-fluid" style="background-color: #DBDBDB">
    <div class="row">
                <div class="col-md-12">
                    
                                                   
<div id="share-buttons">
    <div>
    <h5 style="color: white"></h5>
    <!-- Buffer -->
    <table class="table">
        <thead>
        <th colspan="9" style="color: black">please share this website with your friends and ask them to take this survey</th>
        </thead>
        <tbody>
        <tr>
            <td><a href="https://bufferapp.com/add?url=http://rishabh.diadem.cloud&amp;" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/buffer.png" class="img-responsive" alt="Buffer"  />
    </a></td>
            <td><a href="http://www.digg.com/submit?url=http://rishabh.diadem.cloud" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/diggit.png" class="img-responsive" alt="Digg"/>
    </a>
    </td>
    <td> <a href="http://www.facebook.com/sharer.php?u=http://rishabh.diadem.cloud" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" class="img-responsive" alt="Facebook" />
    </a>
    </td>
    <td><a href="https://plus.google.com/share?url=http://rishabh.diadem.cloud" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" class="img-responsive" alt="Google" />
    </a>
    </td>
    <td>  <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://rishabh.diadem.cloud" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png"  class="img-responsive" alt="LinkedIn" />
    </a></td>
    <td><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" class="img-responsive" alt="Pinterest" />
    </a>
    </td>
    <td> <a href="javascript:;" onclick="window.print()">
        <img src="https://simplesharebuttons.com/images/somacro/print.png" class="img-responsive" alt="Print" />
    </a></td>
    <td><a href="http://vkontakte.ru/share.php?url=http://rishabh.diadem.cloud" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/vk.png" class="img-responsive" alt="VK" />
    </a></td>
    
        </tr>
        </tbody>
    </table>
    
    
    <!-- Digg -->
    
    <!-- Email -->
   
 
    <!-- Facebook -->
   
    <!-- Google+ -->
    
    <!-- LinkedIn -->
  
    
    <!-- Pinterest -->
    
    <!-- Print -->
   
    
   
    
    <!-- StumbleUpon-->
   
  
    
  
    <!-- Twitter -->
    
    
    <!-- VK -->
    
    
   
  
</div>
                    </div>
                </div>
            </div>
    </div>
                
	</body>
</html>

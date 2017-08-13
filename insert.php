<?php
$error="";
    if(isset($_POST["submit"])){
        $userName = $_POST["userFull"];
        $userId = $_POST["userId"];
        $userPassword = $_POST["userPassword"];
        
        if($userName != null && $userId != null && $userPassword !=null){
            $conn = mysqli_connect("localhost","id2476037_root","RishabH@007","id2476037_test");
            
       $fileData = mysqli_real_escape_string($conn, file_get_contents($_FILES["userImage"]["tmp_name"]));
       
       $sql = "INSERT INTO UploadCv VALUES('".$userName."','".$userId."','".$userPassword."','".$fileData."','".$_POST["userPro"]."','".$_POST["userAdd"]."','".$_POST["userEmail"]."','".$_POST["userPhone"]."','".$_POST["userAdvanced"]."','".$_POST["userIntermediate"]."','".$_POST["userLearning"]."','".$_POST["userLanguage"]."','".$_POST["userProject1"]."','".$_POST["userDate1"]."','".$_POST["userDis1"]."','".$_POST["userProject2"]."','".$_POST["userDate2"]."','".$_POST["userDis2"]."','".$_POST["userSchool1"]."','".$_POST["userUpto1"]."','".$_POST["userSchool2"]."','".$_POST["userUpto2"]."','".$_POST["userCollege"]."','".$_POST["userSem"]."')";
       $result = mysqli_query($conn, $sql);
       header("Location : index.html");
            
            }
        else{
            
            $error ="Please insert star variables";
        }
        
    }

?>


<!DOCTYPE html>
<html>
	<head>
      <meta charset="utf-8">
        <title>CV UPLOAD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <script>
                $(document).ready(function(){
                     $("#click1").click(function(){
                        $("#click11").slideToggle();
                        
                    });
                    
                     $("#click2").click(function(){
                        $("#click22").slideToggle();
                        
                    });
                    
                     $("#click3").click(function(){
                        $("#click33").slideToggle();
                        
                    });
                    
                    
                });
                   
                    
                
            </script>
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
		
			<div class="container-fluid" style="background-color:#F1F1F1">
				<div class="container"style="background-color:#FFFDFD">
					<div class="row">
                                            <div class="col-md-2">
                                                
                                            </div>
						<div class="col-md-8">
						<form action="insert.php" method="POST" enctype="multipart/form-data">
							<div class="form-group">
                                                            <center><h1>Personal Detail</h1></center>
								<label for="Name">Name:<span style="color: red">* <?= $error ?></span></label>
								<input type="text" name="userFull" class="form-control" placeholder="Enter Name">
								<label for="id">Username:<span style="color: red">* <?= $error ?></span></label>
								<input type="text" name="userId" class="form-control" placeholder="Enter Username">
								<label for="name">Password:<span style="color: red">* <?= $error ?></span></label>
								
								<input type="password" name="userPassword" class="form-control" placeholder="Enter Password">
								<label for="name">Your image:</label>
								<input type="file" name="userImage" class="form-control"><hr/>
                                                                <h1><p id="click1"><span class="glyphicon glyphicon-pushpin" style="color:#5D9406"></span> Professional Details <span class="glyphicon glyphicon-triangle-bottom"></span></p></h1>
                                                                
                                                                <div id="click11" style="display: none">
								<label for="name">Profession:</label>
								<input type="text" name="userPro" class="form-control" placeholder="for example : Web Developer">
								<label for="name">Address:</label>
								<input type="text" name="userAdd" class="form-control" placeholder="for example: Indore,Mp,India">
								<label for="name">Email:</label>
								<input type="text" name="userEmail" class="form-control" placeholder="for example: xyz@gmail.com">
								<label for="name">Phone Number:</label>
								<input type="text" name="userPhone" class="form-control" placeholder="for example:+918888888888">
								<label for="name">Advanced skills:</label>
								<textarea name="userAdvanced" class="form-control" placeholder="for example: C,C++,Core Java"></textarea>
								<label for="name">Intermediate skills:</label>
								<textarea type="text" name="userIntermediate" class="form-control" placeholder="for example: C,Core Java"></textarea>
								<label for="name">Currently Learning:</label>
								<textarea type="text" name="userLearning" class="form-control" placeholder="for example:C,Core Java"></textarea>
								<label for="name">Languages:</label>
								<textarea type="text" name="userLanguage" class="form-control" placeholder="for example: English,Hindi,Spanish"></textarea>
                                                                </div><hr/>
                                                                <h1><p id="click2"><span class="glyphicon glyphicon-pushpin" style="color:#5D9406"></span> Project Details <span class="glyphicon glyphicon-triangle-bottom"></span></p></h1>
                                                                <div id="click22" style="display: none">
								<label for="name">Your Project1:</label>
								<input type="text" name="userProject1" class="form-control" placeholder="Front End Developer / ic4medicaps.in">
								<label for="name">Date of working in project 1:</label>
								<input type="text" name="userDate1" class="form-control" placeholder="for example: 15/04/17 to 16/05/18">
								<label for="name">Discription of project 1:</label>
								<input type="text" name="userDis1" class="form-control" placeholder="words less than 300">
								<label for="name">Your Project2:</label>
								<input type="text" name="userProject2" class="form-control" placeholder="Front End Developer / ic4medicaps.in">
								
								<label for="name">Date of working in project 2:</label>
								<input type="text" name="userDate2" class="form-control" placeholder="for example: 15/04/17 to 16/05/18">
								<label for="name">Discription of project 2:</label>
								<input type="text" name="userDis2" class="form-control" placeholder="words less than 300">
                                                                </div><hr/>
                                                                <h1><p id="click3"><span class="glyphicon glyphicon-pushpin" style="color:#5D9406"></span> Education Details <span class="glyphicon glyphicon-triangle-bottom"></span></p></h1>
                                                                <div id="click33" style="display: none">
								<label for="name">School 1:</label>
								<input type="text" name="userSchool1" class="form-control" placeholder="for example: Convent School">
								<label for="name">Upto Class ?:</label>
								<input type="text" name="userUpto1" class="form-control" placeholder="for example: LKG - 10th">
								<label for="name">School 2:</label>
								<input type="text" name="userSchool2" class="form-control" placeholder="for example: Convent School">
								<label for="name">Upto Class ?:</label>
								<input type="text" name="userUpto2" class="form-control" placeholder="for example: 10th - 12th">
								<label for="name">College </label>
								<input type="text" name="userCollege" class="form-control" placeholder="for example: Medicaps Institute Of Science And Technology">
								<label for="name">Year / Sem:</label>
								<input type="text" name="userSem" class="form-control" placeholder="for example: 3 Year / 1 sem"><br>
								<center><input type="submit" class="btn btn-success" name="submit" value="submit"></center>
                                                                </div>
								<hr/>
								
								
							</div>
							</form>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			
			</div>
	
	
	</body>
</html>
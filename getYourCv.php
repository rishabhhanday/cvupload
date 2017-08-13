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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="getFinalCv.php" method="POST">
                    <div class="input-group">
                        <input type="text" name="userId1" placeholder="enter your USER ID" class="form-control">
                        <div class="input-group-btn">
                        <button type="submit" class="btn btn-default" id="clicked" name="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                
            </div>
            
            
            
            
            
            
	</body>
</html>

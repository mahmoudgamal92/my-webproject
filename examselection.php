<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>project-name</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/custom.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>


<body style="background: url('img/bg.jpg');background-size: cover;padding-bottom: 30px;overflow: hidden;">
	<div class="container-fluid">
		<!-- start navbar -->
		<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>

					</button>

				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Pouestion 2</a>
						</li>
						<li>
							<a href="#">Pouestion 3</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">
								<span class="glyphicon glyphicon-user"></span> Sign Up</a>
						</li>
						<li>
							<a href="#">
								<span class="glyphicon glyphicon-log-in"></span> Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

    <!-- End of navbar-->

<div>

<center><h2 style="font-family: serif;margin-top:30px;color:black;">"please choose the Exam you want to take"</h2></center>
</div>

    <div class="col-md-6" style="margin-left:25%;margin-top:15%;">

<form action = "dierct-to-exam.php" method="post">
<center>
<select name = "exam" class="form-control">
<option>c++</option>
<option>java</option>
<option>paython</option>
<option>web</option>
<option>network</option>
<option>software-development</option>
<option>csharp</option>
<option>graphics</option>

</center>
</select>
<br>
<br>
<input type="submit" class="btn btn-primary" value="start Exam"/>
</form>

    </div>
	<script src="js/jquery-3.3.1.min.js"></script>    
</body>
</html>
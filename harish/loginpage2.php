<!DOCTYPE html>
	<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>LOGIN PAGE</title>
	</head>
	<body>
	<form>
		<center>
			<img src="guvilogo.png" style="width: 200px">
			<div class="card mt-5" style="width: 60rem" align="center">
		<div class="container ">
			<div class="row">
	      	<div class="center md-3">
		        <div class="col-sm-3">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
					    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" required>
					  </div>
					  </div>
			  </div>
			</div>
			  <button type="submit" class="btn btn-primary" onclick="auth()" value="Submit">Submit</button>
			 </div>
		</center>
		<script>
		function auth(){
			window.location.assign("loginpage3.php");
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</div>	 
	</form>
	</body>
	</html>	
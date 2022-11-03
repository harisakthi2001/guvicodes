	<!DOCTYPE html>
	<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>REGISTRATION PAGE</title>
	</head>
	<body>
	<center>
		<img src="guvilogo.png" style="width: 200px">
	<div class="card mt-4" style="width: 60rem" align="center">
	    <div class="container">
	      <div class="row">
	      	<div class="center md-3">
		        <div class="col-sm-3">
				         <h1>Registration</h1>
				         <p>Enter The Details Given Below</p>
				         <hr class="mb-3">
				         <label for="firstName">First Name*</label>
				         <input  class="form-control" type="text" name="firstName" required>

				         <label for="lastName">Last Name*</label>
				         <input class="form-control" type="text" name="lastName" required>

				         <label for="MobileNumber">Mobile Number(+91)*</label>
				         <input class="form-control" type="text" name="MobileNumber" required>


				         <label for="email">E-mail*</label>
				         <input class="form-control" type="email" name="email" required>

				         <label for="Password">Password*</label>
				         <input class="form-control" type="Password" name="password" required>

				         <label for="Re-enterPassword ">Re-enter Password*</label>
				         <input class="form-control" type="text" name="Re-enterPassword" required>

				         <div class="mb-3"></div>
			             <input class="btn btn-outline-primary mb-3" type="submit" name="create" value="Sign Up" onclick="auth()">
	                </div>
	            </div>
	            </div>
	        </div>
	     </form>
	    </div>
		</center>
		<script>
		function auth(){
			window.location.assign("loginpage2.php");
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
	</html>


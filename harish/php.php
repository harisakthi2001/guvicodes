	<?php
	if (isset($_POST['create'])) {
	
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		echo "submitted;


        $db_servername = "localhost";
        $db_user = "root";
         $db_password = "hari@1711";
         $db_name = "login";



$connection = new mysqli($db_servername,$db_user,$db_password,$db_name);

if($connection->connect_error){
	echo "Not_Connected";
}
else {
	//echo "Connected to database <br>";

}



			
			
				
	}
	?>
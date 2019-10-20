  <?php 

	$id ="";
	$password = "";
	$cpassword = "";
	$username = "";
	$type = "";

	if (isset($_POST['signup'])) {
			$id = $_POST['id'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			$username = $_POST['username'];
			$type = $_POST['type'];

		if ($id == "" || $password == "" || $cpassword = "" || $username = "" || empty($_POST['type'])) {
		 	echo "Fill the all value";
		 }
		else{
			$myfile = fopen('User.txt', 'a');
			fwrite($myfile, $id."|".$password."|".$type."|");
			fclose($myfile);
 
 
 echo done;
		 } 


	}



 ?>

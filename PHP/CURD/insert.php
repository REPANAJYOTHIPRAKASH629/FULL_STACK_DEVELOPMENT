<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$host = 'localhost';  
		$user = 'root';  
		$pass = '';
		$dbname='Employee';
		$conn = mysqli_connect("localhost", "root", "", "Employee");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST['id'];
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO emp_data VALUES ('$id','$first_name', 
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<a href='index.php' target='_blank'>Go BACK</a>";

			echo nl2br("$id\n $first_name\n $last_name\n $gender\n $address\n $email");
		} 
		else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>

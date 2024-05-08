<!DOCTYPE html>
<html>

<head>
	<title>Select Page page</title>
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
		$query = 'SELECT * FROM emp_data';  
$result=mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0)
{  
while($row = mysqli_fetch_assoc($result))
{  
        echo "ID:{$row['id']}  <br>"."First Name:{$row['first_name']}  <br> ". "Last Name : {$row['last_name']} <br> ".    "Gender : {$row['gender']} <br>". "Address : {$row['address']} <br>"."Email : {$row['email']} <br>"."--------------------------------<br>";  
}
echo "<a href='index.php' target='_blank'>Go BACK</a>"; //end of while  
}
else
{  
echo "0 results";  
} 
mysqli_close($conn);
?>

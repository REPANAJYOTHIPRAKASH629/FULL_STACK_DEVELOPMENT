<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
	<p>
			<label for="id">ID:</label>
			<input type="text" name="id" id="id">
			</p>		
<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>
<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

			
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>

			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

			
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>

			<input type="submit" value="Submit">
			<a href='select.php' target='_blank'>Display data</a>
			<a href='deletepe.php' target='_blank'>Delete data</a>
		</form>
	</center>
</body>
</html>

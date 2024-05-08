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

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the ID to delete from the form
    $id_to_delete = $_POST["id"];

    // SQL query to delete a record from the "emp_data" table
    $sql = "DELETE FROM emp_data WHERE id = $id_to_delete";

    if ($conn->query($sql) === TRUE)
		{
        echo "Record deleted successfully";
		    } 
			else {
        echo "Error deleting record: " . $conn->error;
    }
	echo "<a href='index.php' target='_blank'>Go BACK</a>";
}

// Close the connection
$conn->close();
?>

<!-- HTML form for user input -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="id">Enter ID to delete:</label>
    <input type="text" id="id" name="id">
    <input type="submit" value="Delete">
</form>

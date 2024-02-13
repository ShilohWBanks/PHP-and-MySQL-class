<!DOCTYPE>

<html>
<body>

    <h1>Customers</h1>

		<table>

			<tr>

				<th>First Name</th>

				<th>Last Name</th>				

			</tr>
                       <?php
           
 
 
// Establish a database connection to the practice database on localhost.
 
$servername = "localhost";
$username = 'mgs_user';
$password = 'pa55word';
$dbname = "practice";
 
$connection = mysqli_connect($servername, $username, $password, $dbname);
 
if(mysqli_connect_errno()) {
	echo "Failed to connect.";
	exit();
}

 
// Establish a database connection to the practice database on localhost.
 
$servername = "localhost";
$username = 'mgs_user';
$password = 'pa55word';
$dbname = "practice";
 
$connection = mysqli_connect($servername, $username, $password, $dbname);
 
if(mysqli_connect_errno()) {
	echo "Failed to connect.";
	exit();
}
$sql1 = "SELECT DISTINCT first_name, last_name FROM customers";
 
// Call the appropriate method on the controller based on the request URL.
 
$result = $connection->query($sql1);
 
if($result->num_rows > 0) {
	// Output the result of the method to the browser.
	while($row = $result-> fetch_assoc()) {
		echo "<tr><td>" . $row["first_name"] . "</td><td>" .  $row["last_name"] . "</td>";
	}
}
 
?>
</table>
</body>
</html>


<footer><a href="../index.php">Index Page</footer>
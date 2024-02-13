<!DOCTYPE html>
<html>
<body>
<h1>Contacts</h1>
<table>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>				
</tr>
<?php
// Establish database connection
$servername = "localhost";
$username = 'mgs_user';
    $password = 'pa55word';
$dbname = "practice";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Determine which controller to load based on the request URL.
 
$sql1 = "SELECT * FROM customers";
 
// Call the appropriate method on the controller based on the request URL. 
$result = $conn->query($sql1);
if($result->num_rows > 0) {

    while($row = $result-> fetch_assoc()) {
        echo "<tr><td>" . $row["customer_id"] . "</td><td>" . $row["first_name"] . "</td><td>" .  $row["last_name"] . "</td><td>" .  $row["emailAddress"] . "</td><td>";
    }

}
 
?>
</table>
</body>
</html>
<footer><a href="views/add_customer.php">Add Customer</a></footer>
<footer><a href="views/list_customers.php">List Customers</footer>
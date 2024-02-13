<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Document</title>

</head>

<body>
 
<form action="add_customer.php" method="post">
    <input type="number" name = "id" placeholder="Enter ID">
       <br>

<input type="text" name = "first_name" placeholder="Enter First Name">

	<br>

	<input type="text" name = "last_name" placeholder="Enter Last Name">

	<br>

	<input type="email" name = "email" placeholder="Enter Email">

	<br>

	<input type="submit" name="submit">

<?php
 
$servername = "localhost";
$username = 'mgs_user';
$password = 'pa55word';
$dbname = "practice";
$connection = mysqli_connect($servername, $username, $password, $dbname);
 
 if(mysqli_connect_errno()) {
        echo "Failed to connect.";
        exit();
}
if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    
    $insert = "INSERT INTO customers (customer_id, first_name, last_name, emailAddress)
        VALUES('$id', '$first_name', '$last_name', '$email')";
    $result = mysqli_query($connection, $insert);
    if($result){
    echo "Data successfully entered";

    } 

}
?>
</form>
</body>
</html>
<footer><a href="../index.php">Index Page</footer>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "employee";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: ". mysqli_connect_error());
} 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
$designation = $_POST['designation'];
$manager = $_POST['manager'];
$no = $_POST['num'];

$sql = "INSERT INTO employeedetails (name, designation, manager)
VALUES ('$name', '$designation', '$manager')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}
header('Location: index.html');

?>
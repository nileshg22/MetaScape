<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$db_name = "comment";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST["name"];
$comment = $_POST["comment"];

$comment_length=strlen($comment);

if($comment_length > 500)
{
	header("location: index.php?error=1");
}
else {
	# echo "Thank you for your comment!";
	$query_in = "INSERT INTO comment VALUES ('', '".$name."', '".$comment."')";
	header("location: index.php");
	mysqli_query($conn,$query_in);

	echo $result;
	if (!$result) {

		die( "Invalid query: " . mysql_error());
	}

}




?>
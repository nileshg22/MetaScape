<html> 
<h1>Comment</h1>
</html>

<?php

echo "500 Character Limit";

?>

<html>
<form action="post_comment.php" method = "POST">
    <input type = "text" name = "name" value = "Your Name"><br>
    <textarea name="comment" cols="50" rows = "2">Enter a comment</textarea>
    <input type = "submit" value = "Comment">
</form>
</html>


<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$db_name = "comment";
$conn = mysqli_connect($servername, $username, $password, $db_name);

# mysqli_query("SELECT * FROM comment");
$sql = "SELECT name, comment FROM comment";
$outcome = $conn->query($sql);

if ($outcome->num_rows>0) {
    while ($row = $outcome->fetch_assoc()) {
      echo "Name: " .$row["name"]. " -  Comment: " . $row["comment"]. " " . $row["lastname"]. "<br>";
    }
}


?>
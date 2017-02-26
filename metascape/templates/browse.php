<?php require('db_connection.php'); ?>


<h1 class="page_heading">Itineraries</h1>
<h2 class="page_subheading"></h2>

<ul class="comment_ul">
<?php 
$sql = "SELECT * FROM browse";
$outcome = $conn2->query($sql);
if ($outcome->num_rows>0) {
    while ($row = $outcome->fetch_assoc()) { ?>      
      <li>
      <span id="comment_name"><?php echo $row["name"] ?></span><br>
      <span id="comment_comment"><?php echo $row["type"] ?></span>
      <span id="comment_comment"><?php echo $row["destination"] ?></span>
      <span id="comment_comment"><?php echo $row["rentalcar"] ?></span>
      <span id="comment_comment"><?php echo $row["hotel"] ?></span>
      <span id="comment_comment"><?php echo $row["activity1"] ?></span>
      <span id="comment_comment"><?php echo $row["activity2"] ?></span>
      <br></li>
    <?php 
  }
}
?>
</ul>

<h1 class="page_heading">Comment</h1>
<h2 class="page_subheading">500 Character Limit</h2>

<form id="comment_form" action="post_comment.php" method = "POST">
    <input type = "text" name = "name" placeholder = "Your Name"><br>
    <textarea name="comment" cols="50" rows = "2" placeholder="Enter a Comment"></textarea>
    <input type = "submit" value = "Comment">
</form>

<?php 
# mysqli_query("SELECT * FROM comment");
$sql = "SELECT name, comment FROM comment";
$outcome = $conn->query($sql); ?>

<ul class="comment_ul">
<?php 
if ($outcome->num_rows>0) {
    while ($row = $outcome->fetch_assoc()) { ?>      
      <li>
      <span id="comment_name"><?php echo $row["name"] ?></span><br>
      <span id="comment_comment"><?php echo $row["comment"] ?></span>
      <span id="comment_last_name"><?php echo $row["lastname"] ?></span>
      <br></li>
    <?php 
	}
}
?>
</ul>
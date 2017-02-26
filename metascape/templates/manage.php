<?php  ?>

<ul class="comment_ul">
<?php 
$db = pg_connect('host=localhost dbname=postgres user=postgres password=sederacs');
$query = "SELECT * FROM browseItinerary";
$result = pg_query($query); 
if ($result > 0) {
    while($myrow = pg_fetch_assoc($result)) { ?>      
      <li>
      <span id="comment_name"><?php echo $myrow["name"] ?></span><br>
      <span id="comment_comment1"><?php echo $myrow["type"] ?></span>
      <span id="comment_comment2"><?php echo $myrow["destination"] ?></span>
      <span id="comment_comment3"><?php echo $myrow["rentalcar"] ?></span>
      <span id="comment_comment4"><?php echo $myrow["hotel"] ?></span>
      <span id="comment_comment5"><?php echo $myrow["activity1"] ?></span>
      <span id="comment_comment6"><?php echo $myrow["activity2"] ?></span>
      <span id="comment_comment7"><?php echo $myrow["activity3"] ?></span>
      <span id="comment_comment8"><?php echo $myrow["activity4"] ?></span>
      <span id="comment_comment9"><?php echo $myrow["activity5"] ?></span>

      <br></li>
    <?php 
	}
}
?>
</ul>
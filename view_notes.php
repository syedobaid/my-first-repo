<?php
include 'db.php';


$sql = "SELECT * FROM list";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    	echo "  
    	<div ><button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#" .  $row["id"] . "\">". $row["title"] . "</button>
    	<div>
  <div id=\"" .  $row["id"] . "\" class=\"collapse\">" ."<div> <a href=\"delete.php?id=".$row["id"]."\"><div style=\"float: right;\">X</div></a> </div>"."<div style=\"float: left;\">". $row["details"] .$row["date"] ."</div>
 <hr width=\"200px\">

  </div></div>
  <div style=\"margin-top: 10px; width= 300px;\"></div></div>
  "

  ;
    }
} else {
    echo "No New Reminder";
}

mysqli_close($conn);
?>
<?php
include 'db.php';
// we use addslashes to make secure our website from sql injection 1=1--
$title = addslashes($_GET['title']);
$desc = addslashes($_GET['desc']);
//$sql = "INSERT INTO MyGuests (title, description, status, date_post)VALUES ("Task1","Description is here",1,"");
$date=date("Y-m-d") . date("h:i:sa");
$sql = "INSERT INTO list(title, details, status, date, date_post) VALUES ('$title','$desc',0,'$date','')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header( 'Location: index.php' ) ;


?>


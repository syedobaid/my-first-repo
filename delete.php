<?php
include 'db.php';

if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1="delete from list where id='$id'";
if (mysqli_query($conn,$query1)) {
header( 'Location: index.php' ) ;
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

mysqli_close($conn);
?>
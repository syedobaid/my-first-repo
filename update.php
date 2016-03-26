<?php
include 'db.php';

if(isset($_GET['id']))
{
$id=addslashes($_GET['id']);
$sql="Update list SET title='',details='',status= WHERE id=";
if (mysqli_query($conn,$sql)) {
header( 'Location: index.php' ) ;
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

mysqli_close($conn);
?>
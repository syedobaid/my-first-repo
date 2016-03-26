<?php  
include 'db.php';
if(isset($_POST[taskId]) && isset($_POST[taskStatus])){
$sql = "Update list SET status= '$_POST[taskStatus]' WHERE id= $_POST[taskId]";


if (mysqli_query($conn,$sql)) {
header( 'Location: index.php' ) ;
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
//header ('location: index.php');

}
else{
	echo "cannot do any thing";
}

//header ('location: index.php');

?>
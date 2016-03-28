<?php 
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/bootstrap.min.js">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
	<title></title>
</head>

<body>
<div class="container">
<h1>Todo List</h1>
<!--left panel  -->
<div class="col-sm-4">
  <div class="panel panel-default">
    <div class="panel-body">
      <!-- Form Starting  -->
      <form role="form" action="add_new.php" method="GET">
      <div class="form-group">
        <label for="usr">Title:</label>
        <input type="text" class="form-control" id="usr" name="title">
      </div>

  <div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" id="comment" name="desc"></textarea>
</div>


<button type="submit" class="btn btn-primary">Add New</button>
 </form>

 <!-- form finish -->
 </div>
 </div>
 </div>

<!-- right panel-->

<div class="col-sm-8">

<div class="panel panel-default">
  <div class="panel-body">
<div class="form-group">
  
  <select class="form-control" id="task_cat" onchange="taskshow()">
    <option value="">All</option>
    <option value="complete">Complete</option>
    <option value="incomplete">Incomplete</option>
  </select>
</div>
<?php
	include 'view_acco.php';
?>
  <form id="updateTask" action="updateTask.php" method="POST">
    <input type="hidden" name="taskId" id="taskId">
    <input type="hidden" name="taskStatus" id="taskStatus">
  </form>

  </div>
  </div>
  </div>
  </div>




</body>
</html>
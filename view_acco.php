<?php
include 'db.php';

$sql = "SELECT * FROM list";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { 
    // viewing checkboxes from databse
    $cross = (bool)$row["status"];
    $checked = ($cross) ? 'checked="checked"' : '';
    $taskStatus = '';
    // updating checkboxes in database
    if ($cross == true) {
      $taskStatus = 'complete';
    } else if ($cross == false) {
      $taskStatus = 'incomplete';
    }
    //applying cross on title and discription
    $textdecor = ($cross) ? ' cross_txt' : '';
  ?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default <?= $taskStatus; ?>">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title <?php echo $textdecor; ?>" >
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row["id"];?>" aria-expanded="true" aria-controls="collapseOne">
        <?php // title viewing 
         echo $row["title"];?>
        </a>
        <!-- Displaying X button for delete  -->
        <a href="delete.php?id=<?php echo  $row["id"]?>"> X </a>
        <div class="checkbox">
        
        <label><input type="checkbox" class="task_status" value="<?= $row['id'] ?>" <?php echo $checked; ?> />done</label></a>
        </div>
      </h4>
    </div>
    <div id="<?php echo $row["id"]; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body <?php echo $textdecor; ?>" >
      <?php echo $row["details"];?>
      </div>
    </div>
  </div>

<?php } } else {
    echo "No New Reminder";
}

mysqli_close($conn);
?>
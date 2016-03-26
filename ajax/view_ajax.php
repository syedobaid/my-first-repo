<script>
  //function status_update(){
//if(document.getElementById('status_c').checked==true){

</script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<?php
include 'db.php';


$sql = "SELECT * FROM list";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row["id"];?>" aria-expanded="true" aria-controls="collapseOne">

        <?php echo $row["title"];?>

        </a>

        <a href="delete.php?id=<?php echo  $row["id"]?>"> X </a>
        <a href=""></a>
        <a href=""></a>
        <div class="checkbox">
        
        <label><input type="checkbox" id="status_c" value=" <?php  echo $row["status"]; ?>" onclick="status_update()">done</label></a>
        </div>
      </h4>
    </div>
    <div id="<?php echo $row["id"]; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      <?php echo $row["details"];?>
      </div>
    </div>
  </div>

<?php } } else {
    echo "No New Reminder";
}

mysqli_close($conn);
?>
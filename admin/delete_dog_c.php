<?php
session_start();
if(isset($_SESSION['user_id'])==''){
	header('Location: login.php?restricted');
}
include 'db_config.php';
$id=$_GET['id'];

$sql="DELETE FROM dog WHERE dog_id='$id'";
$result=mysqli_query($con, $sql);

if($result){
  ?>
  <script type="text/javascript">
    alert('Dog successfully deleted !!');
    window.location.href='view_dog.php';
  </script>
  <?php
}


 ?>

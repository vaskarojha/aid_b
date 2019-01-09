<?php
include 'db_config.php';
	$id= $_GET['id'];

if(isset($_POST['submit']))
{
	$breed = mysqli_real_escape_string($con, $_POST['breed']);
	$type = mysqli_real_escape_string($con, $_POST['type']);
  $life = mysqli_real_escape_string($con, $_POST['life']);
	$weight = mysqli_real_escape_string($con, $_POST['weight']);
	$height = mysqli_real_escape_string($con, $_POST['height']);
	$price = mysqli_real_escape_string($con, $_POST['price']);

  $file = $_FILES['file'];
  $fileName=$_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  if(empty($breed) || empty($type)  || empty($life)  || empty($height) || empty($price)){
    ?>
    <script type="text/javascript">
      alert("All field required!!");
      window.location.href = 'add_dog.php';
    </script>
    <?php
  }
  else{
    if(!preg_match("/^[a-zA-Z ]*$/",$breed)){
      ?>
      <script type="text/javascript">
        alert("Breed Name should alphabet!!");
        window.location.href = 'add_dog.php';
      </script>
      <?php
    }
    else{
      if(!preg_match("/^[a-zA-Z ]*$/",$type)){
        ?>
        <script type="text/javascript">
          alert("Type should alphabet!!");
          window.location.href = 'add_dog.php';
        </script>
        <?php
          }
          else{
            if(empty($fileName )){
              $sql="UPDATE `dog` SET `breed_name`='$breed',`dog_type`='$type',`life_span`='$life',`weight`='$weight',`height`='$height' ,`price`='$price' WHERE `dog_id`='$id' ";
              $queryFire=mysqli_query($con, $sql);
              //echo $sql;

              if($queryFire){
                ?>
                <script type="text/javascript">
                  alert("Update successfully");
                  window.location.href = 'view_dog.php';
                </script>
                <?php
              }
            }
            else{
              $fileExt = explode('.', $fileName);
              $fileActualExt = strtolower(end($fileExt));
              $allowed = array('jpg', 'jpeg', 'png');
              if(in_array($fileActualExt, $allowed)){
              if($fileError === 0){
                    if($fileSize < 200000){
                      $fileNameNew = uniqid('',true).".".$fileActualExt;
                      $fileDestination = 'uploads/dog/'.$fileNameNew;
                        $sql= "UPDATE `dog` SET `breed_name`='$breed',`dog_type`='$type',`life_span`='$life',`weight`='$weight',`height`='$height' ,`price`='$price', `image`='$fileNameNew' WHERE `dog_id`='$id' ";
                        //echo $sql;
                        $query=mysqli_query($con, $sql);
                        if($query){
                          move_uploaded_file($fileTmpName, $fileDestination);
                          ?>
                          <script type="text/javascript">
                            alert("Update successfully");
                            window.location.href = 'view_dog.php';
                          </script>
                          <?php
                        }
                    }
                    else{
                      echo "your file is too big !";
                    }
                  }
              else{
                echo "there was a error on uploading file" ;
            }
          }
          else{
              echo"You cannot upload this file type";
          }
        }
        }
      }
    }
  }
?>

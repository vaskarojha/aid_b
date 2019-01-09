<?php
include 'db_config.php';

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

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg', 'jpeg', 'png');

  if(empty($breed) || empty($type) || empty($life) || empty($life)  || empty($height) || empty($price)){
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
        if(in_array($fileActualExt, $allowed)){
          if($fileError === 0){
                if($fileSize < 200000){
                  $fileNameNew = uniqid('',true).".".$fileActualExt;
                  $fileDestination = 'uploads/dog/'.$fileNameNew;
                    $sql= "INSERT INTO `dog`(`breed_name`, `image`, `dog_type`, `life_span`, `weight`, `height`, `price`) VALUES ('$breed', '$fileNameNew', '$type', '$life','$weight', '$height', '$price')";
                    $query=mysqli_query($con, $sql);
                    if($query){
                      move_uploaded_file($fileTmpName, $fileDestination);
                      header("Location: index.php?succeed");
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
?>

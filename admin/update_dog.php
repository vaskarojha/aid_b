<?php
session_start();
if(isset($_SESSION['user_id'])==''){
	header('Location: login.php?restricted');
}
	include 'db_config.php';
	$id= $_GET['id'];


	$sql= "SELECT * FROM dog WHERE dog_id='$id'";

	$result=mysqli_query($con, $sql);

	if(mysqli_num_rows($result) > 0){
		$row=mysqli_fetch_assoc($result);?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update dog info</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include 'includes/header.php';   ?>

	<div class="col-sm-8 col-sm-offset-4 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Manage Dog / Update Dog</li>
			</ol>
			<div class="col-sm-offset-1 col-md-10">
			<form method="POST"  action="update_dog_c.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
				<h2>Add New Dog </h2>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 ">
						<div class="form-group">
							<label for="">Breed Name</label>
							<input type="text" name="breed" value="<?php echo $row['breed_name']; ?>" class="form-control input-lg" placeholder="Enter breed">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<label for="">Dog Type</label>
							<input type="text" name="type" value="<?php echo $row['dog_type']; ?>" class="form-control input-lg" placeholder="Enter dog's type" tabindex="1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<label for="">Life Span</label>
							<input type="text" name="life" value="<?php echo $row['life_span']; ?>" class="form-control input-lg" placeholder="Enter dog's life span" tabindex="1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<label for="">Weight</label>
							<input type="text" name="weight" value="<?php echo $row['weight']; ?>" class="form-control input-lg" placeholder="Enter dog weight" tabindex="1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<label for="">Height</label>
							<input type="text" name="height" value="<?php echo $row['height']; ?>" class="form-control input-lg" placeholder="Enter dog price" tabindex="1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<label for="">Price</label>
							<input type="number" name="price" value="<?php echo $row['price']; ?>" class="form-control input-lg" placeholder="Enter dog price" tabindex="1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<label for="">Dog image</label>
							<img style="width:60px; height:60px;" src="uploads/dog/<?php echo trim($row['image']) ?>">
							<input type="file" name="file" class="form-control input-lg" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
						<input type="submit" name="submit" value="Update Dog Info" class="btn btn-primary btn-block btn-md" ><br>	 </div>
				</div>
			</div>
			</form>
		</div>
		</div><!--/.row-->
	</div>


<?php
		}
	?>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>

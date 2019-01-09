
<?php
session_start();
if(isset($_SESSION['user_id'])==''){
	header('Location: login.php?restricted');
}
include 'db_config.php';

$sql = "SELECT * FROM dog";
$result = mysqli_query($con, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Dog</title>
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
	<div class="col-md-offset-2 col-sm-offset-2 ">

		<div class=" col-md-12 col-sm-12 col-xs-12	">
				<h2 align ='center'>All added dog list</h2>
			<table class=" col-sm-12 col-xs-12 table table-striped">
				<thead>
					<tr class="bg-info">
						<th scope="col">Dog ID</th>
						<th scope="col">Breed Name</th>
						<th scope="col">Dog Type</th>
						<th scope="col">Life</th>
						<th scope="col">Weight</th>
						<th scope="col">Height</th>
						<th scope="col">Price</th>
            <th scope="col">Image</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
								?>
					<tr>
						<td><?php echo $row['dog_id'] ?></td>
						<td><?php echo $row['breed_name'] ?></td>
						<td><?php echo $row['dog_type'] ?></td>
						<td><?php echo $row['life_span'] ?></td>
						<td><?php echo $row['weight'] ?></td>
						<td><?php echo $row['height'] ?></td>
						<td><?php echo $row['price'] ?></td>
            <td><img style="width:60px; height:60px;" src="uploads/dog/<?php echo trim($row['image']) ?>"></td>
						<td> <a href="delete_dog_c.php?id=<?php echo $row['dog_id'] ?>">Delete</a> </td>
					</tr>
				<?php	}
			} else {
					echo "0 results";
			}
			mysqli_close($con);
			 ?>
				</tbody>
			</table>
		</div>
	</div>
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

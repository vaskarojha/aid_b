<?php
session_start();
include 'db_config.php';
	if(isset($_POST['submit'])){
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$password = md5($password);
		if(empty($username) && empty($password)){
			?>
			<script type="text/javascript">
				alert("Please enter username and password!!");
				window.location.href = 'login.php';
			</script>
			<?php
		}
		else{
			$user_check="SELECT * FROM admin where username='$username' AND password='$password'";
			//echo $user_check;
			$query=mysqli_query($con, $user_check);
			if(mysqli_num_rows($query)>0){
				header('Location: index.php');
			}
			else{
				?>
				<script type="text/javascript">
					alert("Invalid Username or password!!");
					window.location.href = 'login.php';
				</script>
				<?php
			}
		}
	}
	$query="SELECT * FROM admin where username='$username' AND password='$password'";
	$result=mysqli_query($con, $query);
			$row = mysqli_fetch_assoc($result);
						//creating session.
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['type']=$_row['type'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['contact']=$row['contact'];
			$_SESSION['fullname'] = $row['fullname'];
?>

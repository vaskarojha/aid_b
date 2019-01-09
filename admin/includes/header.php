
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Welcome </span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-user"></em><span class="label label-danger">Setting</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">

							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">

									</a>
</li>
</li>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<!--Dogs menu section -->

			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-cart">&nbsp;</em>Manage Dogs <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="add_dog.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Dog
					</a></li>
					<li><a class="" href="view_dog.php">
						<span class="fa fa-arrow-right">&nbsp;</span> View/Edit Dog
					</a></li>
					<li><a class="" href="delete_dog.php">
						<span class="fa fa-arrow-right">&nbsp;</span>Delete Dog
					</a></li>
				</ul>
			</li>
			<!--Dogs section ends-->
			<!--Accessoriess menu section -->

			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-cart">&nbsp;</em>Manage Access <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Accessoriess
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Edit Accessoriess
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span>Delete Accessoriess
					</a></li>
				</ul>
			</li>
			<!--Accessoriess section ends-->

			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	</div>	<!--/.main-->

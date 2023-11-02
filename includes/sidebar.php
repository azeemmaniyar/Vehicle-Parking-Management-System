<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="dist/img/avatar.png" width="50" class="img-responsive" alt="Icon">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['role'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<form role="search" action="search-results.php" name="search" method="POST" enctype="multipart/form-data">

			<!--  -->

			<div class="form-group">
				<input type="text" class="form-control" id="searchdata" name="searchdata" placeholder="Search Vehicle-Reg">
			</div>
		</form>
		<ul class="nav menu">
			<li class="<?php if($page=="dashboard") {echo "active";}?>"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			
			<?php
			$role=$_SESSION['role'];
			if($role=='Admin'){
				?>				
			<li class="<?php if($page=="vehicle-category") {echo "active";}?>"><a href="vehicle-category.php"><em class="fa fa-th-large">&nbsp;</em> Vehicle Category</a></li>
			<li class="<?php if($page=="manage-vehicles") {echo "active";}?>"><a href="manage-vehicles.php"><em class="fa fa-car">&nbsp;</em> Vehicle Entry</a></li>
			<li class="<?php if($page=="income") {echo "active";}?>"><a href="total-income.php"><em class="fa fa-inr">&nbsp;</em> Total Income</a></li>
			<li class="<?php if($page=="reports") {echo "active";}?>"><a href="reports.php"><em class="fa fa-file">&nbsp;</em> View Reports</a></li>

			<?php }?>
			<li class="<?php if($page=="in-vehicle") {echo "active";}?>"><a href="in-vehicles.php"><em class="fa fa-toggle-on">&nbsp;</em> IN Vehicles</a></li>
            <li class="<?php if($page=="out-vehicle") {echo "active";}?>"><a href="out-vehicles.php"><em class="fa fa-toggle-off">&nbsp;</em> OUT Vehicles</a></li>
			<!-- <li class="<?php if($page=="about") {echo "active";}?>"><a href="about.php"><em class="fa fa-info">&nbsp;</em> About Page</a></li> -->
			<li class="<?php if($page=="logout") {echo "active";}?>"><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
			
		</ul>
		
	</div><!--/.sidebar-->
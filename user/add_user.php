<!doctype html>
<html lang="en">
<head>
	<title>User | Add</title>
	<?php include '/var/www/html/project/CMSAdminDashboard/tmp/link.php'; ?>
</head>
<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar">
		<?php 
			include '/var/www/html/project/CMSAdminDashboard/tmp/header.php'; 
		?>        
		<div class="app-main">
			<?php include '/var/www/html/project/CMSAdminDashboard/tmp/sidebar.php'; ?>
			<div class="app-main__outer">
				<div class="app-main__inner">
					<div class="app-page-title">
						<div class="page-title-wrapper">
							<div class="page-title-heading">
								<div class="page-title-icon">
									<i class="fas fa-user-plus icon-gradient bg-malibu-beach">
									</i>
								</div>
								<div>Add New User
								</div>
							</div>    
						</div>
					</div> 
						<div class="main-card mb-3 card">
							<div class="card-body"><h5 class="card-title">User form</h5>
								<form class="" method="post" action="#">
									<div class="form-row">
										<div class="col-md-8">
											<div class="position-relative form-group">
												<label for="exampleEmail11" class="">Name</label>
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-tag"></i></span></div>
													<input placeholder="Your name here..." type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-8">
											<div class="position-relative form-group">
												<label for="exampleEmail11" class="">Email</label>
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span></div>
													<input placeholder="Email here..." type="email" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											<div class="position-relative form-group">
												<label for="exampleEmail11" class="">Password</label>
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-key"></i></span></div>
													<input placeholder="Your password here..." type="password" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="position-relative form-group">
												<label for="exampleEmail11" class="">Confirm Your Password</label>
												<div class="input-group">
													<input placeholder="Retype your password here..." type="password" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											<div class="position-relative form-group">
												<label for="exampleEmail11" class="">Level</label>
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-ellipsis-h"></i></span></div>
													<select>
														<?php $x=1; for ($i=0; $i < 5; $i++) { ?>
															<option>Level <?= $x++ ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="w-100 text-center">
										<a class="btn btn-lg btn-shadow btn-warning" href="index.php"><i class="fas fa-angle-double-left"></i> BACK</a>
										<button type="submit" class="btn btn-lg btn-shadow btn-info">ADD <i class="fas fa-plus"></i></button>
									</div>
								</form>
							</div>
						</div>
				</div>
				<?php include '/var/www/html/project/CMSAdminDashboard/tmp/footer.php'; ?>   
			</div>
			<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		</div>
	</div>
	<?php include '/var/www/html/project/CMSAdminDashboard/tmp/script.php';  ?>
</body>
</html>

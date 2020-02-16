<!doctype html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<?php include '/var/www/html/project/CMSAdminDashboard/tmp/link.php'; ?>
</head>
<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
		<?php 
			include '/var/www/html/project/CMSAdminDashboard/tmp/header.php'; 
			include '/var/www/html/project/CMSAdminDashboard/tmp/themeSettings.php';
		?>        
		<div class="app-main">
			<?php include '/var/www/html/project/CMSAdminDashboard/tmp/sidebar.php'; ?>
			<div class="app-main__outer">
				<div class="app-main__inner">
					<div class="app-page-title">
						<div class="page-title-wrapper">
							<div class="page-title-heading">
								<div class="page-title-icon">
									<i class="pe-7s-home icon-gradient bg-mean-fruit">
									</i>
								</div>
								<div>Home
									<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
									</div>
								</div>
							</div>    
						</div>
					</div>            
					<div class="row">
						<div class="col-md-6 col-xl-5">
							<div class="card mb-3 widget-content bg-midnight-bloom">
								<div class="widget-content-wrapper text-white">
									<div class="widget-content-left">
										<div class="widget-heading">Total Articles</div>
										<div class="widget-subheading">Last year list</div>
									</div>
									<div class="widget-content-right">
										<div class="widget-numbers text-white"><span>999+</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="main-card mb-3 card">
								<div class="card-header">Active Users
									<div class="btn-actions-pane-right">
										<div role="group" class="btn-group-sm btn-group">
											<button class="active btn btn-focus">Last Week</button>
											<button class="btn btn-focus">All Month</button>
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="align-middle mb-0 table table-borderless table-striped table-hover">
										<thead>
										<tr>
					            <th style="width: 20px;text-align: center;">ID</th>
											<th>Name</th>
											<th class="text-center">Level</th>
											<th class="text-center">Status</th>
											<th class="text-center">Actions</th>
										</tr>
										</thead>
										<tbody>
											<?php 
											for ($i=0; $i < 5; $i++) { 
											?>
										<tr>
											<td class="text-center text-muted">#345</td>
											<td>
												<div class="widget-content p-0">
													<div class="widget-content-wrapper">
														<div class="widget-content-left mr-3">
															<div class="widget-content-left">
																<img width="40" class="rounded-circle" src="https://lh3.googleusercontent.com/-W2Om2rXznvU/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rf1REiQh253KV1_oP46O9r3HfrrQg.CMID/s83-c/photo.jpg" alt="">
															</div>
														</div>
														<div class="widget-content-left flex2">
															<div class="widget-heading">Iyas Muzani</div>
															<div class="widget-subheading opacity-7">Web Developer</div>
														</div>
													</div>
												</div>
											</td>
											<td class="text-center">
												<div class="badge badge-info">Admin</div>
											</td>
											<td class="text-center">
												<div class="badge badge-danger">IN PROGRESS</div>
											</td>
											<td class="text-center">
												<button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
											</td>
										</tr>
											<?php 
											 } 
											 ?>
										</tbody>
									</table>
								</div>
								<div class="d-block text-center card-footer">
									<button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
									<button class="btn-wide btn btn-success">Save</button>
								</div>
							</div>
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
